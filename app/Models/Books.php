<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'books';
    protected $primaryKey = "id";
    protected $fillable = [
    'judul_buku',
    'deskripsi',
    'kategori',
    'pengarang',
    'penerbit',
    'tahun_terbit',
    'file_path'];
}
?>
