<?php
class PegawaiModel extends CI_Model {

        public $id_pegawai;
        public $username;
        public $password;
    		public $nama_pegawai;
    		public $alamat_pegawai;
    		public $hp_pegawai;
    		public $id_bagian;

        public function find_all()
        {
                $sql = "SELECT id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, nama_bagian FROM pegawai NATURAL JOIN bagian ORDER BY nama_pegawai ASC";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM pegawai WHERE id_pegawai = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->username       = $params['username'];
                $this->password       = $params['password'];
                $this->nama_pegawai   = $params['nama_pegawai'];
                $this->alamat_pegawai = $params['alamat_pegawai'];
                $this->hp_pegawai     = $params['hp_pegawai'];
                $this->id_bagian      = $params['id_bagian'];

                $this->db->insert('pegawai', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->username       = $params['username'];
                $this->password       = $params['password'];
                $this->nama_pegawai   = $params['nama_pegawai'];
                $this->alamat_pegawai = $params['alamat_pegawai'];
                $this->hp_pegawai     = $params['hp_pegawai'];
                $this->id_bagian      = $params['id_bagian'];

                $this->db->update('pegawai', $this, array('id_pegawai' => $id));
                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->id_pegawai = $id;

                $this->db->delete('pegawai', array('id_pegawai' => $this->id_pegawai));
                return $this->db->affected_rows();
        }

}
