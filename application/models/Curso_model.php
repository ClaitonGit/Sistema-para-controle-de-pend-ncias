<?php

class Curso_model extends CI_Model{

	
 //listar dados do banco 
public function buscaTodos(){
   return $this->db->get("curso")->result_array();
 
}

 //Inserir dados no banco
public function salva($curso){
   $this->db->insert("curso",$curso);
   
}


//Verificar Curso existente
public function verificaCurso($curso){
   $this->db->where('nomecurso',$curso);
   return $this->db->get('curso')->row_array();

}


//Função editar tabela Curso
public function editarCurso(){
   $idcurso = $this->input->post('idcurso');
   $dados = array(
      "nomecurso" => $this->input->post("curso"),

);
   $this->db->where('idcurso', $idcurso);
   return $this->db->update('curso', $dados);
}


}