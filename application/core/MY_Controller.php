<?php
class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
}

    class Admin_Controller extends MY_Controller{
        function __construct(){
            parent::__construct();
            // die('ADMIN');

        }
    }

    class Public_Controller extends MY_Controller{
        function __construct(){
            parent::__construct();
            // die('PUB');

            $this->load->library('menu');

            $this->pages = $this->menu->get_pages();

            // brand/logo
            $this->brand = 'My Website';

            // banner
            $this->banner_heading = 'welcome to our website';
            $this->banner_text = 'This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.';
            $this->banner_link = 'pages/show/our-team';
        }
    }