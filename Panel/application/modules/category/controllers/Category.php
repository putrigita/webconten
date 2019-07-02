<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Category extends CI_Controller {
    
    function __construct()
    {
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


    public function index()
    {
        $data['categories'] = $this->crud->readData('*','kategori', array(), array(), '', 'category_name', 'ASC');
            $this->home_library->main('category/vindex', $data);
       
    }

    function add(){
        

        if($this->ion_auth->in_group('admin')){ 

            $this->form_validation->set_rules('category_name', 'Name', 'trim|required');
            $this->form_validation->set_rules('chain_for', 'Chain For ..', 'trim|required');
        
        
        
            if ($this->form_validation->run()) {
                $category = array(
                    'category_name'      => $this->form_validation->set_value('category_name'),
                    'chain_for' => $this->form_validation->set_value('chain_for'),
                    
                );

                
                    
                $this->crud->createData('kategori', $category);
                $this->session->set_flashdata('message', 'New Category Has Been Added');
                redirect('category');
            }
           
            $this->load->view('category/vadd');
        }else{
            return show_error('You dont have privillage to access.');
        } 
    }
    function edit($id = null){
       if($this->ion_auth->in_group('admin')){ 

            $this->form_validation->set_rules('id', 'Code', 'trim|required');
            $this->form_validation->set_rules('category_name', 'Name', 'trim|required');
            $this->form_validation->set_rules('chain_for', 'Chain For ..', 'trim|required');
            
            
            if ($this->form_validation->run()) {
                $category = array(
                    'category_name'      => $this->form_validation->set_value('category_name'),
                    'chain_for' => $this->form_validation->set_value('chain_for'),
                       
                    
                );
                
                $where = array(
                    'kategori.category_id =' => $this->form_validation->set_value('id'),
                );
                $this->crud->updateData('kategori', $category, $where);
                $this->session->set_flashdata('message', 'Category Has Been Updated');
                redirect('category');
            }
            $where = array(
                'kategori.category_id =' => $id,
            );
            $data['category']   = $this->crud->readData('*','kategori', $where, array(),'','category_id','ASC');
            $this->load->view('category/vedit', $data);
        }else{
            return show_error('You dont have privillage to access.');
        } 
    }

    function delete($id = null)  {
        if($this->ion_auth->in_group('admin')){ 
            
            $this->crud->deleteData('kategori', array('category_id' => $id));
            $this->session->set_flashdata('message', 'Category Has Been Deleted');
        redirect('category');

        }else{
            return show_error('You dont have privillage to access.');
        } 
        
    }

}
