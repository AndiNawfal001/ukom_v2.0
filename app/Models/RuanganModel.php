<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuanganModel extends Model
{
    use HasFactory;
    protected $table = 'ruangan';
    // nama PK
    protected $primaryKey = 'id_ruangan';
    // agar timestamps tidak otomatis masuk
    public $timestamps = false;
    // PK bukan integer AI
    public $incrementing = true;
    // PK bertipe char/string
    protected $fillable = ['nama_ruangan'];
}
