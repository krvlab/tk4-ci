<?php
class ProduksiModel extends CI_Model {

        public $id_produksi;
        public $id_pesanan;
        public $id_barang;
        public $jumlah_produksi;
        public $lead_time;
        public $proses;

        public function find_all()
        {
                $sql = "SELECT * FROM produksi ORDER BY id_produksi ASC";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_by_id($id)
        {
                $sql = "SELECT * FROM produksi WHERE id_produksi = ?";
                $query = $this->db->query($sql, array($id));
                return $query->result();
        }

        public function create($params)
        {
                $this->nama_bagian     = $params['nama_bagian'];
                $this->id_pesanan      = $params['id_pesanan'];
                $this->id_barang       = $params['id_barang'];
                $this->jumlah_produksi = $params['jumlah_produksi'];
                $this->lead_time       = $params['lead_time'];

                $this->db->insert('produksi', $this);

                return $this->db->insert_id();
        }

        public function update($params,$id)
        {
                $this->nama_bagian     = $params['nama_bagian'];
                $this->id_pesanan      = $params['id_pesanan'];
                $this->id_barang       = $params['id_barang'];
                $this->jumlah_produksi = $params['jumlah_produksi'];
                $this->lead_time       = $params['lead_time'];

                $this->db->update('produksi', $this, array('id_produksi' => $id));
        }

        public function delete($id)
        {
                $this->id_produksi = $id;

                $this->db->delete('produksi', array('id_produksi' => $this->id_produksi));
        }

        public function find_lihatpesanan()
        {
                $sql = "SELECT pemesanan.id_pesanan, pemesanan.nama_pemesan, pemesanan.proses,
            barang.nama_barang, pemesanan.jumlah_pesanan FROM
            barang INNER JOIN pemesanan ON barang.id_barang = pemesanan.id_barang
            WHERE id_pesanan ORDER BY id_pesanan";

                $query = $this->db->query($sql);
                return $query->result();
        }

        public function find_lihatpesananbelumproses()
        {
                $sql = "SELECT pemesanan.id_pesanan, pemesanan.nama_pemesan, pemesanan.proses,
            barang.nama_barang, pemesanan.jumlah_pesanan FROM
            barang INNER JOIN pemesanan ON barang.id_barang = pemesanan.id_barang
            WHERE proses = 0 ORDER BY id_pesanan DESC";

                $query = $this->db->query($sql);
                return $query->result();
        }



}
