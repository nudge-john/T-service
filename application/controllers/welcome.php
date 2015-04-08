<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		// $datas = $this->curl->simple_get('https://apis.daum.net/local/geo/coord2addr?apikey=5725fdfd188424108c5a02899bf5fcea&longitude=127.10863694633468&latitude=37.40209529907863&inputCoordSystem=WGS84&output=json');
		// log_message('error','[DEBUG] Curl => '.print_r($datas,true));
	}

	// public function getAddress()
	// {
		
	// 	log_message('error','Long =>');	
	// 	// $longitude = $this->input->post('longitude');
	// 	// $latitude = $this->input->post('latitude');

	// 	// log_message('error','Long =>'.$longitude);

	// 	// $datas = $this->curl->simple_get('https://apis.daum.net/local/geo/coord2addr?apikey=5725fdfd188424108c5a02899bf5fcea&longitude=127.10863694633468&latitude=37.40209529907863&inputCoordSystem=WGS84&output=json');
	// 	// log_message('error','[DEBUG] Curl => '.print_r($datas,true));

	// 	//$this->output->set_content_type('application/json')->set_output(json_encode($datas));
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */