<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_perusahaan',
        'deskripsi',
        'lokasi',
        'kontak',
        'jam_operasional',
        'foto'
    ];

    protected $table = 'perusahaans';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
