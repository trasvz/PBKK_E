<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Pengguna extends Model
{
    public $id_user;
    public $nama;
    public $no_telp;

    public function initialize()
    {
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('pengguna');

        $this->hasMany(
            'id_transaksi',
            Transaksi::class,
            'id_transaksi',
            [
                'reusable' => true,
                'alias' => 'transaksi'
            ]
        );
    }
}