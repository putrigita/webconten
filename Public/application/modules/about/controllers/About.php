<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class About extends CI_Controller {
 	
 	function __construct()
	{
		parent::__construct();
        $this->load->library('home_library');
        /**
         * Session default
         */
       	
	}

    public function index()
    {
       $data['about'] = $this->crud->readData('*','users', array('id' => 1), array(), '', 'id', 'ASC');
       $data['project1'] = $this->crud->readData('*','tb_project', array('shows_order' => 1), array(), '', 'project_id', 'ASC');
        $data['project'] = $this->crud->readData('*','tb_project', array('shows_order' => 2), array(), '', 'developed_in', 'ASC');
        $this->home_library->main('about/vindex', $data);
        
    }
}
