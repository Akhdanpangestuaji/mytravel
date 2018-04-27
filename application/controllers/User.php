<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['isi'] = $this->db->get('user');//membuka tabel user dan mengambil data tiap field dan ditampung di variabel isi
		$this->load->view('form/views' , $data);//membuka form index dan memasukkan variabel data
	}

	// Add a new item
	public function add()
	{
		$this->load->view('form/tambah');
	}

	public function masukkan()
	{
		# code...
		$data = array('id'=> $this->input->post('id'),
					'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'fullname' => $this->input->post('fullname'),
					 'level' => $this->input->post('level'));

		$insert=$this->db->insert('user' , $data);

		if ($insert) 
		{
			echo "Sukses";
			redirect('User','refresh');
			# code...
		}else{
			echo "Gagal";
		}
	}



	//Update one item
	public function update($id='' )
	{
		$this->db->where('id',$id);
		$data['isi'] = $this->db->get('user');

		$this->load->view('form/update',$data);
	}

	public function gantikan($id='')
	{

		$data = array('id'=> $this->input->post('id'),
					'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'fullname' => $this->input->post('fullname'),
					 'level' => $this->input->post('level'));

		$this->db->where('id',$id);//memasukkan id yg tadi sudah ditentukan lalu memilih id trsb
		$insert=$this->db->update('user' , $data );//memasukkan data tai ke dalam tabel user

		if ($insert) {


            echo "sukses";

        } else {

            echo "gagal";

        }

	}

	//Delete one item
	public function delete($id='')
	{
		
		$this->db->where('id',$id);

		$this->db->delete('user');

		redirect('User','refresh');

	}
	public function delete2()
	{  

		if($this->input->post('submit'))
		{

			$id = $this->input->post('id');

			$this->db->where('id',$id);

			$this->db->delete('user');

			redirect('User','refresh');
		}
	}
	public function login()
	{
		if (condition) {
			# code...
		}

	}


}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
