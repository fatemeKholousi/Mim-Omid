<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model  extends CI_Model
{
function check_user($username,$password){
$this->db->select('*');
$this->db->from('users_tbl');
$this->db->where('username',$username);
$this->db->where('password',md5($password));
$query=$this->db->get();
return $query;
}

}
