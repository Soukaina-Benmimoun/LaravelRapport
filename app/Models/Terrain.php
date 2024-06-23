<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
    protected $primaryKey = 'numter';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded =[];

    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class, 'cinv');
    }
}
