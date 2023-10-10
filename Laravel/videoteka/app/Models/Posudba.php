<?php

namespace App\Models;
use App\Models\Clan;
use App\Models\Film;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posudba extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "posudbe";

    protected $fillable = [
        "id_clan",
        "id_film",
        "datum_posudbe",
        "datum_vracanja"
    ];

    public function clan()
    {
        return $this->belongsTo(Clan::class, 'id_clan');
        // svaki zapis u posduba, mora pripadati nekom zapisu u clan
        //$clan->$posudba->clan;
    }

    public function knjiga()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
