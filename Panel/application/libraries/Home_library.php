<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Library{
    protected $_ci;
     
    function __construct(){
        $this->_ci = &get_instance();
    }
     
    function main($content, $data = NULL){
        $user = $this->_ci->session->userdata('user_id');

        $data['profile'] = $this->_ci->data['users'] = $this->_ci->ion_auth->user($user)->result();
            foreach ($this->_ci->data['users'] as $k => $user)
            {
                $this->_ci->data['users'][$k]->groups = $this->_ci->ion_auth->get_users_groups($user->id)->result();
            }

        $data['css']     = $this->_ci->load->view('home/css', $data, TRUE);
        $data['js']     = $this->_ci->load->view('home/js', $data, TRUE);
        $data['breadcrumb']  = $this->_ci->load->view('home/breadcrumb', $data, TRUE);
        $data['navbar']     = $this->_ci->load->view('home/navbar', $data, TRUE);
        $data['sidebar']    = $this->_ci->load->view('home/sidebar', $data, TRUE);
        $data['content']    = $this->_ci->load->view($content, $data, TRUE);


        
         
        $this->_ci->load->view('home/vhome', $data);
    }
}