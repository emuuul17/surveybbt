 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class About extends Public_Controller {

	public function index()
	{
		//data yg di ambil dari databse di tampung dalam satu variable $data, kemudian akan di tampilakn di file antawijaya
		$data['abouts'] = $this->About_model->get_about();
        $this->template->load('public', 'default', 'about/index', $data);
    }
}