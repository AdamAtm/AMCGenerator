<?php

namespace App\Controllers;

use App\Models\MatiereModel;
use App\Models\ThemeModel;
use CodeIgniter\Controller;

class CreateQcm extends Controller
{
	public function index()
	{
		$matiereModel = new MatiereModel();
		$themeModel = new ThemeModel();

        $data['menu'] = view('templates/menu');
		$data["matiereList"] = $matiereModel->findAll();
		$data["themeList"] = $themeModel->findAll();

		echo view("templates/header");		
        echo view('pages/createQcm', $data);
	}

}