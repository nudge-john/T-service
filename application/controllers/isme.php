<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Isme extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		log_message('error','Long =>');
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
}