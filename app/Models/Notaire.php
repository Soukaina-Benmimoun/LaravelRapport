<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaire extends Model
{
    use HasFactory;

    protected $table = 'notaires';
    protected $primaryKey = 'num';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded =[];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'id_cab');
    }

    public function dossiers()
    {
        return $this->hasMany(DossierTerrain::class, 'numnotaire');
    }
    
}
