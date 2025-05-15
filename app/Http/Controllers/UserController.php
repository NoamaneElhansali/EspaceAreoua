<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Publication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function index()
    {
        $catalogues = Publication::all()->map(function ($pub)  {
            
            return [
                'detail' => [
                    'id' => $pub->id,
                    'title' => app()->getLocale() == "ar" ? $pub->title_ar : $pub->title_fr,
                    'disciption' => app()->getLocale() == "ar" ? $pub->disciption_ar : $pub->disciption_fr,
                    'categorie' => $pub->categorie,
                ],
                'photo' => $pub->publication_ressources()->limit(1)->get(['photo_path']),
            ];
        })->sortByDesc('created_at');

        $categories = Publication::select('categorie')->groupBy('categorie')->get();
        return view('home-page',[
            'catalogues' => $catalogues,
            'categories' => $categories
        ]);
    }

    public function lang($locale)
    {
        if (!in_array($locale, ['en', 'fr', 'ar'])) {
            abort(400);
        }

        session(['locale' => $locale]);
        return back();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $name = $user->getName();
        $email = $user->getEmail();
        $avatar = $user->getAvatar();
        $googleId = $user->getId();

        $deja_inscrire = User::where('email', $email)->first();
        if ($deja_inscrire) {
            auth()->login($deja_inscrire);
            return redirect()->route("home-page");
        } else {
            $newUser = User::create([
                'name' => $name,
                'email' => $email,
                'profile_picture' => $avatar,
                'google_id' => $googleId,
                'password' => Crypt::encrypt(Str::random(16)),
            ]);
            auth()->login($newUser);
            session()->flash('first_login', true);
            return redirect()->route("home-page");
        }
    }

    public function updateProfileFirst(Request $request)  {
        $validateData = $request->validate([
            'nameUpdate' => 'required|string|max:255',
            'passwordUpdate' => 'required|string|min:8',
        ], [
            'nameUpdate.required' => 'Le champ nom est obligatoire.',
            'nameUpdate.string' => 'Le nom doit être une chaîne de caractères.',
            'nameUpdate.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'passwordUpdate.required' => 'Le champ mot de passe est obligatoire.',
            'passwordUpdate.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        $user = auth()->user();
        if(!$user){
            return redirect()->route("home-page");
        }
        $user->name = $request->nameUpdate;
        $user->password = Crypt::encrypt($request->passwordUpdate);
        $user->updated_at = now(); 


        $user->save();
        return redirect()->route('home-page')->with('success', 'Profil mis à jour avec succès.');
    }

    public function login(Request $request)  {
        $request->validate([]);
    }

    public function demande(){
        return view('demande-service');
    }

    public function create_demande(Request $request){
        $services = [
            "businessCards",
            "flyers",
            "brochures",
            "banners",
            "tshirts",
            "stickers",
            "envelopes",
            "invoices",
            "letterheads",
            "calendars",
            "paperBags",
            "signboards",
            "branding",
            "graphicDesign",
            "laserCut",
            "specialSurfaces",
            "photoShoot",
            "autre"
        ];
        $request->validate([
            'tel' => ['required', 'string', 'regex:/^0[5-7][0-9]{8}$/'],
            'serviceDemande' => ['required', 'array', 'min:1'],
            'serviceDemande.*' => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($services) {
                    if (!in_array($value, $services)) {
                        $fail("Le service sélectionné ($value) n'est pas valide.");
                    }
                }
            ],
            'descriptionDemande' => ['required', 'string', 'min:10', 'max:2000'],
            'fileImages' => ['nullable', 'array'],
            'fileImages.*' => ['file', 'mimes:jpeg,png,jpg,gif,webp', 'max:3072'],
        ], [
            'tel.required' => 'Le numéro de téléphone est obligatoire.',
            'tel.regex' => 'Le numéro de téléphone est invalide. Il doit commencer par 05, 06 ou 07 et contenir 10 chiffres.',
            
            'serviceDemande.required' => 'Veuillez sélectionner au moins un service.',
            'serviceDemande.array' => 'Le format des services est invalide.',
            'serviceDemande.*.required' => 'Chaque service sélectionné est obligatoire.',
            'serviceDemande.*.string' => 'Le nom du service doit être une chaîne de caractères.',
            
            'descriptionDemande.required' => 'Veuillez décrire votre demande.',
            'descriptionDemande.min' => 'La description doit contenir au moins :min caractères.',
            'descriptionDemande.max' => 'La description ne doit pas dépasser :max caractères.',
            
            'fileImages.array' => 'Les fichiers doivent être envoyés sous forme de tableau.',
            'fileImages.*.file' => 'Chaque fichier doit être un fichier valide.',
            'fileImages.*.mimes' => 'Les fichiers doivent être au format : jpeg, png, jpg, gif ou webp.',
            'fileImages.*.max' => 'Chaque image ne doit pas dépasser 3 Mo.',
        ]); 
        
        

        $demande = Demande::create([
            'discription' => $request->descriptionDemande,
            'services' => implode('@--@',$request->serviceDemande),
            'tel' => $request->tel,
            'user_id' => auth()->id()
        ]);


        if($demande){
            if($request->fileImages && count(value: $request->fileImages) > 0){
                foreach ($request->fileImages as $image) {
                    $path = $image->store('demande','public');
                    $demande->demande_ressources()->create([
                        'file_path' => $path,
                        'file_type' => 'image'
                    ]);
                }
            }
        }else{
            return redirect()->route('demande-service')->with('error','probleme en se demande');
        }

        return redirect()->route('demande-service')->with('success','Votre demande a été envoyée avec succès!');
    }
}
