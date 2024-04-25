<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Matakuliah extends BaseController
{
    public function index()
    {
        return view("view-form-matakuliah");
    }

    public function cetak()
    {
        $data = [
            "kode" => $_POST["kode"],
            "nama" => $_POST["nama"],
            "sks" => $_POST["sks"]
        ];
        return view("view-data-matakuliah",$data);
    }
}