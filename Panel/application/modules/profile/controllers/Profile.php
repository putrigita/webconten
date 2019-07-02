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

    /*function vcrop(){   

        
        $this->load->view('profile/vcrop');
    }

    function crop(){
        
         require(APPPATH.'modules/profile/views/crop.php');

            
            $crop = new CropAvatar(
              isset($_POST['avatar_src']) ? $_POST['avatar_src'] : null,
              isset($_POST['avatar_data']) ? $_POST['avatar_data'] : null,
              isset($_FILES['avatar_file']) ? $_FILES['avatar_file'] : null
            );

            $response = array(
              'state'  => 200,
              'message' => $crop -> getMsg(),
              'result' => $crop -> getResult()
            );

            echo json_encode($response);


    }*/


    function cropper(){  
        $user_id = $this->session->userdata('user_id');
        $profile = $this->data['users'] = $this->ion_auth->user($user_id)->result();
         
        if (isset($_POST['upload_img'])) {
        // button is presssed

            $fileName = 'photo_'.$user_id.'_'.$profile[0]->first_name.'.png';
            $base64_img = $_POST['cropped_img'];

            $image = explode(',', $base64_img);

            $upload_img = base64_decode($image[1]);

            $file_uploaded = file_put_contents('./assets/upload/users/' . $fileName, $upload_img);

            $users['photo'] = $fileName;
            $where = array(
                'users.id =' => $user_id,
            );
            $this->crud->updateData('users', $users, $where);

            $this->session->set_flashdata('message_profile', 'Account Information Successfully Updated');
            redirect('profile');

                
        }



        
        $this->load->view('profile/cropper');
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
