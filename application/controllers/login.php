<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// Load models
		$this->load->model('user_model','user');
	}

	function start_log()
	{
		log_message('error',DEBUG_LINE);
		log_message('error',current_url());
	}
	
	function index()
	{
		$public['page'] = 'login';

		$this->start_log();		
		$this->load->view('head');
		$this->load->view('nav',$public);
		$this->load->view('login_view');
		
		$this->load->view('js',$public); // Javascript.		
		$this->load->view('footer');
	}

	private function setSession($user)
	{		
		$userdata = array('state' => true, 'user_id' => $user->id, 'user_name' => $user->name, 'email' => $user->email, 'user_img' => $user->img);
		$this->session->set_userdata($userdata);
	}

	public function signIn()
	{
		$this->start_log();

		$params['email'] = $this->input->post('email');
		$params['password'] = $this->input->post('password');		

		if(($user = $this->user->auth($params)))
		{
			log_message('error','[DEBUG] Sign in name => '.$user->name);

			// Session Setting.
			$this->setSession($user);

			$data['redirect'] = $this->session->userdata('redirect');
			$this->json->status = true;
			$this->json->data = $data;
		}
		else
		{			
			$this->json->set_error(102);
		}
		
		$this->json->output();
	}


	function facebookProc()
	{
		$this->start_log();		
		log_message('error','[DEBUG] Facebook Login');

		$facebook_email = $this->input->post('email');
		$fbuserid = $this->input->post('fb_id');
		$fbusername = $this->input->post('name');
		$fb = $this->input->post('sns');
		$user_img = $this->input->post('user_img');		

		log_message('error','[DEBUG] Facebook Data => '.$facebook_email);
		log_message('error','[DEBUG] Facebook Data => '.$fbuserid);
		log_message('error','[DEBUG] Facebook Data => '.$fbusername);
		log_message('error','[DEBUG] Facebook Data => '.$fb);
		log_message('error','[DEBUG] Facebook Data => '.$user_img);

		$fbusername = iconv('UTF-8','eucKR',$fbusername); //한글이 깨져 나올경우 적절히 변환작업
		$json['result'] = true;		

		//페이스북으로 로그인 했다면  Database  페이스북 공개 프로필 정도 저장하고
		//로그인 처리

		$params['email'] = $facebook_email;

		if($fb == 'facebook')
		{
			if($this->user->find($params)->num_rows() > 0)
			{
				log_message('error','[DEBUG] Exist User');
				$json['result'] = false; // 이미 Email로 회원가입이 되어 있을경우.
			}
			else
			{
				log_message('error','[DEBUG] Facebook New User');
				$params['name'] = $fbusername;
				$params['img'] = $user_img;
				$this->user->add($params);

				$json['result'] = true; // Email로 매칭된 회원이 없을 경우.
			}			
		}
		unset($params['name']);
		unset($params['img']);

		$user = $this->user->find($params)->row();

		// Session Setting.
		$this->setSession($user);

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function sign_out()
	{
		$this->start_log();

		$this->session->sess_destroy();
		redirect('/');		
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */