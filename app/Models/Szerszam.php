<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szerszam extends Model
{
    use HasFactory;
    protected $primaryKey = 'szerszam_azon';
    protected $fillable = [
        'marka',
        'kategoria',
        'teljesitmeny',
    ];
}
