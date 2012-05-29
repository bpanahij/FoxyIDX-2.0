<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data = array(
            'bookmark' => 'FoxyIDX - Outfox the Others',
            'keywords' => 'MLS, IDX, Austin, ABOR, Listings, Search, SEO',
            'description' => 'An IDX site improving page rank.',
            'brand' => 'FoxyIDX',
            'moto' => 'Outfox the Others',
            'phone' => '(512) 761-7106',
            'email' => 'brian@foxyidx.com'
            );


		$this->load->view('hero', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */