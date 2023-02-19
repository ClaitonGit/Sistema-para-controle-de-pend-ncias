<?php

class Aluno_model extends CI_Model{

 
 //listar dados do banco   
 public function buscaTodos(){
    return $this->db->get("aluno")->result_array();
 }
 
 //Inserir dados no banco
public function salva($aluno){
    $this->db->insert("aluno", $aluno);
}


//Verificar alunos existente
public function verificaMatricula($matricula){
    $this->db->where('nmatricula',$matricula);
    return $this->db->get('aluno')->row_array();
}

//Função editar tabela alunos
public function editarAl(){
    $idaluno = $this->input->post('idaluno');
    $aluno = array(
        "nmatricula" => $this->input->post("matricula"),
        "nome" => $this->input->post("nomeAluno"),
);
    $this->db->where('idaluno', $idaluno);
    return $this->db->update('aluno', $aluno);
}




}