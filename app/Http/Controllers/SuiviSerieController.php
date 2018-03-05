<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\SuiviSerie;

class SuiviSerieController extends Controller
{
  public function insert(Request $request)
  {
      $suivi = new SuiviSerie;

      $suivi->serieId = $request->serieId;
      $suivi->userId = $request->userId;
      $suivi->dateDebut = $request->dateDebut;
      $suivi->fini = $request->fini;
      var_dump($request);
      $suivi->save();

      $newSuivi = SuiviSerie::find($suivi->id);

      return $newSuivi;

  }
}
