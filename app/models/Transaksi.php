<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Transaksi extends Model
{
    public $id_transaksi;
    public $jumlah;
    public $waktu;
    public $id_user;
    public $id_bantuan;

    public function initialize()
    {
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('transaksi');

        $this->belongsTo(
            'id_user',
            Pengguna::class,
            'id_user',
            [
                'reusable' => true,
                'alias' => 'pengguna'
            ]
        );

        $this->belongsTo(
            'id_bantuan',
            Bantuan::class,
            'id_bantuan',
            [
                'reusable' => true,
                'alias' => 'bantuan'
            ]
        );
    }
}