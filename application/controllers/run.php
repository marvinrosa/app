<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 18/5/2017
 * Time: 06:27
 */
class Run extends CI_Controller
{


    /**
     * Run constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $var['title']="Proyecto CI";

        $data = new stdClass();
        $data->title="Proyecto CI";
        $data->contenido ='index';
        $this->load->view('start',$data);
    }
}