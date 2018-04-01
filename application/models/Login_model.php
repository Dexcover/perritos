<?php
class Login_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function comprobar($user,$pass)
    {
        $this->db->select('user');
        $this->db->where('user',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get('usuario');
        return $query->result_array();
    }
}