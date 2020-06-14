<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $table = 'examinations';
    protected $fillable = ['id_examinations','no_rm_ex','nama_pasien_ex','id_hematology_results_ex','id_clinical_results,_ex','id_dokter_ex','id_user_ex'];

    public function pasien()
    {
        return $this->belongsTo(Examination::class);
    }
}
