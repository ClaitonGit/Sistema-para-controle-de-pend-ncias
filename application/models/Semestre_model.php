<?php

class Semestre_model extends CI_Model{

	
public function buscaTodos(){
   return $this->db->get("semestre")->result_array();
 
}

public function salva($semestre){
   $this->db->insert("semestre",$semestre);
 
}

//Verificar Semestre existente
public function verificaSemestre($semestre){
   $this->db->where('semestre',$semestre);
   return $this->db->get('semestre')->row_array();

}


//Função editar tabela Semestre
public function editarSem(){
   $idsemestre = $this->input->post('idsemestre');
   $dados = array(
      "semestre" => $this->input->post("semestre"),

);
   $this->db->where('idsemestre', $idsemestre);
   return $this->db->update('semestre', $dados);
}

}