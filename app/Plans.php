<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $fillable = ['Processus_concerne','action','date_devaluation','date_decheance','etat','realise','effictue'];
    protected $dates = ['created_at','updtaed_at'];
}
