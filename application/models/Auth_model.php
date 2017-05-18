<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 17/5/2017
 * Time: 21:23
 */
class Auth_model extends CI_Model
{

    /**
     * Auth_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($email){
        $this->db->where('users_email',$email);
        $query = $this->db->get('users');
        return $query->row();

    }
}