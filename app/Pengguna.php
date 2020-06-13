<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
 protected $table = "pengguna";
 protected $fillable = ['id_pengguna', 'username', 'password', 'email', 'level', 'aktif'];
 protected $primaryKey = "id_pengguna";   //
}
