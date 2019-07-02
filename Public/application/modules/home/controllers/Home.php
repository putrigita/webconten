<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 	
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
        $count_my_page = ("hitcounter.txt"); 
        $hits = file($count_my_page); 
        $hits[0] ++; 
        $fp = fopen($count_my_page , "w"); 
        fputs($fp , "$hits[0]"); 
        fclose($fp);
       
        $this->home_library->main('home/vcontent');
        
    }

    public function message(){
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                echo "No arguments Provided!";
                return false;
        }
           
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        // Create the email and send the message
        $to = 'rezarpl3@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Website Contact Form:  $name";
        $email_body = "You have received a new message from your website contact form.<br><br>"."Here are the details: <br><br> $message";
       /* $headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";   
        $send = mail($to,$email_subject,$email_body,$headers);
        
        if($send){
            $alert = "<script>alert('Your message has been sent!');document.location='".base_url()."'</script>";
            echo $alert;
        }else{
            $alert = "<script>alert('Submit Failed! Try Again!');'</script>";
            echo $alert;
            
        }*/

        //untuk localserver atau hosting yg bisa atur smtp
        
        $this->load->library('email');
        
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "sayapokemon41@gmail.com";
        $config['smtp_pass'] = "vfr4bgt5";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        
        $this->email->to($to);
        $this->email->from($email_address, $name);
        $this->email->subject($email_subject);
        $this->email->message($email_body);

        
        if($this->email->send()){
            $alert = "<script>alert('Your message has been sent!');document.location='".base_url()."'</script>";
            echo $alert;
        }else{
            $alert = "<script>alert('Submit Failed! Try Again!');'</script>";
            echo $alert;
            echo $this->email->print_debugger();
            return;
            
            
        }
    }
}
