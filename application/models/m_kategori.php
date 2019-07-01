<?php
class m_kategori extends CI_Model{

  public function tampilData(){
    return $this->db->get("kategori_makanan");
  }
  public function gethapus($id){
        return $this->db->query("select id_makanan from kategori where id_makanan='$id'");

  }
  
  function hapus($id){
    return $this->db->where("id_makanan",$id)
                    ->delete("id_makanan");
  }

 
}