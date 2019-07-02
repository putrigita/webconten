<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class News extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('home_library');
        /**
         * Session default
         */
       error_reporting(E_ALL ^( E_NOTICE |E_WARNING));
    }


    public function index()
    {
        
            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = tb_news.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = tb_news.category_id';  
            $data['headline'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', array(), $joinTable, '', 'tb_news.visitors', 'DESC',1,0);
            $data['highlight'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', array(), $joinTable, '', 'tb_news.created_on', 'DESC',9,0);
            $data['popular'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', array(), $joinTable, '', 'tb_news.visitors', 'DESC',9,0);
            $this->home_library->main('news/vindex', $data);
        
    }

    public function filter()
    {
            
            $this->db->select('*');
            $this->db->from('tb_news');
            $this->db->like('news_title', $_GET['keyword'], 'both');
            
            $query = $this->db->get();
            $data['highlight'] = $query->result_array();

            $data['popular'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', array(), array(), '', 'tb_news.visitors', 'DESC',9,0);

            $this->home_library->main('news/vfiltered', $data);
        
    }

    function category($id = null){

            $where = array('tb_news.news_slug =' => $id,);

            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = tb_news.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = tb_news.category_id';  
            $data['news_detail'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', $where, $joinTable, '', 'tb_news.news_title', 'ASC',1,0);
            $data['popular'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', array(), $joinTable, '', 'tb_news.visitors', 'DESC',9,0);

        $this->home_library->main('news/vdetail', $data);

        $this->add_count($id);
    }

    function categories($id = null){
        
            $where = array('tb_news.category_id =' => $id,);

            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = tb_news.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = tb_news.category_id';  
            $data['headline'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', $where, $joinTable, '', 'tb_news.visitors', 'DESC',1,0);
            $data['highlight'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', $where, $joinTable, '', 'tb_news.created_on', 'DESC', 9,0);
            $data['popular'] = $this->crud->readDataPage('*, tb_news.created_on','tb_news', $where, $joinTable, '', 'tb_news.visitors', 'DESC', 9,0);

        $this->home_library->main('news/vcategory', $data);
    }

    function update_counter($slug)
    {
        //return current article views
        $this->db->where('news_slug', urldecode($slug));
        $this->db->select('visitors'); $count = $this->db->get('tb_news')->row();
        // then increase by one
        $this->db->where('news_slug', urldecode($slug));
        $this->db->set('visitors', ($count->visitors + 1));
        $this->db->update('tb_news');
    }

    // This is the counter function..
    function add_count($slug)
    {
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($slug), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();
        // if the visitor visit this article for first time then //
        // //set new cookie and update article_views column ..
        // //you might be notice we used slug for cookie name and ip
        // //address for value to distinguish between articles views
        if ($check_visitor == false) {
            $cookie = array("name" => urldecode($slug), "value" => "$ip", "expire" => time() + 7200, "secure" => false);
            $this->input->set_cookie($cookie);
            $this->update_counter(urldecode($slug));
        }
    }

   
}
