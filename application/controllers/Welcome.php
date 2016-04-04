<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		//Sets the variable $head to use the slice head (/views/slices/head.php)
		$this->stencil->slice('head');

		//Sets the variable $header to use the slice header (/views/slices/header.php)
		$this->stencil->slice('header');
		$this->stencil->slice('navigation');
		$this->stencil->slice('footer');

		//Sets the variable $title to be used in your views
		$this->stencil->title('Stencil');

		//Sets the layout to be home_layout (/views/layouts/home_layout.php)
		$this->stencil->layout('frontend');
		
		//Adds Font-Awesome to the homepage (/assets/css/font-awesome.css)
		$this->stencil->css('font-awesome');


		$this->stencil->data('welcome_text', 'Welcome to Stencil!');
	}

	public function index()
	{
		$this->stencil->paint('index');
	}

	public function login()
	{
		$this->stencil->paint('login');
	}

	//Example of using a different Layout
	public function blog()
	{
		$this->stencil->layout('backend');

		$this->stencil->slice('sidebar');

		$data['subpage_text'] = 'A Subpage Example!';
		$this->stencil->paint('example_view', $data);
	}
}