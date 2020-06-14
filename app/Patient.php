<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = ['id_patients','no_rm','nama_pasien', 'gender', 'usia', 'tanggal_lahir', 'ruangan'];

    public function examination()
    {
        return $this->hasMany(Patient::class);
    }
}
