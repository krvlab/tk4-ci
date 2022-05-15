<?php
class BagianModel extends CI_Model {

        public $id_bagian;
        public $nama_bagian;

        public function find_all()
        {
                $sql = "SELECT * FROM bagian ORDER BY nama_bagian ASC";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM bagian WHERE id_bagian = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->nama_bagian  = $params['nama_bagian'];

                $this->db->insert('bagian', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->nama_bagian  = $params['nama_bagian'];

                $this->db->update('bagian', $this, array('id_bagian' => $id));

                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->id_bagian = $id;

                $this->db->delete('bagian', array('id_bagian' => $this->id_bagian));

                return $this->db->affected_rows();
        }

}
