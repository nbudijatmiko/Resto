<?php
class m_menu extends CI_Model{
  var  $tabel="menu__makanan";

  public function tampilData(){
    return $this->db->get("v_makanan");
  }

  public function getDataE($id){
        return $this->db->query("select * from menu__makanan where id_makanan='$id'");
      }

  public function gethapus($id){
        return $this->db->query("select * from menu__makanan where id_makanan='$id'");

  }
  public function otoID(){
    $sql = $this->db->query('select (SUBSTRING(id_makanan, 2))+1 as hsl from menu__makanan ORDER by id_makanan DESC LIMIT 1 ');
    
    return $sql;
  }
  public function input($data)
  {
    $value=[
      "id_makanan" =>"m".$data['idMakanan'],
      "nama_makanan" => $data['namaMakanan'], 
      "id_kategori" => $data['kategori'], 
      "harga" => $data['harga'],
      "gambar" => $data['gambar'],
      "id_status" => 1,
      "detail" => $data['detail']
      ];
    $this->db->insert($this->tabel, $value);
  }

  public function edit($data)
  {
    $idM=$data['idMakananE'];
    $value=[
      "nama_makanan" => $data['namaMakananE'],
      "id_kategori" => $data['kategoriE'],
      "harga" => $data['hargaE'],
      "detail" => $data['detailE'],
      "id_status" => $data['statusE']
    ];
    $this->db->where('id_makanan',$idM)
             ->update($this->tabel, $value);
  }

  function hapus($data){
    return $this->db->where("id_makanan",$data)
                    ->delete("menu__makanan");
  }

 
}