<?php
class loginmodel extends CI_Model
{
    public function isvalidate($username,$password)
    {
        $pass= md5($password);
       
        
        $this->db->where('username', $username);
        $this->db->where('password', $pass);

        $query = $this->db->get("users");
        
            
        if( $query->num_rows() )  {
            return( $query->row()->id);
            
        }else{
            return false;
        }
    }
              
        
    
    public function add_user($array){

        return $this->db->insert('users',$array);
        
        }
}