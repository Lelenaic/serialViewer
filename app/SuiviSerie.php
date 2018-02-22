<?php

namespace SerialViewer;

use Illuminate\Database\Eloquent\Model;

class SuiviSerie extends Model
{
  protected $casts = [
      'fini' => 'boolean'
  ];
}
