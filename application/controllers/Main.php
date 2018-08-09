<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('auth')){
			redirect('auth');
		}
		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_config');
		$this->load->model('m_user');
        $this->load->model('m_jalan');
        $this->load->model('m_jalanpointer');
        $this->load->model('m_jalankondisi');
        $this->load->model('m_jalankondisidetail');

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

    function detailjalan($id_jalan){
        $data           = $this->data;
        $where = array("jalan_id" => $id_jalan);

        $data['jalan']  = $this->m_jalan->detail($where,'jalan')->row();

        $data['jalanpointer']  = $this->m_jalanpointer->detail($where,'jalan_pointer')->result();
        $data['jalanruas']  = $this->m_jalankondisi->detail($where,'jalan_kondisi')->result();
        $data['menu']   = "ruasjalan";
        echo $this->blade->nggambar('main.ruasjalan.detail',$data);
    }

    function laporan(){
		$data            = $this->data;
		$data['kecamatan']   = $this->m_user->tampil_data('kecamatan')->result();
		$data['laporan'] = $this->m_config->tampil_laporan('jalan')->result();
		$data['menu']    = "home";
		echo $this->blade->nggambar('main/laporan.index',$data);
    }

    function ruasmap($idjalan,$idruas){

	    if (!$idjalan && !$idruas){
            echo goResult(417,"Id jalan and Id Ruas tidak ditemukan");
            return;
        }

        $where = array(
            'jalan_kondisi_detail.jalan_id' => $idjalan,
            'jalan_kondisi_detail.jalan_kondisi_id' => $idruas
        );

	    $data = $this->m_jalankondisidetail->ruaskondisi($where,'jalan_kondisi_detail')->result();

        $arrData = array();
        foreach ($data as $row){
            $arrData[] = $row;
        }

        echo goResult(200,"Success",$arrData);
        return;
    }

    function detailmap($id){
//	    $id = $_POST['id'];
//        echo $id;
	    if (!$id){
	        echo goResult(417,"Error");
	        return;
        }

	    $where = array(
	        'jalan_pointer.jalan_id' => $id
        );

	    $data = $this->m_jalan->detailmap($where,'jalan')->result();

	    $arrData = array();
	    foreach ($data as $row){
            $arrData[] = array(
                "lat" => $row->jalan_pointer_lat,
                "lng" => $row->jalan_pointer_lng,
                "jalan_pointer_km" => $row->jalan_pointer_km
            );
        }

        echo goResult(200,"Success",$arrData);
        return;
	}

	function fotojalan($id){
        $data            = $this->data;
        $data['menu']    = "foto";

        $where = array(
            'jalan_id' => $id
        );
        $data['photos'] = $this->m_jalan->getfoto($where,'jalan_foto')->result();

        echo $this->blade->nggambar('main/photo.index',$data);
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
