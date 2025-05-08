<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $fillable = ['tahun', 'rombel_id'];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
