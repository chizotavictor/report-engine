<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDFController extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->library('PDFLibrary');
    }

     public function generate_report(){
	$this->load->view('reports/test');
     }
}
