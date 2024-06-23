<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cab';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded =[];

}
