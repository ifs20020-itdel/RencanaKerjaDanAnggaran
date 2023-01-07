<?php

/*
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $fillabel = ['title','author', 'publisher', 'year'];
}