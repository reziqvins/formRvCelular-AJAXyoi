<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datahp extends Model
{
    protected $table = 'datahp';
    protected $fillable = [
        'nama',
        'tipe',
        'tahun'
    ];
    public $timestamps =false;
    protected $hidden;
}
