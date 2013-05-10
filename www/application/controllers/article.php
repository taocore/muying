<?php

class Article extends CI_Controller {

	public function index()
	{
		$this->load->model('article_model');
		$data['entries'] = $this->article_model->get_last_ten_entries();
		$this -> load -> view('articles', $data);
	}

	public function creating()
	{
		$this->load->view('article_form');
	}

	public function create()
	{
		$this->load->model('article_model');
		$this->article_model->insert_entry();
		$this->load->helper('url');
		redirect('/article');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
