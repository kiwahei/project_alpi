<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function blog_masonry() {
        $this->load->view('menu/blog/blog-masonry.html');
    }

    public function blog_list() {
        $this->load->view('menu/blog/blog-list.html');
    }

    public function blog_list_sidebar() {
        $this->load->view('menu/blog/blog-list-sidebar.html');
    }

    public function blog_grid() {
        $this->load->view('menu/blog/blog-grid.html');
    }

    public function blog_grid_sidebar() {
        $this->load->view('menu/blog/blog-grid-sidebar.html');
    }

    public function blog_details() {
        $this->load->view('menu/blog/blog-details.html');
    }
}