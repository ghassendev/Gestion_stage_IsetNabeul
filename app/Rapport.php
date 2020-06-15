<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $table='rapports';
    public $primaryKey='id';

    public function user()
        {
            return $this->belongsTo('App\User');
        }
    
}
