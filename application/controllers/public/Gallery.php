<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Public_Controller {

    public function index()
    {
        $data['foto'] = $this->Gallery_model->get_foto();
        $data['title'] = 'Foto Kegiatan';
        $this->template->load('public', 'default', 'gallery/index', $data);
    }
}