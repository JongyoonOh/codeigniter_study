<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     
class Test extends CI_Controller {
     
    public function index()
    {
		$this->load->library('unit_test');
		
		$test = 1 + 1;
		$expected_result = 2;
		$test_name = 'Adds one plus one';
		echo $this->unit->run($test, $expected_result, $test_name);
		echo $this->unit->run('Foo', 'is_string');
        // echo $this->unit->report();
		// echo $this->unit->result();
		$this->load->view('test_view');        
    }
	public function test_viewone()
    {
        $this->load->view('test_viewone');  
		//http://127.0.0.1/index.php/test/test_viewone		
    }
}


