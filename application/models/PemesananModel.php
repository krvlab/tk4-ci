<?php
class PemesananModel extends CI_Model {

        public $id_pesanan;
        public $nama_pemesan;
        public $id_barang;
        public $jumlah_pesanan;

        public function find_all()
        {
                $sql = "SELECT pemesanan.id_pesanan, pemesanan.nama_pemesan, pemesanan.jumlah_pesanan, nama_barang FROM pemesanan JOIN barang USING (id_barang)";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM pemesanan WHERE id_pesanan = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->nama_pemesan   = $params['nama_pemesan'];
                $this->id_barang      = $params['id_barang'];
                $this->jumlah_pesanan = $params['jumlah_pesanan'];

                $this->db->insert('pemesanan', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->nama_pemesan   = $params['nama_pemesan'];
                $this->id_barang      = $params['id_barang'];
                $this->jumlah_pesanan = $params['jumlah_pesanan'];

                $this->db->update('pemesanan', $this, array('id_pesanan' => $id));
                return $this->db->affected_rows();
        }

        public function delete($id)
        {
                $this->id_pesanan = $id;

                $this->db->delete('pemesanan', array('id_pesanan' => $this->id_pesanan));
                return $this->db->affected_rows();
        }

}
