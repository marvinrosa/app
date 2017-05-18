<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/frontend/head');
//$this->load->view('frontend/'.$contenido);
$this->load->view('base/'.$contenido);
$this->load->view('templates/frontend/footer');



