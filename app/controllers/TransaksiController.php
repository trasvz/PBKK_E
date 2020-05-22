<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Models\Transaksi as Transaksi;
use App\Models\Pengguna as Pengguna;
use App\Models\Bantuan as Bantuan;
use Phalcon\Mvc\Model\Manager;

class TransaksiController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->transaksi = Transaksi::find();
    }

    public function createAction()
    {
        $this->view->transaksi = Transaksi::find();
        $this->view->pengguna = Pengguna::find();
        $this->view->bantuan = Bantuan::find();
    }

    public function addAction()
    {
        $transaksi = new Transaksi();
        $this->view->pengguna = Pengguna::find();
        $this->view->bantuan = Bantuan::find();

        $transaksi->assign(
            $this->request->getPost(),
            [
                'jumlah',
                'waktu',
                // 'pengguna',
                // 'bantuan',
            ]
        );
        $transaksi->id_user = $this->request->getPost('pengguna');
        $transaksi->id_bantuan = $this->request->getPost('bantuan');
        var_dump($transaksi);
        $success = $transaksi->save();

        $this->response->redirect('/transaksi');

    }
}