<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;
    protected $primaryKey = 'cinv';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded =[];

}
