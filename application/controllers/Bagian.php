<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {
	private $model_bagian;

	/**
	 * Kelompok 4 DKBA
	 */
	public function index()
	{
		$data['DaftarBagian'] = $this->mbagian->find_all();

		$this->load->view('bagian',$data);
	}
	public function simpan()
	{
		if ($this->input->post('simpan')) {
			$params['nama_bagian'] = $this->input->post('nama_bagian');

			$prosesSimpan = $this->mbagian->create($params);
			if ($prosesSimpan) {
				echo "<script>alert('Berhasil Simpan'); window.location = '".site_url('bagian')."';</script>";
			} else {
				echo "<script>alert('Gagal Simpan'); window.location = '".site_url('bagian')."';</script>";
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

			$prosesUpdate = $this->mbagian->update($params,$id);
			if ($prosesUpdate) {
				echo "<script>alert('Berhasil Update'); window.location = '".site_url('bagian')."';</script>";
			} else {
				echo "<script>alert('Gagal Update'); window.location = '".site_url('bagian')."';</script>";
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

				$prosesDelete = $this->mbagian->delete($id);
				if ($prosesDelete) {
					echo "<script>alert('Berhasil Hapus'); window.location = '".site_url('bagian')."';</script>";
				} else {
					echo "<script>alert('Gagal Hapus'); window.location = '".site_url('bagian')."';</script>";
				}
			} else {
				$msg['heading'] = '404 Page Not Found';
				$msg['message'] = 'The page you requested was not found.';

				$this->load->view('errors/html/error_404',$msg);
			}

	}
}
