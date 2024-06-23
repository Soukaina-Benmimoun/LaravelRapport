<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierTerrain extends Model
{
    use HasFactory;

    protected $table = 'dossier_terrains';
    protected $primaryKey = 'iddossier';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $guarded =[];

    public function terrain()
    {
        return $this->belongsTo(Terrain::class, 'numter');
    }

    public function notaire()
    {
        return $this->belongsTo(Notaire::class, 'numnotaire');
    }}
