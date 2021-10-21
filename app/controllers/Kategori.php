<?php 

    class Kategori extends Controller {
    public function index()
    {
        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Data Kategori';
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/create', $data);
        $this->view('templates/footer');
    }

    public function simpanKategori()
    {
        if( $this->model('KategoriModel')->tambahKategori($_POST) > 0 )
            {
                Flasher::setMessage('Berhasil', 'ditambahkan','success');
                header('location: '. base_url .'/kategori');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'ditambahkan','danger');
                header('location: '. base_url .'/kategori');
                exit;
            }
            
    }
}

