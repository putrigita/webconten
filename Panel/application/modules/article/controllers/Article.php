<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Article extends CI_Controller {
    
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
        $where = array(
                'artikel.author =' => $this->session->userdata('user_id'),
            );
        if($this->ion_auth->in_group('admin')){ 
            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = artikel.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';
            $data['article'] = $this->crud->readData('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.created_on', 'ASC');
            $this->home_library->main('article/vindex', $data);
        }else{
            $joinTable[0]['table'] = 'users';
            $joinTable[0]['relation'] = 'users.id = artikel.author';
            $joinTable[1]['table'] = 'kategori';
            $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';
            $data['article'] = $this->crud->readData('*, artikel.created_on','artikel', $where, $joinTable, '', 'artikel.created_on', 'ASC');
            $this->home_library->main('article/vindex', $data);
        }
    }

    function add(){
        $this->form_validation->set_rules('category_id', 'Category', 'trim');
        $this->form_validation->set_rules('article_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('article_content', 'Content', 'trim|required');
        
        
        
        if ($this->form_validation->run()) {
            if($_POST['category_id'] == NULL){
                $category_id = 1;
            }else{
                $category_id = $this->form_validation->set_value('category_id');
            }
            $article = array(
                'category_id'      => $category_id,
                'article_title'      => $this->form_validation->set_value('article_title'),
                'article_slug' => slug($this->form_validation->set_value('article_title')),
                'article_content' => $this->form_validation->set_value('article_content'),
                'created_on' => time() + 3600 * 7 - 3600,
                'updated_on' => time() + 3600 * 7 - 3600,
                'author'     => $this->session->userdata('user_id'),
                
                   
                
            );


            $fileName = slug($this->form_validation->set_value('article_title'));
            $config['upload_path'] = './assets/upload/article';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Type File
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);

            if($_FILES['article_img']['name']) {
                if ($this->upload->do_upload('article_img')) {
                    $File = $this->upload->data();
                    $field_file = "article_img";
                    $article[$field_file] = $File['file_name'];
                }else{
                    $article['article_img'] = 'no-photo.jpg';
                }
            }else{
                $article['article_img'] = 'no-photo.jpg';
            }

            
                
            $this->crud->createData('artikel', $article);
            $this->session->set_flashdata('message', 'Article Has Been Created');
            redirect('article');
        }
        $data['category']   = $this->crud->readData('*','kategori', array('chain_for' => 'article'), array(),'','category_name','ASC');
       
        $this->home_library->main('article/vadd', $data);
    }
    function edit($id = null){
        $this->form_validation->set_rules('id', 'Code', 'trim|required');
        $this->form_validation->set_rules('category_id', 'Category', 'trim');
        $this->form_validation->set_rules('article_title', 'Title', 'trim|required');
        $this->form_validation->set_rules('article_content', 'Content', 'trim|required');
        
        
        if ($this->form_validation->run()) {
            $article = array(
                'category_id'      => $this->form_validation->set_value('category_id'),
                'article_title'      => $this->form_validation->set_value('article_title'),
                'article_slug' => slug($this->form_validation->set_value('article_title')),
                'article_content' => $this->form_validation->set_value('article_content'),
                'updated_on' => time() + 3600 * 7 - 3600,
                
                   
                
            );

            $fileName = slug($this->form_validation->set_value('article_title'));
            $config['upload_path'] = './assets/upload/article';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Type File
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);

            if($_FILES['article_img']['name']) {
                if ($this->upload->do_upload('article_img')) {
                    $File = $this->upload->data();
                    $field_file = "article_img";
                    unlink("./assets/upload/article/".$_POST['showimg']);
                    $article[$field_file] = $File['file_name'];
                }else{
                    echo "Maximal File Size 20MB ".$this->upload->display_errors(); return;
                }
            }
            
            $where = array(
                'artikel.article_id =' => $this->form_validation->set_value('id'),
            );
            $this->crud->updateData('artikel', $article, $where);
            $this->session->set_flashdata('message', 'Article Has Been Updated');
            redirect('article');
        }
        $where = array(
            'artikel.article_id =' => $id,
        );
        $data['category']   = $this->crud->readData('*','kategori', array('chain_for' => 'article'), array(),'','category_name','ASC');
        $data['article']   = $this->crud->readData('*','artikel', $where, array(),'','article_id','ASC');

        if(!$this->ion_auth->is_admin()){
            if($data['article'][0]['author'] != $this->session->userdata('user_id')){
            return show_error('You dont have privillage to access.');
            }
        }
        $this->home_library->main('article/vedit', $data);
    }
    function delete($id = null)  {
        $this->crud->deleteData('artikel', array('article_id' => $id));
        $this->session->set_flashdata('message', 'Article Has Been Deleted');
        redirect('article');
    }

    function add_category(){ 
        $chain_for = $this->uri->segment(1);

        if($this->ion_auth->in_group('admin') || $this->ion_auth->in_group('members')){ 

            $this->form_validation->set_rules('category_name', 'Name', 'trim|required');
        
        
        
            if ($this->form_validation->run()) {
                $category = array(
                    'category_name'      => $this->form_validation->set_value('category_name'),
                    'chain_for' => $chain_for,
                    
                );

                
                    
                $this->crud->createData('kategori', $category);
                $this->session->set_flashdata('message', 'New Category Has Been Added');
                redirect('article/add');
            }
           
            $this->load->view('article/add_category');
        }else{
            return show_error('You dont have privillage to access.');
        }       
        
    }
    

    function report(){
        if(!$this->ion_auth->is_admin()){
            return show_error('You dont have privillage to access.');
        }
        $joinTable[0]['table'] = 'users';
        $joinTable[0]['relation'] = 'users.id = artikel.author';
        $joinTable[1]['table'] = 'kategori';
        $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';
        $data['article'] = $this->crud->readData('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.created_on', 'ASC');
        $data['info'] = $this->crud->readData('*','tb_info', array(), array(),'','info_id','ASC');
        $this->load->view('article/report', $data);
    }

    function reportpdf(){
        if(!$this->ion_auth->is_admin()){
            return show_error('You dont have privillage to access.');
        }
        $joinTable[0]['table'] = 'users';
        $joinTable[0]['relation'] = 'users.id = artikel.author';
        $joinTable[1]['table'] = 'kategori';
        $joinTable[1]['relation'] = 'kategori.category_id = artikel.category_id';
        $article = $this->crud->readData('*, artikel.created_on','artikel', array(), $joinTable, '', 'artikel.created_on', 'ASC');
        $info = $this->crud->readData('*','tb_info', array(), array(),'','info_id','ASC');

        require(APPPATH.'third_party/fpdf16/dynamicpdf.php');

        $pdf= new PDF_MC_Table();
        $pdf->AliasNbPages();
        $pdf->AddPage('L','A4');
        $pdf->SetTitle('MRR | Report '.ucfirst($this->uri->segment(1)));

        $pdf->Image(base_url().'assets/dist/img/Globe_font_awesome.jpg',10,12,6,0,'','');
        $pdf->SetFont('Arial','',15);
        $pdf->Cell(6);
        $pdf->Cell(10,10,'MRR, Inc.');

        $pdf->SetFont('Arial','',10);
        $pdf->Cell(220);
        $pdf->Cell(11,11,'Date : '.date('d F Y'));
        $pdf->Line(288,20,10,20);

        $pdf->Ln(10);

        $pdf->SetFont('Arial','',10);
        $pdf->Cell(1);
        $pdf->Cell(10,10,substr($info[4]['info_content'],0,19));
        $pdf->Ln(5);
        $pdf->Cell(1);
        $pdf->Cell(10,10,substr($info[4]['info_content'],19,28));
        $pdf->Ln(5);
        $pdf->Cell(1);
        $pdf->Cell(10,10,$info[5]['info_content']);
        $pdf->Ln(5);
        $pdf->Cell(1);
        $pdf->Cell(10,10,$info[3]['info_content']);

        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(1);
        $pdf->Cell(10,10,ucfirst($this->uri->segment(1)).' Data Report');

        $pdf->SetFont('Arial','B',10);
        $pdf->SetLineWidth(0,5);
        $pdf->SetFIllColor(255,255,255);
        $pdf->SetDrawColor(15);
        $pdf->SetTextColor(10);

        $pdf->Ln(10);
        $pdf->Cell(2);
        $pdf->Cell(12,10,'No',0,0,'L',true);
        $pdf->Cell(40,10,'Article Title',0,0,'L',true);
        $pdf->Cell(55,10,'Article Content',0,0,'L',true);
        $pdf->Cell(30,10,'Category',0,0,'L',true);
        $pdf->Cell(50,10,'Created On',0,0,'L',true);
        $pdf->Cell(50,10,'Updated On',0,0,'L',true);
        $pdf->Cell(30,10,'Author',0,0,'L',true);
    
        $pdf->Ln(12);
        $no=1;
        $pdf->SetWidths(array(12,40,55,30,50,50,30));
            srand(microtime()*1000000);

     foreach ($article as $article){
        $pdf->SetFont('Arial','',10);

        $pdf->Cell(2);
        $pdf->Row(array($no++,$article['article_title'],substr(strip_tags($article['article_content']),0,200).' ...',$article['category_name'],date("d M Y H:i:s",$article['created_on']),date("d M Y H:i:s",$article['updated_on']),$article['first_name'].' '.$article['last_name']));
        $pdf->Ln(3);

       
     }

        $pdf->Output(ucfirst($this->uri->segment(1)).'-Exported-On '.gmdate("d M Y, H.i.s", time() + 3600 * 7).'.pdf','D');
        
    }
}
