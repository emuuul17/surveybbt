<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Public_Controller {

    public function footer()
    {
        $id = 1;
        $data['footer'] = $this->Settings_model->get($id);
        // $this->template->load('public', 'default', 'public', $data);
        $this->load->view("public/_partials/footer", $data);
    }
}