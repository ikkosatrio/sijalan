<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_config');
		$this->load->model('m_user');
        $this->load->model('m_jalan');
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
		$data['user']   = $this->m_user->tampil_data('user_auth')->result();
		$data['menu']   = "home";
		echo $this->blade->nggambar('main/user.index',$data);
	}

	public function adduser()
	{
		$name  = $this->input->post('name');
		$role  = $this->input->post('role');
		$pass  = $this->input->post('pass');

		$data = array(
			"user_auth_name"  => $name,
			"user_auth_level" => $role,
			"user_auth_pass"  => $pass
		);

		$simpan = $this->m_user->input_data($data,'user_auth');
		echo "<script>alert('Succees');</script>";
		redirect('main/user','refresh');
		// if ($simpan) {
		// $arrayResponse = array('Code' => "Succees",'Message' => "Succees", );
		// 	echo json_encode($arrayResponse);
		// }else{
		// $arrayResponse = array('Code' => "Error",'Message' => "Failed", );
		// 	echo json_encode($arrayResponse);
		// }
	}

	function edit($id_user)
	{
		$where = array('user_auth_id'=>$id_user);
		$data         = $this->data;
		$data['user'] = $this->m_user->detail($where,'user_auth')->result();
		$data['menu'] = "home";
		echo $this->blade->nggambar('main/user.edit',$data);
	}

	function update($id_user)
	{
		$name  = $this->input->post('name');
		$role  = $this->input->post('role');
		$pass  = $this->input->post('pass');

		$data = array(
			"user_auth_name"  => $name,
			"user_auth_level" => $role,
			"user_auth_pass"  => $pass
		);

		$where = array('user_auth_id'=>$id_user); 
		$this->m_user->update_data($where,$data,'user_auth');
	    echo "<script>alert('Succees');</script>";
		redirect('main/user','refresh');
	}

	function delete($id_user)
	{
		$where = array('user_auth_id'=>$id_user); 
		$this->m_user->hapus_data($where,'user_auth');	
		echo "<script>alert('Succees');</script>";
		redirect('main/user','refresh');
	}

	function ruasjalan(){
        $data           = $this->data;
        $data['jalan']  = $this->m_jalan->tampil_data('jalan')->result();
        $data['menu']   = "ruasjalan";
        echo $this->blade->nggambar('main.ruasjalan.index',$data);
    }

    function detailjalan(){
        $data           = $this->data;
        $data['jalan']  = $this->m_jalan->tampil_data('jalan')->result();
        $data['menu']   = "ruasjalan";
        echo $this->blade->nggambar('main.ruasjalan.detail',$data);
    }

    function laporan(){
        echo "laporan";
    }
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
