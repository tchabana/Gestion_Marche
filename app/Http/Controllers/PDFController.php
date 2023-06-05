<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contrats;
use App\Models\places;
use App\Models\commercants;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        //dd($request);
        $data = [
            'commercant' => commercants::find($request->matricule),
            'date' => date('m/d/Y'),
            'place' => places::find($request->place),
            'prixad' => $request->prixad,
        ];
        $pdf = PDF::loadView('myPDF',$data);
        return $pdf->download('itsolutionstuff.pdf');
        //$pdf->stream();
    }
}