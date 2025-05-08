<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;

    protected $fillable = ['kelas_jurusan_banyak'];

    public function tahunAjarans()
    {
        return $this->hasMany(TahunAjaran::class);
    }
}
