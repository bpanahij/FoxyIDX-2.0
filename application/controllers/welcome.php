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
        $this->load->library('parser');

        $head = array(
            'page_title' => 'Welcome to FoxyIDX'
        );
        $head = $this->parser->parse('head', $head, true);

        $topbar = array(
            'brand' => 'FoxyIDX',
            'moto' => 'Out-Fox the Competition',
            'phone' => '(512) 761-7106',
            'email' => 'brian@foxyidx.com'
        );
        $topbar = $this->parser->parse('topbar', $topbar, true);

        $header = array(
            'menu_items' => array(
                'Home' => array(
                    0 => '/',
                ),
                'Products' => array(
                    0 => '/products',
                    'Listings' => '/listings'
                )
            )
        );
        $header = $this->load->view('header', $header, true);

        $hero = array(
        );
        $hero = $this->load->view('hero', $hero, true);

        $features = array(
            'title' => 'Welcome to FoxyIDX',
            'sub_title' => 'Outfox the competition',
            'items' => array(
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),
                array('img' => '', 'link' => 'Fast','href' => '/faster', 'p' => 'We base our software on faster frameworks.'),

            )
        );
        $features = $this->load->view('features', $features, true);

        $featured_feature = array(
            'h3' => 'Lightning Fast!',
            'p' => 'Extremely fast pages for better SEO and better customer experiences.'
        );
        $featured_feature = $this->parser->parse('simple_widget', $featured_feature, true);

        $features_two = array(
            'h3' => 'Fantastic SEO',
            'features' => array(
                array('strong' => 'Crawlable Listings', 'p' => 'Google and Bing can find listings easily under your domain.'),
                array('strong' => 'Searchable', 'p' => 'Help you clients find the right property before they contact you.'),
                array('strong' => 'Maps', 'p' => 'Google Maps with all of the information they come with..'),
                array('strong' => 'Yelp integration', 'p' => 'Show your clients whats poppin!.'),

            )
        );
        $features_two = $this->parser->parse('cycle_widget', $features_two, true);

        $quotes = array(
            'quotes' => array(
                array('author' => 'Roya Johnson', 'quote' => 'A site that makes it easy to have the best SEO to realtors would be invaluable.', 'href' => 'http://www.royarealty.com', 'company' => 'Roya Realty')
            )
        );
        $quotes = $this->parser->parse('quote_box', $quotes, true);

        $data = array(
            'page_title' => 'Welcome to FoxyIDX',
            'bookmark' => 'FoxyIDX - Outfox the Others',
            'keywords' => 'MLS, IDX, Austin, ABOR, Listings, Search, SEO',
            'description' => 'An IDX site improving page rank.',
            'brand' => 'FoxyIDX',
            'moto' => 'Outfox the Others',
            'phone' => '(512) 761-7106',
            'email' => 'brian@foxyidx.com',
            'head' => $head,
            'topbar' => $topbar,
            'header' => $header,
            'hero' => $hero,
            'features' => $features,
            'widget_one' => $featured_feature,
            'widget_two' => $features_two,
            'quote_box' => $quotes
            );
		$this->parser->parse('default', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */