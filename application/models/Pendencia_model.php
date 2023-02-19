<?php

class Pendencia_model extends CI_Model{
  
public function buscaTodos(){

      $this->db->select('pendencia.*');
      $this->db->select('aluno.nome');
      $this->db->select('aluno.nmatricula');
      $this->db->select('curso.nomecurso');
      $this->db->select('semestre.semestre');
      $this->db->join('aluno', 'aluno.idaluno = pendencia.nmatriculafk');
      $this->db->join('curso', 'curso.idcurso = pendencia.idcursof');
      $this->db->join('semestre', 'pendencia.idsemestref = semestre.idsemestre');
      $this->db->where('statusatual = "Pendente" ' );
      $this->db->order_by('datas','DESC');
      return $this->db->get('pendencia')->result();
}


public function buscaTodos2(){

    $this->db->select('pendencia.*');
    $this->db->select('aluno.nome');
    $this->db->select('aluno.nmatricula');
    $this->db->select('curso.nomecurso');
    $this->db->select('semestre.semestre');
    $this->db->join('aluno', 'aluno.idaluno = pendencia.nmatriculafk');
    $this->db->join('curso', 'curso.idcurso = pendencia.idcursof');
    $this->db->join('semestre', 'pendencia.idsemestref = semestre.idsemestre');
    $this->db->where('statusatual = "Pendente" ' );
    $this->db->order_by('datas','DESC');
    return $this->db->get('pendencia')->result();
}



public function buscaPendenciaHis(){

    $this->db->select('pendencia.*');
    $this->db->select('aluno.nome');
    $this->db->select('aluno.nmatricula');
    $this->db->select('curso.nomecurso');
    $this->db->select('semestre.semestre');
    $this->db->join('aluno', 'aluno.idaluno = pendencia.nmatriculafk');
    $this->db->join('curso', 'curso.idcurso = pendencia.idcursof');
    $this->db->join('semestre', 'pendencia.idsemestref = semestre.idsemestre');
    $this->db->where('statusatual != "Pendente" ' );
    $this->db->order_by('datas','DESC');
    return $this->db->get('pendencia')->result();
}



public function salva($pendencia){
   $this->db->insert("pendencia", $pendencia);
   }



   public function editarPendencia($cod){
      $cod = $this->input->post('idpendencia');
      $dados = array(			
      "datas" => $this->input->post("data"),
      "titulo" => $this->input->post("pendencia"),
      "descricao" => $this->input->post("descricao"),
      "idcurso" => $this->input->post("idcurso"),
      "idsemestre" => $this->input->post("idsemestre"),
      "idalunof" => $this->input->post("idalunof"),
      "idnmatriculafk" => $this->input->post("idmatriculaf"),

          
  );
      $this->db->where('idpendencia', $cod);
      return $this->db->update('pendencia', $dados);
  }




  public function RemovePen($cod){
    $cod = $this->input->post('idpendencia');
    $dados = array(
        "statusatual" => "naoPen",			
        
);
$this->db->where('idpendencia', $cod);
return $this->db->update('pendencia', $dados);
}


public function get_p(){
    $termo = $this->input->post('pesquisarP');
  
$this->db->select('pendencia.*');
$this->db->select('aluno.nome');
$this->db->select('aluno.nmatricula');
$this->db->select('curso.nomecurso');
$this->db->select('semestre.semestre');
$this->db->join('aluno', 'aluno.idaluno = pendencia.nmatriculafk');
$this->db->join('curso', 'curso.idcurso = pendencia.idcursof');
$this->db->join('semestre', 'pendencia.idsemestref = semestre.idsemestre');
$this->db->where('statusatual = "Pendente" ' );

    $this->db->like('aluno.nome',$termo);  
    return $this->db->get("pendencia")->result_array();
}


}