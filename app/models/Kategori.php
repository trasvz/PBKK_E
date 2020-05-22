<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Kategori extends Model
{
    public $id_kategori;
    public $nama_kategori;

    public function initialize()
    {
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('kategori');

        $this->hasMany(
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