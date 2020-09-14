<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$dataIndex['title'] = "Dashboard";

        $dataIndex['header'] = view("templates/header");
        $dataIndex['footer'] = view("templates/footer");
        //$dataIndex['content'] = view("admin/content");
		return view('pages/home', $dataIndex);
	}

	//--------------------------------------------------------------------

}
