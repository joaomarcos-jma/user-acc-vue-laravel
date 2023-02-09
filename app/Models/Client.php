<?php

namespace App\Models;

class Client extends AbstractModel
{
    protected $table = 'tb_clients';
    protected $primaryKey = 'client_id';


    protected $fillable = [
        'client_name',
        'client_id',
        'avatar_path',
        'nr_rg',
        'nr_cpf',
        'tx_email',
        'tx_phone',
        'tx_street',
        'tx_city',
        'tx_zip_code',
        'tx_state'
    ];

    // public function getUrlAttribute()
    // {
    //     return Storage::disk('s3')->url($this->path);
    // }
    // protected $appends = [
    //     'url'
    // ];
}
