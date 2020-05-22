<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Bantuan extends Model
{
    public $id_bantuan;
    public $id_kategori;
    public $nama_barang;

    public function initialize()
    {
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('bantuan');

        $this->hasMany(
            'id_transaksi',
            Transaksi::class,
            'id_transaksi',
            [
                'reusable' => true,
                'alias' => 'transaksi'
            ]
        );

        $this->belongsTo(
            'id_kategori',
            Kategori::class,
            'id_katagori',
            [
                'reusable' => true,
                'alias' => 'kategori'
            ]
        );
    }
}