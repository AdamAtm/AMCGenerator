<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CreateQcm extends Controller
{
	public function index()
	{

        $data['menu'] = view('templates/menu');
		echo view("templates/header");		
        echo view('pages/createQcm', $data);
	}

}