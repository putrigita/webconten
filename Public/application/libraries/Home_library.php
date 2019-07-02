<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Library{
    protected $_ci;
     
    function __construct(){
        $this->_ci = &get_instance();

    /* 
    ------------------
    Session Language
    ------------------
    */
        header('Cache-control: private');
        // IE 6 FIX
        if (isSet($_GET['lang'])) {
          $lang = $_GET['lang'];

          // register the session and set the cookie
          $_SESSION['lang'] = $lang;

          setcookie("lang", $lang, time() + (3600 * 24 * 30));
        } else if (isSet($_SESSION['lang'])) {
          $lang = $_SESSION['lang'];
        } else if (isSet($_COOKIE['lang'])) {
          $lang = $_COOKIE['lang'];
        } else {
          $lang = 'en';
        }

        switch ($lang) {
          case 'en' :
            $this->_ci->lang->load('web_lang','english');
            break;
          case 'id' :
            $this->_ci->lang->load('web_lang','indonesian');
            break;

          default :
            $this->_ci->lang->load('web_lang','english');
        }

        /* 
        --------------------
        End Session Language
        --------------------
        */
    }
     
    function main($content, $data = NULL){
        $user = $this->_ci->session->userdata('user_id');

        /* 
        ------------------
        Session Language
        ------------------
        */
        $data['navbar_title_home'] = $this->_ci->lang->line('navbar_title_home');
        $data['navbar_title_about'] = $this->_ci->lang->line('navbar_title_about');
        $data['navbar_title_news'] = $this->_ci->lang->line('navbar_title_news');
        $data['navbar_title_article'] = $this->_ci->lang->line('navbar_title_article');
        $data['header_quotes'] = $this->_ci->lang->line('header_quotes');
        $data['lets_talk_about'] = $this->_ci->lang->line('lets_talk_about');
        $data['programming'] = $this->_ci->lang->line('programming');
        $data['music'] = $this->_ci->lang->line('music');
        $data['programming_quote'] = $this->_ci->lang->line('programming_quote');
        $data['music_quote'] = $this->_ci->lang->line('music_quote');
        $data['related_to'] = $this->_ci->lang->line('related_to');
        $data['contact_me'] = $this->_ci->lang->line('contact_me');
        $data['contact_me_quote'] = $this->_ci->lang->line('contact_me_quote');
        $data['contact_me_quote2'] = $this->_ci->lang->line('contact_me_quote2');
        $data['send_message'] = $this->_ci->lang->line('send_message');
        $data['your_name'] = $this->_ci->lang->line('your_name');
        $data['your_email'] = $this->_ci->lang->line('your_email');
        $data['your_message'] = $this->_ci->lang->line('your_message');
        $data['search'] = $this->_ci->lang->line('search');
        $data['here'] = $this->_ci->lang->line('here');
        $data['about_quote'] = $this->_ci->lang->line('about_quote');
        $data['full_name'] = $this->_ci->lang->line('full_name');
        $data['date_of_birth'] = $this->_ci->lang->line('date_of_birth');
        $data['address'] = $this->_ci->lang->line('address');
        $data['gender'] = $this->_ci->lang->line('gender');
        $data['nationality'] = $this->_ci->lang->line('nationality');
        $data['religion'] = $this->_ci->lang->line('religion');
        $data['male'] = $this->_ci->lang->line('male');
        $data['female'] = $this->_ci->lang->line('female');
        $data['single'] = $this->_ci->lang->line('single');
        $data['married'] = $this->_ci->lang->line('married');
        $data['education'] = $this->_ci->lang->line('education');
        $data['skill'] = $this->_ci->lang->line('skill');
        $data['experience'] = $this->_ci->lang->line('experience');
        $data['portfolio'] = $this->_ci->lang->line('portfolio');
        $data['from'] = $this->_ci->lang->line('from');
        $data['to'] = $this->_ci->lang->line('to');
        $data['now'] = $this->_ci->lang->line('now');
        $data['sd'] = $this->_ci->lang->line('sd');
        $data['smp'] = $this->_ci->lang->line('smp');
        $data['smk'] = $this->_ci->lang->line('smk');
        $data['s1'] = $this->_ci->lang->line('s1');
        $data['this_is_my'] = $this->_ci->lang->line('this_is_my');
        $data['this_is_my2'] = $this->_ci->lang->line('this_is_my2');
        $data['my_experience'] = $this->_ci->lang->line('my_experience');
        $data['headline_tags'] = $this->_ci->lang->line('headline_tags');
        $data['highlight_tags'] = $this->_ci->lang->line('highlight_tags');
        $data['popular_post'] = $this->_ci->lang->line('popular_post');
        $data['prev'] = $this->_ci->lang->line('prev');
        $data['next'] = $this->_ci->lang->line('next');
        $data['first'] = $this->_ci->lang->line('first');
        $data['last'] = $this->_ci->lang->line('last');
        $data['search_result'] = $this->_ci->lang->line('search_result');
        $data['not_found'] = $this->_ci->lang->line('not_found');
        $data['no_post_yet'] = $this->_ci->lang->line('no_post_yet');


        /* 
        --------------------
        End Session Language
        --------------------
        */

        /* 
        -------------------------------
        Session Varible & File Includer
        -------------------------------
        */

        $data['info'] = $this->_ci->crud->readData('*','tb_info', array(), array(), '', 'info_id', 'ASC');

        $data['profile'] = $this->_ci->data['users'] = $this->_ci->ion_auth->user($user)->result();
            foreach ($this->_ci->data['users'] as $k => $user)
            {
                $this->_ci->data['users'][$k]->groups = $this->_ci->ion_auth->get_users_groups($user->id)->result();
            }


        $data['news_category'] = $this->_ci->crud->readData('*','kategori', array('chain_for' => 'news'), array(), '', 'category_name', 'ASC');
        $data['article_category'] = $this->_ci->crud->readData('*','kategori', array('chain_for' => 'article'), array(), '', 'category_name', 'ASC');

        $data['css']     = $this->_ci->load->view('home/css', $data, TRUE);
        $data['js']     = $this->_ci->load->view('home/js', $data, TRUE);
        $data['header']  = $this->_ci->load->view('home/header', $data, TRUE);
        $data['navbar']     = $this->_ci->load->view('home/navbar', $data, TRUE);
        $data['footer']    = $this->_ci->load->view('home/footer', $data, TRUE);
        $data['contact_me']    = $this->_ci->load->view('home/vcontact_me', $data, TRUE);
        $data['content']    = $this->_ci->load->view($content, $data, TRUE);

        /* 
        -----------------------------------
        End Session Varible & File Includer
        -----------------------------------
        */
        
         
        $this->_ci->load->view('home/vhome', $data);
    }
}