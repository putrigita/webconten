<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Library{
    protected $_ci;
     
    function __construct(){
        $this->_ci = &get_instance();
    }
     
    function main($content, $data = NULL){
        $data['css']     = $this->_ci->load->view('home/css', $data, TRUE);
        $data['js']     = $this->_ci->load->view('home/js', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        


        
         
        $this->_ci->load->view('auth/vindex', $data);
    }
}