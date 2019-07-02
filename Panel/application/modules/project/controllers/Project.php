<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Project extends CI_Controller {
    
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
       
        $data['project'] = $this->crud->readData('*','tb_project', array(), array(), '', 'project_nama', 'ASC');
        $this->home_library->main('project/vindex', $data);
    }

    function add(){
        $this->form_validation->set_rules('project_nama', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_deskripsi', 'Description', 'trim|required');
        $this->form_validation->set_rules('project_url_local', 'Local Url', 'trim|required');
        $this->form_validation->set_rules('project_url_public', 'Public Url', 'trim|required');
        $this->form_validation->set_rules('project_company', 'Company', 'trim|required');
        $this->form_validation->set_rules('developed_in', 'Developed In', 'trim|required');
        $this->form_validation->set_rules('shows_order', 'SHows Order', 'trim|required');
        
        
        if ($this->form_validation->run()) {
            $project = array(
                'project_nama'      => $this->form_validation->set_value('project_nama'),
                'project_deskripsi' => $this->form_validation->set_value('project_deskripsi'),
                'project_url_local' => $this->form_validation->set_value('project_url_local'),
                'project_url_public' => $this->form_validation->set_value('project_url_public'),
                'project_company' => $this->form_validation->set_value('project_company'),
                'developed_in' => $this->form_validation->set_value('developed_in'),
                'shows_order' => $this->form_validation->set_value('shows_order'),
                'project_slug' => slug($this->form_validation->set_value('project_nama')),
                   
                
            );

            $fileName = slug($this->form_validation->set_value('project_nama'));
            $config['upload_path'] = './assets/upload/projects';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Type File
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);

            if($_FILES['project_img']['name']) {
                if ($this->upload->do_upload('project_img')) {
                    $File = $this->upload->data();
                    $field_file = "project_img";
                    $project[$field_file] = $File['file_name'];
                }else{
                    $project['project_img'] = 'no-photo.jpg';
                }
            }else{
                $project['project_img'] = 'no-photo.jpg';
            }

            
                
            $this->crud->createData('tb_project', $project);
            $this->session->set_flashdata('message', 'Project Has Been Added');
            redirect('project');
        }
       
        $this->home_library->main('project/vadd');
    }
    function edit($id = null){
        $this->form_validation->set_rules('id', 'Code', 'trim|required');
        $this->form_validation->set_rules('project_nama', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_deskripsi', 'Description', 'trim|required');
        $this->form_validation->set_rules('project_url_local', 'Local Url', 'trim|required');
        $this->form_validation->set_rules('project_url_public', 'Public Url', 'trim|required');
        $this->form_validation->set_rules('project_company', 'Company', 'trim|required');
        $this->form_validation->set_rules('developed_in', 'Developed In', 'trim|required');
        $this->form_validation->set_rules('shows_order', 'SHows Order', 'trim|required');
        
        if ($this->form_validation->run()) {
            $project = array(
                'project_nama'      => $this->form_validation->set_value('project_nama'),
                'project_deskripsi' => $this->form_validation->set_value('project_deskripsi'),
                'project_url_local' => $this->form_validation->set_value('project_url_local'),
                'project_url_public' => $this->form_validation->set_value('project_url_public'),
                'project_company' => $this->form_validation->set_value('project_company'),
                'developed_in' => $this->form_validation->set_value('developed_in'),
                'shows_order' => $this->form_validation->set_value('shows_order'),
                'project_slug' => slug($this->form_validation->set_value('project_nama')),
                   
                
            );

            $fileName = slug($this->form_validation->set_value('project_nama'));
            $config['upload_path'] = './assets/upload/projects';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Type File
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);

            if($_FILES['project_img']['name']) {
                if ($this->upload->do_upload('project_img')) {
                    $File = $this->upload->data();
                    $field_file = "project_img";
                    unlink("./assets/upload/projects/".$_POST['documentation']);
                    $project[$field_file] = $File['file_name'];
                }else{
                    echo "Maximal File Size 20MB ".$this->upload->display_errors(); return;
                }
            }
            
            $where = array(
                'tb_project.project_id =' => $this->form_validation->set_value('id'),
            );
            $this->crud->updateData('tb_project', $project, $where);
            $this->session->set_flashdata('message', 'Project Has Been Updated');
            redirect('project');
        }
        $where = array(
            'tb_project.project_id =' => $id,
        );
        $data['project']   = $this->crud->readData('*','tb_project', $where, array(),'','project_id','ASC');
        $this->home_library->main('project/vedit', $data);
    }
    function delete($id = null)  {
        $this->crud->deleteData('tb_project', array('project_id' => $id));
        $this->session->set_flashdata('message', 'Project Has Been Deleted');
        redirect('project');
    }

    function report(){
        if(!$this->ion_auth->is_admin()){
            return show_error('You dont have privillage to access.');
        }
        $data['project'] = $this->crud->readData('*','tb_project', array(), array(), '', 'project_nama', 'ASC');
        $data['info'] = $this->crud->readData('*','tb_info', array(), array(),'','info_id','ASC');
        $this->load->view('project/report', $data);
    }

    function reportpdf(){
        if(!$this->ion_auth->is_admin()){
            return show_error('You dont have privillage to access.');
        }
        $project = $this->crud->readData('*','tb_project', array(), array(), '', 'project_nama', 'ASC');
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
        $pdf->Cell(40,10,'Project Name',0,0,'L',true);
        $pdf->Cell(55,10,'Description',0,0,'L',true);
        $pdf->Cell(55,10,'Local Address',0,0,'L',true);
        $pdf->Cell(55,10,'Public Address',0,0,'L',true);
        $pdf->Cell(50,10,'Company',0,0,'L',true);
    
        $pdf->Ln(12);
        $no=1;
        $pdf->SetWidths(array(12,40,55,55,55,50));
            srand(microtime()*1000000);

     foreach ($project as $project){
        $pdf->SetFont('Arial','',10);
        
        $pdf->Cell(2);
        $pdf->Row(array($no++,$project['project_nama'],$project['project_deskripsi'],$project['project_url_local'],$project['project_url_public'],$project['project_company']));
        $pdf->Ln(3);
        
        
     }

        $pdf->Output(ucfirst($this->uri->segment(1)).'-Exported-On '.gmdate("d M Y, H.i.s", time() + 3600 * 7).'.pdf','D');
        
    }
}
