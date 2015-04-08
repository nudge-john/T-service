<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {

	function __construct()
    {    
        parent::__construct();        
    }

	public function getAddress()
	{
		$longitude = $this->input->post('longitude');
		$latitude = $this->input->post('latitude');

		log_message('error','Long =>'.$longitude);
		log_message('error','latitude =>'.$latitude);

		$json['datas'] = $this->curl->simple_get('https://apis.daum.net/local/geo/coord2addr?apikey=5725fdfd188424108c5a02899bf5fcea&longitude='.$longitude.'&latitude='.$latitude.'&inputCoordSystem=WGS84&output=json');
		log_message('error','[DEBUG] Curl => '.print_r($json['datas'],true));

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}
