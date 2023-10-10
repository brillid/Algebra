<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $connection = "mysql";

    protected $table = "clans";

    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'clanski_broj',
    ];
}
