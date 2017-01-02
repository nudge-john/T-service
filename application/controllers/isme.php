<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Isme extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load models
		// $this->load->model('user_model','user');
	}

	function index()
	{
		if($this->session->userdata('state'))
		{
			$public['page'] = 'isme';

			$this->load->view('head');
			$this->load->view('nav');

			$this->load->view('isme_map');
			$this->load->view('js',$public);
			$this->load->view('footer');
		}
		else
		{
			redirect('/login');
		}
	}

	// public function setlatlon()
	// {
	// 	$json['result'] = true;
	// 	$lat = $this->input->post('lat');
	// 	$lon = $this->input->post('lon');

	// 	$data = array('lat' => $lat, 'lon' => $lon);
	// 	$this->session->set_userdata($data);

	// 	if(empty($lat) && empty($lon))
	// 	{
	// 		$json['result'] = false;
	// 	}


}