<?php

class Home_model extends CI_model{

    function insert ($data){
        $this->db->insert("new",$data);
        return true;

    }

    function get($data){
        $result=$this->db->select('*')->where('username',$data['username'])->where('password',$data['password'])->get('new')->row();
       
        if(!empty($result)){
            return true;
        }
        else{
            return false;
        }
    }
}
