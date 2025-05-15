<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Publication;
use App\Models\PublicationRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $catalogue = Publication::all()->map(function ($pub)  {

            return [
                'detail' => [
                    'id' => $pub->id,
                    'title' => app()->getLocale() == "ar" ? $pub->title_ar : $pub->title_fr,
                    'disciption' => app()->getLocale() == "ar" ? $pub->disciption_ar : $pub->disciption_fr,
                    'categorie' => $pub->categorie,
                ],
                'photos' => $pub->publication_ressources()->get(),
            ];
        })->sortByDesc('created_at');
        return view('catalogue-admin',[
            'catalogues' => $catalogue
        ]);
    }

    public function create(Request $request)
    {
        $categories = [
            'Impression Professionnelle',
            "Communication d'Entreprise" ,
            "Événementiel",
            "Textile",
            "Décoration",
            "Packaging",
            "Produits Promotionnels",
            "Grand Format",
            "Services Graphiques",
            "Produits Spéciaux"
          ];
        $request->validate([
            'titreCatalogueAr' => "required|string|max:255",
            'titreCatalogueFr' => "required|string|max:255",
            'descriptionCatalogueAr' => "required|string",
            'descriptionCatalogueFr' => "required|string",
            'categorieCatalogue' => [
                                'required',
                                'string',
                                function ($attribute, $value, $fail) use ($categories) {
                                    if (!in_array($value, $categories)) {
                                        $fail(' La catégorie sélectionnée n\'est pas valide.');
                                    }
                                }
                            ],
            'photoCatalogue' => "required|array",
            "photoCatalogue.*" => "file|mimes:jpeg,png,jpg,gif,webp|max:3072"
        ],  [
            'titreCatalogue.required' => 'Le titre du catalogue est obligatoire.',
            'titreCatalogue.string' => 'Le titre doit être une chaîne de caractères.',
            'titreCatalogue.max' => 'Le titre ne doit pas dépasser 255 caractères.',

            'descriptionCatalogue.required' => 'La description est obligatoire.',
            'descriptionCatalogue.string' => 'La description doit être une chaîne de caractères.',

            'categorieCatalogue.required' => 'La catégorie est obligatoire.',
            'categorieCatalogue.string' => 'La catégorie doit être une chaîne de caractères.',

            'photoCatalogue.array' => 'Les photos doivent être sous forme de tableau.',
            'photoCatalogue.required' => 'Les photos est obligatoire.',
            'photoCatalogue.*.file' => 'Chaque fichier doit être une image valide.',
            'photoCatalogue.*.mimes' => 'Les formats acceptés sont : jpeg, png, jpg, gif, webp.',
            'photoCatalogue.*.max' => 'Chaque image ne doit pas dépasser 3 Mo.',
        ]);
        $pub = Publication::create([
            'title_ar' => $request->titreCatalogueAr,
            'title_fr' => $request->titreCatalogueFr,
            'disciption_ar' => $request->descriptionCatalogueAr,
            'disciption_fr' => $request->descriptionCatalogueFr,
            'categorie' => $request->categorieCatalogue,
            'user_id' => auth()->id(),
        ]);
        if($pub){
            if(!empty($request->photoCatalogue)){
                foreach ($request->photoCatalogue as $photo) {
                    $path = $photo->store('catalogue','public');
                    $pub->publication_ressources()->create([
                        'photo_path' => $path
                    ]);
                }
            }
        }else{
            return redirect()->route('catalogue.admin')->with('error' , "probleme en l'ajoute d'un catalogue");
        }

        return redirect()->route('catalogue.admin')->with('success','ajoute avec succes');
    }

    public function delete($catalogue_id = null){
        if($catalogue_id == null){
            return redirect()->route('catalogue.admin')->with('error','probleme en suppreme de catalogue');
        }

        $pub = Publication::find($catalogue_id);
        if($pub){
            $photos = $pub->publication_ressources()->get();
            if($photos){
                foreach ($photos as $photo) {
                    $path = $photo->photo_path; 
                    
                    if (Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
            $pub->delete();
            return redirect()->route('catalogue.admin')->with('error','Catalogue suppreme !');
        }else{
            return redirect()->route('catalogue.admin')->with('error',"Catalogue n'est exists pas !");
        }

    }

    public function update(Request $request,$catalogue_id = null)  {
        if ($catalogue_id == null) {
            return redirect()->route('catalogue.admin')->with(['error'=>"probleme en se catalogue"]);
        }
        if(empty($request->input("photoCatalogueReste" . $catalogue_id)) && empty($request->file('photoCatalogueUpdate'. $catalogue_id))){
            if(empty($request->input("photoCatalogueReste" . $catalogue_id))){
                $request->validate([
                    "photoCatalogueReste" . $catalogue_id => 'required'
                ],[
                    "photoCatalogueReste" . $catalogue_id.".required" => 'Les photos est obligatoire.'
                ]);
            }else{
                $request->validate([
                    "photoCatalogueUpdate". $catalogue_id .".*" => 'required'
                ],[
                    'photoCatalogueUpdate' . $catalogue_id.'.*.required' => 'Les photos est obligatoire.'
                ]);
            }
        }
        $categories = [
            'Impression Professionnelle',
            "Communication d'Entreprise" ,
            "Événementiel",
            "Textile",
            "Décoration",
            "Packaging",
            "Produits Promotionnels",
            "Grand Format",
            "Services Graphiques",
            "Produits Spéciaux"
          ];
        $validateData = $request->validate([
            'titreCatalogueUpdateAr' . $catalogue_id => "required|string|max:255",
            'titreCatalogueUpdateFr' . $catalogue_id => "required|string|max:255",
            "descriptionCatalogueUpdateAr" . $catalogue_id => "required|string",
            "descriptionCatalogueUpdateFr" . $catalogue_id => "required|string",
            'categorieUpdate-'. $catalogue_id => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($categories) {
                    if (!in_array($value, $categories)) {
                        $fail(' La catégorie sélectionnée n\'est pas valide.');
                    }
                }
            ],
            "photoCatalogueReste" . $catalogue_id => 'nullable|string',
            'photoCatalogueUpdate'. $catalogue_id => "array",
            "photoCatalogueUpdate". $catalogue_id .".*" => "file|mimes:jpeg,png,jpg,gif,webp|max:3072"
        ], [
            'titreCatalogueUpdateAr' . $catalogue_id.'.required' => 'Le titre du catalogue est obligatoire.',
            'titreCatalogueUpdateAr' . $catalogue_id.'.string' => 'Le titre doit être une chaîne de caractères.',
            'titreCatalogueUpdateAr' . $catalogue_id.'.max' => 'Le titre ne doit pas dépasser 255 caractères.',

            'titreCatalogueUpdateFr' . $catalogue_id.'.required' => 'Le titre du catalogue est obligatoire.',
            'titreCatalogueUpdateFr' . $catalogue_id.'.string' => 'Le titre doit être une chaîne de caractères.',
            'titreCatalogueUpdateFr' . $catalogue_id.'.max' => 'Le titre ne doit pas dépasser 255 caractères.',

            'descriptionCatalogueUpdateAr' . $catalogue_id.'.required' => 'La description est obligatoire.',
            'descriptionCatalogueUpdateAr' . $catalogue_id.'.string' => 'La description doit être une chaîne de caractères.',

            'descriptionCatalogueUpdateFr' . $catalogue_id.'.required' => 'La description est obligatoire.',
            'descriptionCatalogueUpdateFr' . $catalogue_id.'.string' => 'La description doit être une chaîne de caractères.',

            'categorieUpdate-' . $catalogue_id.'.required' => 'La catégorie est obligatoire.',
            'categorieUpdate-' . $catalogue_id.'.string' => 'La catégorie doit être une chaîne de caractères.',

            'photoCatalogueUpdate' . $catalogue_id.'.array' => 'Les photos doivent être sous forme de tableau.',
            'photoCatalogueUpdate' . $catalogue_id.'.*.file' => 'Chaque fichier doit être une image valide.',
            'photoCatalogueUpdate' . $catalogue_id.'.*.mimes' => 'Les formats acceptés sont : jpeg, png, jpg, gif, webp.',
            'photoCatalogueUpdate' . $catalogue_id.'.*.max' => 'Chaque image ne doit pas dépasser 3 Mo.',
            "photoCatalogueReste" . $catalogue_id.".string" => 'probleme en photo'
        ]);


        $pub = Publication::find($catalogue_id);
        if($pub){
            $pub->title_ar = $validateData['titreCatalogueUpdateAr' . $catalogue_id];
            $pub->title_fr = $validateData['titreCatalogueUpdateFr' . $catalogue_id];
            $pub->disciption_ar = $validateData['descriptionCatalogueUpdateAr' . $catalogue_id];
            $pub->disciption_fr = $validateData['descriptionCatalogueUpdateFr' . $catalogue_id];
            $pub->categorie = $validateData['categorieUpdate-' . $catalogue_id];
            $photoSuppremme = PublicationRessource::where('publication_id',$catalogue_id)
            ->whereNotIn('photo_path',explode(',',$validateData["photoCatalogueReste" . $catalogue_id]))->get(['photo_path']);

            if ($photoSuppremme) {
                foreach ($photoSuppremme as $value) {
                    $path = storage_path('app/public/' . $value->photo_path);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
                PublicationRessource::where('publication_id', $catalogue_id)
                    ->whereNotIn('photo_path', $validateData["photoCatalogueReste" . $catalogue_id] != null ?explode(',', $validateData["photoCatalogueReste" . $catalogue_id]):[])
                    ->delete();
            }
            if (!empty($validateData['photoCatalogueUpdate' . $catalogue_id])) {
                foreach ($validateData['photoCatalogueUpdate' . $catalogue_id] as $photo) {
                    $path = $photo->store('catalogue','public');
                    $pub->publication_ressources()->create([
                        'photo_path' => $path
                    ]);
                }
            }
            
            $pub->save();
            return redirect()->route('catalogue.admin')->with('success',"enrgistre avec success");
        }else{
            return redirect()->route('catalogue.admin')->with('error',"catalogue n'est exsits pas");
        }
        
    }



    public function demande(){
        $demandes = Demande::all()->map(function ($demande){
            return [
                'demande_id' => $demande->id,
                'descriptionDemande' => $demande->discription,
                'statusDemande' => $demande->status,
                'telDemande' => $demande->tel,
                'nomCompletUser' => $demande->user->name
            ];
        })->sortByDesc('created_at');

        return view('demande-admin',[
            'demandes' => $demandes
        ]);
    }


    public function show_demande($demande_id = null){
        if($demande_id == null){
            return back()->with('error',"problemeen se demande !");
        }

        $demande = Demande::where('id','=',$demande_id)->get();

        if(!$demande){
            return back()->with('error',"problemeen se demande !");
        }
        $facteur = [];
        return view('voir-admin-demande');
    }
}
