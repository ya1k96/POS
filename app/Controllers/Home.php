<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('partials/head');
		echo view('tables');
		echo view('partials/footer');
	}

	//--------------------------------------------------------------------

}
