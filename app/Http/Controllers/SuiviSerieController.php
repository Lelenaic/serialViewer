<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\SuiviSerie;

class SuiviSerieController extends Controller
{
  public function insert(Request $request)
  {
      $testSuivi = SuiviSerie::where([
        ['serieId','=',$request->serieId],
        ['userId','=',$request->userId],
      ])->first();

      if($testSuivi != null){
        return $testSuivi;
      }else{
        $suivi = new SuiviSerie;

        $suivi->serieId = $request->serieId;
        $suivi->userId = $request->userId;
        $suivi->dateDebut = $request->dateDebut;
        $suivi->fini = $request->fini;
        $suivi->save();

        $newSuivi = SuiviSerie::find($suivi->id);

        return $newSuivi;
      }


  }
}
