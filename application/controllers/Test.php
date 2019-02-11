<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     
class Test extends CI_Controller {
     
    public function index()
    {
        $this->load->view('test_view');        
    }
	public function test_viewone()
    {
        $this->load->view('test_viewone');  
		//http://127.0.0.1/index.php/test/test_viewone		
    }
}


