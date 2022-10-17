<?php

class Home extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// }

	public function index()
	{
		$data = [
			'judul' => "Katalog Buku",
			'buku' => $this->ModelBuku->getBuku()->result(),
		];


		//jika sudah login dan jika belum login
		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('buku/daftarbuku', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('buku/daftarbuku', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer', $data);
		}
	}

	public function detailBuku()
	{

		$id = $this->uri->segment(3);
		$buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
		// $data['user'] = "Pengunjung";
		$data['title'] = "Detail Buku";

		foreach ($buku as $fields) {
			$data['judul'] 		= $fields->judul_buku;
			$data['pengarang'] 	= $fields->pengarang;
			$data['penerbit'] 	= $fields->penerbit;
			$data['kategori'] 	= $fields->kategori;
			$data['tahun'] 		= $fields->tahun_terbit;
			$data['isbn'] 		= $fields->isbn;
			$data['gambar'] 	= $fields->image;
			$data['dipinjam'] 	= $fields->dipinjam;
			$data['dibooking'] = $fields->dibooking;
			$data['stok'] 		= $fields->stok;
			$data['id'] 		= $id;
		}

		if ($this->session->userdata('email')) {
			$data['user'] = "Admin";

			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('buku/detail-buku', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer');
		}else{
			$data['user'] = "Pengunjung";

			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('buku/detail-buku', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer');
		}
	}

	public function formBooking()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		foreach ($user as $a) {
			$data = [
				'image' => $user['image'],
				'user' => $user['nama'],
				'email' => $user['email'],
				'tanggal_input' => $user['tanggal_input'],
			];
		}

		// $data = [ 
		// 	'judul' => "Katalog Buku", 
		// 	'buku' => $this->ModelBuku->getBuku()->result(),
		// ];

		$id = $this->uri->segment(3);
		$bukuDb = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
		$data['user'] = "Pengunjung";
		$data['title'] = "Detail Buku";

		foreach ($bukuDb as $fields) {
			$data['judul'] 		= $fields->judul_buku;
			$data['pengarang'] 	= $fields->pengarang;
			$data['penerbit'] 	= $fields->penerbit;
			$data['kategori'] 	= $fields->kategori;
			$data['tahun'] 		= $fields->tahun_terbit;
			$data['isbn'] 		= $fields->isbn;
			$data['gambar'] 	= $fields->image;
			$data['dipinjam'] 	= $fields->dipinjam;
			$data['dibooking'] = $fields->dibooking;
			$data['stok'] 		= $fields->stok;
			$data['id'] 		= $id;
			$data['harga_buku'] = $fields->harga_buku;
			// $data['total_harga'] = $fields->total_harga;
		}
		$this->load->view('templates/templates-user/header', $data);
		$this->load->view('buku/formbooking', $data);
		$this->load->view('templates/templates-user/modal');
		$this->load->view('templates/templates-user/footer');
	}
}
