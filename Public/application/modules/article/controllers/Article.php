<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Article extends CI_Controller {
    
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
            $joinTable[0]['relation'] = 'users.id = artikel.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';  
            $data['headline'] = $this->crud->readDataPage('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.visitors', 'DESC',1,0);
            $data['highlight'] = $this->crud->readDataPage('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.created_on', 'DESC',9,0);
            $data['popular'] = $this->crud->readDataPage('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.visitors', 'DESC',9,0);
            $this->home_library->main('article/vindex', $data);
        
    }

    public function filter()
    {
            
            $this->db->select('*');
            $this->db->from('artikel');
            $this->db->like('article_title', $_GET['keyword'], 'both');
            
            $query = $this->db->get();
            $data['highlight'] = $query->result_array();

            $data['popular'] = $this->crud->readDataPage('*, artikel.created_on','artikel', array(), array(), '', 'artikel.visitors', 'DESC',9,0);

            $this->home_library->main('article/vfiltered', $data);
        
    }

    function category($id = null){

            $where = array('artikel.article_slug =' => $id,);

            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = artikel.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';  
            $data['article_detail'] = $this->crud->readDataPage('*, artikel.created_on','artikel', $where, $joinTable, '', 'artikel.article_title', 'ASC',1,0);
            $data['popular'] = $this->crud->readDataPage('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.visitors', 'DESC',9,0);

        $this->home_library->main('article/vdetail', $data);

        $this->add_count($id);
    }

    function categories($id = null){
        
            $where = array('artikel.category_id =' => $id,);

            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = artikel.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';  
            $data['headline'] = $this->crud->readDataPage('*, artikel.created_on','artikel', $where, $joinTable, '', 'artikel.visitors', 'DESC',1,0);
            $data['highlight'] = $this->crud->readDataPage('*, artikel.created_on','artikel', $where, $joinTable, '', 'artikel.created_on', 'DESC', 9,0);
            $data['popular'] = $this->crud->readDataPage('*, artikel.created_on','artikel', $where, $joinTable, '', 'artikel.visitors', 'DESC', 9,0);

        $this->home_library->main('article/vcategory', $data);
    }

    function update_counter($slug)
    {
        //return current article views
        $this->db->where('article_slug', urldecode($slug));
        $this->db->select('visitors'); $count = $this->db->get('artikel')->row();
        // then increase by one
        $this->db->where('article_slug', urldecode($slug));
        $this->db->set('visitors', ($count->visitors + 1));
        $this->db->update('artikel');
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
