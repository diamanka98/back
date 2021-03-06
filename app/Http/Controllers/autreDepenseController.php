<?php

namespace App\Http\Controllers;


use App\Models\autresDepense;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class autreDepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $autreDepense = autreDepense::all();
        //return $autreDepense->toJson(JSON_PRETTY_PRINT);
        return autresDepense::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (autresDepense::create($request->all())) {
            return response()->json([
                'success' => 'enregistre avec succes'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autreDepense  $autreDepense
     * @return \Illuminate\Http\Response
     */
    public function show(autresDepense $autreDepense)
    {
        return $autreDepense;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autreDepense  $autreDepense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autresDepense $autreDepense)
    {
        if ($autreDepense->update($request->all())) {
            return response()->json([
                'success' => 'modifier avec succes'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autreDepense  $autreDepense
     * @return \Illuminate\Http\Response
     */
    public function destroy(autresDepense $autreDepense)
    {
        if ($autreDepense->delete()) {
            return response()->json([
                'success' => 'Suppression reussie'
            ], 200);
        };
    }
    public function listDepense()
    {
        return autresDepense::orderByDesc('created_at')->get();

        // public function chargeAutreDepense()
        // {
        //     $stock = DB::table('autre_depenses')
        //         // ->join('achat_aliments', 'achat_aliments.nomAliment', '=', 'alimentation_du_jours.nomAlimentation')
        //         ->select(DB::raw("sum(montant) as 'achetes'"), DB::raw('YEAR(dateDepense) as annee'))
        //         ->groupBy('annee')
        //         ->get();


        //         return $stock->groupBy('annee') ;
    }


    public function sommeAutresDepense()
    {

        return DB::table("autres_depenses")->sum("montant");
    }
    public function chargeAutreDepense()
    {
        $stock = DB::table('autres_depenses')
            // ->join('achat_aliments', 'achat_aliments.nomAliment', '=', 'alimentation_du_jours.nomAlimentation')
            ->select(DB::raw("sum(montant) as 'achetes'"), DB::raw('YEAR(dateDepenses) as annee'))
            ->groupBy('annee')
            ->get();
        return $stock->groupBy('annee');
    }

    public function chargeSanteM()
    {
        $sante = DB::table('autres_depenses')
            ->select(DB::raw("sum(montant) as 'sante'"), DB::raw('YEAR(dateDepenses) as annee'))
            ->where('type', 'Sante')
            ->groupBy('annee')
            ->get();
        return $sante->groupBy('annee');
    }
    public function listeDepenseSanteM()
    {
        $sante = DB::table('autres_depenses')
            ->select('libelle', 'montant', 'dateDepenses as date', DB::raw(DB::raw('YEAR(dateDepenses) as annee')))
            ->where('type', 'Sante')
            ->get();
        return $sante->groupBy('annee');
    }

    public function coutTransportM()
    {
        $sante = DB::table('autres_depenses')
            ->select(DB::raw("sum(montant) as 'montant'"), DB::raw(DB::raw('YEAR(dateDepenses) as annee')))
            ->where('type', 'Transport bovins')
            ->groupBy('annee')
            ->get();
        return $sante->groupBy('annee');
    }
}
