<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	/**
	 * Kelompok 4 DKBA
	 */
	public function index()
	{
		$data['DaftarBarang'] = $this->mbarang->find_all();

		$this->load->view('barang',$data);

	}
	public function simpan()
	{
		if ($this->input->post('simpan')) {
			$params['nama_barang'] = $this->input->post('nama_barang');

			$prosesSimpan = $this->mbarang->create($params);
			if ($prosesSimpan) {
				echo "<script>alert('Berhasil Simpan'); window.location = '".site_url('barang')."';</script>";
			} else {
				echo "<script>alert('Gagal Simpan'); window.location = '".site_url('barang')."';</script>";
			}

		} else {
				$msg['heading'] = '404 Page Not Found';
				$msg['message'] = 'The page you requested was not found.';

				$this->load->view('errors/html/error_404',$msg);
		}
	}
	public function update()
	{
		if ($this->input->post('update')) {
			$params['nama_bagian'] = $this->input->post('nama_bagian');
			$id = $this->input->post('id_bagian');

			$prosesUpdate = $this->mbarang->update($params,$id);
			if ($prosesUpdate) {
				echo "<script>alert('Berhasil Update'); window.location = '".site_url('barang')."';</script>";
			} else {
				echo "<script>alert('Gagal Update'); window.location = '".site_url('barang')."';</script>";
			}

		} else {
			$msg['heading'] = '404 Page Not Found';
			$msg['message'] = 'The page you requested was not found.';

			$this->load->view('errors/html/error_404',$msg);

		}
	}
	public function hapus()
	{
			if ($this->input->post('delete')) {
				$id = $this->input->post('id_bagian');

				$prosesDelete = $this->mbarang->delete($id);
				if ($prosesDelete) {
					echo "<script>alert('Berhasil Hapus'); window.location = '".site_url('barang')."';</script>";
				} else {
					echo "<script>alert('Gagal Hapus'); window.location = '".site_url('barang')."';</script>";
				}
			} else {
				$msg['heading'] = '404 Page Not Found';
				$msg['message'] = 'The page you requested was not found.';

				$this->load->view('errors/html/error_404',$msg);
			}

	}

}
