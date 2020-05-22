<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Models\Pengguna as Pengguna;
use Phalcon\Mvc\Model\Manager;

class PenggunaController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->pengguna = Pengguna::find();
    }

    public function createAction()
    {
        $this->view->pengguna = Pengguna::find();
    }

    public function addAction()
    {
        $pengguna = new Pengguna();

        $pengguna->assign(
            $this->request->getPost(),
            [
                'nama',
                'no_telp',
                // 'pengguna',
                // 'bantuan',
            ]
        );
        $success = $pengguna->save();

        $this->response->redirect('/transaksi');

    }
}