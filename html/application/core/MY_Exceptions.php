<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Exceptions extends CI_Exceptions {

    function __construct(){
        parent::__construct();
    }

    function show_404(){ // error page logic
        header("HTTP/1.1 404 Not Found");

        $title = '404 Page Not Found'; // $data['title']

        ob_start();
        include(APPPATH.'views/templates/header'.EXT);
        include(APPPATH.'views/errors/error_404'.EXT);
        include(APPPATH.'views/templates/footer'.EXT);
        $buffer = ob_get_contents();
        ob_end_clean();
        echo $buffer;
    }
}