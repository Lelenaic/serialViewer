<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\NoteSerie;

class NoteSerieController extends Controller
{
  public function insert(Request $request)
  {
      $testNote = NoteSerie::where([
        ['serieId','=',$request->serieId],
        ['userId','=',$request->userId],
      ])->first();

      if($testNote != null){
        $testNote->note = $request->note;
        $testNote->save();
        return $testNote;
      }else{
        $note = new NoteSerie;

        $note->serieId = $request->serieId;
        $note->userId = $request->userId;
        $note->note = $request->note;
        $note->save();

        $newNote = NoteSerie::find($note->id);

        return $newNote;
      }
  }

  public function getByUserSerie($userId,$serieId){
    $note = NoteSerie::where([
      ['serieId','=',$serieId],
      ['userId','=',$userId],
    ])->first();

    return $note;
  }

  public function getBySerie($serieId){
    $notes = NoteSerie::where('serieId',$serieId)->get();
    return $notes;
  }
}
