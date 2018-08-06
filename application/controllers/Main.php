<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_config');
		$this->load->model('m_user');
		$this->data['config'] = $this->m_config->ambil('config',1)->row();
	}

	public function index()
    {
		$data           = $this->data;
		$data['menu']   = "home";
		echo $this->blade->nggambar('main.index',$data);
	}

	public function user()
    {
		$data           = $this->data;
		$data['user']   = $this->m_user->tampil_data('user')->result();
		$data['menu']   = "home";
		echo $this->blade->nggambar('user.index',$data);
	}

	public function adduser()
	{
		$name  = $this->input->post('name');
		$email = $this->input->post('email');
		$role  = $this->input->post('role');
		$pass  = md5('password');

		$data = array(
			"nm_user"  => $name,
			"email"    => $email,
			"role"     => $role,
			"password" => $pass
		);

		$simpan = $this->m_user->input_data($data,'user');

		if ($simpan) {
		$arrayResponse = array('Code' => "Succees",'Message' => "Succees", );
			echo json_encode($arrayResponse);
		}else{
		$arrayResponse = array('Code' => "Error",'Message' => "Failed", );
			echo json_encode($arrayResponse);
		}
	}

	function edit($id_user)
	{
		$data           = $this->data;
		$data['user']   = $this->m_user->tampil_data('user')->result();
		$data['menu']   = "home";
		echo $this->blade->nggambar('user.edit',$data);
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
