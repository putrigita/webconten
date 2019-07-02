<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 	
 	function __construct()
	{
		parent::__construct();
        $this->load->library('home_library');
        /**
         * Session default
         */
       	if(!$this->ion_auth->logged_in()) redirect('auth/login');
	}

    public function index()
    {
       
        if($this->ion_auth->in_group('admin')){ 
             $data['news'] = $this->crud->readData('*','tb_news', array(), array(), '', 'news_id', 'ASC');
             $data['article'] = $this->crud->readData('*','artikel', array(), array(), '', 'article_id', 'ASC');
             $data['users'] = $this->crud->readData('*','users', array(), array(), '', 'id', 'ASC');
             $data['project'] = $this->crud->readData('*','tb_project', array(), array(), '', 'project_id', 'ASC');
             $this->db->select_sum('visitors');
             $q = $this->db->get('tb_news');
             $data['sumNews'] = $q->row();

             $this->db->select_sum('visitors');
             $q = $this->db->get('artikel');
             $data['sumArticle'] = $q->row();

            $this->home_library->main('home/vcontent', $data);
        }else{
            $data['news'] = $this->crud->readData('*','tb_news', array('tb_news.author =' => $this->session->userdata('user_id')), array(), '', 'news_id', 'ASC');
             $data['article'] = $this->crud->readData('*','artikel', array('artikel.author =' => $this->session->userdata('user_id')), array(), '', 'article_id', 'ASC');

             $this->db->select_sum('visitors')->where('author',$this->session->userdata('user_id'));
             $q = $this->db->get('tb_news');
             $data['sumNews'] = $q->row();

             $this->db->select_sum('visitors')->where('author',$this->session->userdata('user_id'));
             $q = $this->db->get('artikel');
             $data['sumArticle'] = $q->row();
            $this->home_library->main('home/vcontent', $data);
        }
    }
}
