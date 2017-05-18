<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 18/5/2017
 * Time: 08:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/frontend/head');
$this->load->view('templates/frontend/header');
//$this->load->view('frontend/'.$contenido);
$this->load->view('base/home/'.$contenido);
$this->load->view('templates/frontend/footer');


