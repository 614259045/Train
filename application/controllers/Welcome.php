<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Train');
		$this->load->view('navber');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function insert()
	{
		$data = array(
			
			'tarin_id' => $this->input->post("tarin_id"),
			'note' => $this->input->post("note"),
		);
		$data1 = array(
			
			'station' => $this->input->post("station"),
			'outtime' => $this->input->post("outtime"),

		);
		$data2 = array(
			
			'To' => $this->input->post("To"),
			'out' => $this->input->post("out"),

		);
		$data3 = array(
			
			'tarinstation' => $this->input->post("tarinstation"),
			'ittime' => $this->input->post("ittime"),

		);
		$this->Train->insert1($data);
		$this->Train->insert2($data1);
		$this->Train->insert3($data2);
		$this->Train->insert4($data3);
		redirect('Welcome/show');
	}

	public function show()
	{
		$data['query'] = $this->Train->show();
		// print_r($data);
		$this->load->view('show' ,$data);
	}

}
	

