<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\DossierTerrain;
use App\Models\Notaire;

use Illuminate\Http\Request;

class NotaireController extends Controller
{
    public function recherche2($idCabinet)
    {
        $dossiers = DB::table('dossier_terrains')
            ->join('notaires', 'dossier_terrains.numnotaire', '=', 'notaires.num')
            ->where('notaires.id_cab', $idCabinet)
            ->select('dossier_terrains.*')
            ->get();
// dd($dossiers);
        return view('vueRecherche', compact('dossiers'));
    }

    public function recherche($idCabinet){
        $notaires = Notaire::where('id_cab', $idCabinet)->pluck('num');
        $dossiers = DossierTerrain::whereIn('numnotaire',$notaires)->get();
        return view('vueRecherche', compact('dossiers'));
    }

    public function supprimerTous(Request $request)
    {
        $ids = $request->input('ids');
        DossierTerrain::whereIn('iddossier', $ids)->delete();

        return redirect()->back()->with('success', 'Tous les dossiers sélectionnés ont été supprimés.');
    }
    
    public function ajouter(Request $request){
        $data = $request->validate([
            'num' =>'required|string|regex:/^N.*E$/',
            'email' =>'required|email',
            'age' =>'required|min:22',
        ]);

        Notaire::create($data);
        return redirect()->back()->with('success', 'Le notaire a été ajouté avec succès.');
    }

    public function verifier($numdossier){
        $dossier = DossierTerrain::where('iddossier', $numdossier)->first();
        if($dossier->etat === 'traité'){
            return response()->json($dossier);
        }
        return response()->json('encour');
        
    }

}
