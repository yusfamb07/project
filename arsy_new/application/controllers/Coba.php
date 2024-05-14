
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [
            'title' => 'Indeks Kemacetan Nasional',
            'js' => [
                // base_url('myjs/detail_cfr.js'),
            ],
        ];
        $this->load->view('coba', $data);
        // $this->load->helper('url');

		// $this->load->view('myjs/home.js', $data);

	}
}