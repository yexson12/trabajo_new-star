<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
class Parrillas extends BaseController
{
    public function index()
    {
        $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",2)->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        echo view('header');
        echo view('parrillas',$datos);
        echo view('footer');
    }

}