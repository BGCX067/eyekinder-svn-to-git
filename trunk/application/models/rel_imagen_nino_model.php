<?php

class Rel_imagen_nino_model extends CI_Model {

   function __construct(){
      parent::__construct();
   }
   
   function inserta($datos = array()){
      
    
      $this->db->insert('rel_imagen_nino', $datos);
      return $this->db->insert_id();
   }
   function actualiza($datos = array()) {
   	
        $this->db->where('id', $datos['id']);
        return $this->db->update('rel_imagen_nino', $datos);
    }
    
    function dame_imagen_idnino($id = null){
   	$lista_obj = array();
     	$sql = "SELECT * FROM rel_imagen_nino where idnino='$id'";
     	$query = $this->db->query($sql, array($id));
		foreach ($query->result_array() as $row)
		{
		   $lista_obj[] = $row;
		}
		return $lista_obj;
   }
	function dame_idnino_imagen($id = null){
   	$lista_obj = array();
     	$sql = "SELECT * FROM rel_imagen_nino where idimagen='$id'";
     	$query = $this->db->query($sql, array($id));
		foreach ($query->result_array() as $row)
		{
		   $lista_obj[] = $row;
		}
		return $lista_obj;
   }
}

?>