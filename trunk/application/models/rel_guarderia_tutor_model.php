<?php

class Rel_guarderia_tutor_model extends CI_Model {

   function __construct(){
      parent::__construct();
   }
   
   function inserta($datos = array()){
      
    
      $this->db->insert('rel_guarderia_tutor', $datos);
      return $this->db->insert_id();
   }
   function actualiza($datos = array()) {
   	
        $this->db->where('id', $datos['id']);
        return $this->db->update('rel_guarderia_tutor', $datos);
    }
   
   function dame_guarderia_idtutor($id = null){
   	$lista_obj = array();
     	$sql = "SELECT * FROM rel_guarderia_tutor where idtutor='$id'";
     	$query = $this->db->query($sql, array($id));
		foreach ($query->result_array() as $row)
		{
		   $lista_obj[] = $row;
		}
		return $lista_obj;
   }
}

?>