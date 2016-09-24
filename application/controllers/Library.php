<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//ライブラリのクラスをロード
        $this->load->library(array('LibraryTest'));
    }

	public function index()	{
		
		$this->librarytest->displayControllers(); 

		$this->load->view('library_index');
	}
}
