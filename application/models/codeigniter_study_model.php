<?php
defined('BASEPATH') OR exit('No direct script access allowed');
     
class Codeigniter_study_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
    }
 
    public function TestDb()
    {
        $this->load->database();
        $result = $this->db->query('SELECT test_no, test_name, test_etc FROM test')->result();
        $this->db->close();
 
        return $result;
    }
}


