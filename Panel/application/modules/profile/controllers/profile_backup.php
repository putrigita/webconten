<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->library('home_library');
        /**
         * Session default
         */

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

       	if(!$this->ion_auth->logged_in()) redirect('auth/login');
	}


	function index(){	
		

		
		$this->home_library->main('profile/vindex');
	}
	
	 
	function change(){
		
		$user_id = $this->session->userdata('user_id');

        $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
		$this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');
		$this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required');
        
        if ($this->form_validation->run()) {

            $users = array(
                'first_name'         => $this->form_validation->set_value('first_name'),
                'last_name'         => $this->form_validation->set_value('last_name'),
                'phone'         => $this->form_validation->set_value('phone'),
                'company'         => $this->form_validation->set_value('company'),
                   
                
            );

            $fileName = 'photo_'.$user_id.'_'.$this->form_validation->set_value('first_name');
            $config['upload_path'] = './assets/upload/users';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Type File
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);

            if($_FILES['photo']['name']) {
                if ($this->upload->do_upload('photo')) {
                    $File = $this->upload->data();
                    $field_file = "photo";
                    unlink("./assets/upload/users/".$_POST['image']);
                    $users[$field_file] = $File['file_name'];
                }else{
                    echo "Maximal File Size 20MB ".$this->upload->display_errors(); return;
                }
            }
                
            $where = array(
                'users.id =' => $user_id,
            );
            $this->crud->updateData('users', $users, $where);

            $this->session->set_flashdata('message_profile', 'Account Information Successfully Updated');
			redirect('profile');
           
        }else{

			$this->home_library->main('profile/vindex');
		}
        
	}


}
