<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Itme extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// Load models
		// $this->load->model('user_model','user');
	}	
	
	function index()
	{
		$public['page'] = '';

		$this->load->view('head');
		$this->load->view('nav');

		// $this->load->view('index');
		
		$this->load->view('welcome_message');
		// $this->load->view('js',$public);
		$this->load->view('footer');
	}
}