<?php  
require_once dirname(__FILE__) . '/TCPDF/tcpdf.php';
class PDFLibrary extends TCPDF 
{
    public function __construct(){
        parent::__construct();
    }
}
