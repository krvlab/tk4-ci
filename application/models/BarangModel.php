<?php
class BarangModel extends CI_Model {

        public $id_barang;
        public $nama_barang;

        public function find_all()
        {
                $sql = "SELECT * FROM barang ORDER BY nama_barang ASC";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM barang WHERE id_barang = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->nama_barang  = $params['nama_barang'];

                $this->db->insert('barang', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->nama_barang  = $params['nama_barang'];

                $this->db->update('barang', $this, array('id_barang' => $id));
                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->id_barang = $id;

                $this->db->delete('barang', array('id_barang' => $this->id_barang));
                return $this->db->affected_rows();
        }

}
