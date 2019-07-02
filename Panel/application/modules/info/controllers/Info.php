<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->library('home_library');
        /**
         * Session default
         */
       	if(!$this->ion_auth->logged_in()) redirect('auth/login');

       	if (!$this->ion_auth->is_admin()){ 
            return show_error('You must be an administrator to view this page.');
        }
	}

	function index(){
			
		$info 	= $this->crud->readData('*','tb_info', array(), array(), '', 'info_id', 'ASC');
		$data['infos'] = $info;
		$this->home_library->main('info/vindex', $data);
		
	}
	function edit($id = null){

			$info_profile = array(
				'info_content'	 	=> $_POST['content'],								
			);
			$where = array(
				'tb_info.info_id =' => $id,
			);
			$this->crud->updateData('tb_info', $info_profile, $where);
			$this->session->set_flashdata('message', 'Information Settings Has Been Updated');
			redirect('info/');
		
		
	}
}

/* End of file info.php */
/* Location: ./application/controllers/info.php */