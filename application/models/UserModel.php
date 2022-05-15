<?php
class UserModel extends CI_Model {

        public $username;
        public $password;

        public function find_all()
        {
                $sql = "SELECT * FROM bagian ORDER BY password ASC";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM bagian WHERE username = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->password  = $params['password'];

                $this->db->insert('pegawai', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->password  = $params['password'];

                $this->db->update('pegawai', $this, array('username' => $id));
        }

        public function delete($id)
        {
                $this->username = $id;

                $this->db->delete('pegawai', array('username' => $this->username));
        }

}
