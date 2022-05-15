<?php
class PengambilanModel extends CI_Model {

        public $id_pengambilan;
        public $nama_pengambil;
        public $id_produksi;
        public $id_barang;
        public $jumlah_pengambilan;

        public function find_all()
        {
                $sql = "SELECT pengambilan.nama_pengambil, barang.nama_barang, pengambilan.jumlah_pengambilan FROM pengambilan JOIN barang ON pengambilan.id_barang = barang.id_barang";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM pengambilan WHERE id_pengambilan = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->nama_pengambil     = $params['nama_pengambil'];
                $this->id_produksi        = $params['id_produksi'];
                $this->id_barang          = $params['id_barang'];
                $this->jumlah_pengambilan = $params['jumlah_pengambilan'];

                $this->db->insert('pengambilan', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->nama_pengambil     = $params['nama_pengambil'];
                $this->id_produksi        = $params['id_produksi'];
                $this->id_barang          = $params['id_barang'];
                $this->jumlah_pengambilan = $params['jumlah_pengambilan'];

                $this->db->update('pengambilan', $this, array('id_pengambilan' => $id));
                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->id_pengambilan = $id;

                $this->db->delete('pengambilan', array('id_pengambilan' => $this->id_pengambilan));
                return $this->db->affected_rows();
        }

}
