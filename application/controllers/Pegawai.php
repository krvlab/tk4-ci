<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	/**
	 * Kelompok 4 DKBA
	 */
	public function index()
	{
		$data['DaftarBagian'] = $this->mbagian->find_all();
		$data['DaftarPegawai'] = $this->mpegawai->find_all();

		$this->load->view('pegawai',$data);

	}
	public function simpan()
	{
		if ($this->input->post('simpan')) {
			$params['username']       = $this->input->post('username');
			$params['password']       = $this->input->post('password');
			$params['nama_pegawai']   = $this->input->post('nama_pegawai');
			$params['alamat_pegawai'] = $this->input->post('alamat_pegawai');
			$params['hp_pegawai']     = $this->input->post('hp_pegawai');
			$params['id_bagian']      = $this->input->post('id_bagian');

			$prosesSimpan = $this->mpegawai->create($params);
			if ($prosesSimpan) {
				echo "<script>alert('Berhasil Simpan'); window.location = '".site_url('pegawai')."';</script>";
			} else {
				echo "<script>alert('Gagal Simpan'); window.location = '".site_url('pegawai')."';</script>";
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

			$prosesUpdate = $this->mpegawai->update($params,$id);
			if ($prosesUpdate) {
				echo "<script>alert('Berhasil Update'); window.location = '".site_url('pegawai')."';</script>";
			} else {
				echo "<script>alert('Gagal Update'); window.location = '".site_url('pegawai')."';</script>";
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

				$prosesDelete = $this->mpegawai->delete($id);
				if ($prosesDelete) {
					echo "<script>alert('Berhasil Hapus'); window.location = '".site_url('pegawai')."';</script>";
				} else {
					echo "<script>alert('Gagal Hapus'); window.location = '".site_url('pegawai')."';</script>";
				}
			} else {
				$msg['heading'] = '404 Page Not Found';
				$msg['message'] = 'The page you requested was not found.';

				$this->load->view('errors/html/error_404',$msg);
			}

	}
}
