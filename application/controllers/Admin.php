<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->slice(array('admin_head'));
		$this->stencil->layout('backend');
	}

	public function index()
	{
		$this->stencil->layout('login_layout');

		$data['subpage_text'] = 'Administrator - Login!';
		$this->stencil->paint('login', $data);
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */