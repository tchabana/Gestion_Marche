<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logis;
use App\Models\secteur_de_ventes;
use App\Models\places;
use App\Models\commercants;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function funcEnregistreVendeur()
    {
        $secteur = secteur_de_ventes::all();
        $places = places::all();
        $data = ['secteur'=> $secteur,'places'=> $places];
        return view('pages.enregistreVendeur',['data'=>$data]);
    }
    
    public function crerVendeur(Request $request){
        $commercants = new commercants();
        $dataValide = $request->validate([
            "name"=>'required',
            "prenom"=>'required',
            "datenaiss"=>'required',
            "ville"=>'required',
            "quartier"=>'required',
            "tel"=>'required',         
        ]);
        if ($request->email==null) {
            $commercants = commercants::create([
                "nom"=>$request->name,
                "prenom"=>$request->prenom,
                "datenaiss"=>$request->datenaiss,
                "quartier"=>$request->quartier,
                "tel"=>$request->tel,
                "ville"=>$request->ville,
                "idagent"=>1,
            ]);
        }else if ($request->email!=null) {
            $commercants = commercants::create([
                "nom"=>$request->name,
                "prenom"=>$request->prenom,
                "datenaiss"=>$request->datenaiss,
                "quartier"=>$request->quartier,
                "tel"=>$request->tel,
                "email"=>$request->email,
                "ville"=>$request->ville,
                "idagent"=>1,
            ]);
        }
        //dd($commercants);
        $secteur = secteur_de_ventes::all();
        $places = places::all();
        $data = [
            'secteur'=>$secteur,
            'places'=>$places,
            'commercants'=>$commercants,
        ];
        return view('pages.contratVendeur',['data'=>$data]);
    }
    public function funcEnregistrePayement()
    {
        return view('pages.enregistrePayement');
    }
    public function funcMensuele(){
        return view('pages.mensuele');
    }
    public function funcAnnuele(){
        return view('pages.annuel');
    }
    public function funcPlaces(){
        $logis=logis::all();
        // dd($logis[0]->idlogis);
        $data = ['logis'=> $logis,'terminer'=> false];
        return view('pages.secteur',['data'=>$data]);
    }
    
    public function crerSecteur(Request $request){
        $request->validate([
            "libelle"=>'required|min:4|max:250|unique:secteur_de_ventes,nomsecteur',
            "nbrplace"=>'required|integer|min:1',
            "logi"=>'required',
        ]);
        $secteur = secteur_de_ventes::create([
            "nomsecteur"=>$request->libelle,
            "nbrplaces"=>$request->nbrplace,
        ]);
        for ($i=1; $i <$request->nbrplace+1 ; $i++) { 
            places::create([
                'estdispo'=>true,
                'idsecteur'=>$secteur->id,
                'idlogis'=>$request->logi,
            ]);
        }
        $logis=logis::all();
        $data = ['logis'=> $logis,'terminer'=> true,'secteur'=> $secteur];
        return view('pages.secteur',['data'=>$data]);
    }
}