<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    use HasFactory;
    protected $primaryKey = 'marka_azon';
    protected $fillable = 'markaNev';
}
