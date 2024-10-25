<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'jurusan';

    public function getJurusan(){
        return $this->all();
    }

    public function user(){
        return $this->hasMany(UserModel::class, 'jurusan_id');
    }
}
