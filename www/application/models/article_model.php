<?php
class Article_model extends CI_Model
{
	var $title_c = '';
	var $content_c = '';
	var $time_c = '';

	function get_last_ten_entries()
	{
		$query = $this->db -> get('article_t', 10);
		return $query -> result();
	}

	function insert_entry()
	{
		$this -> title_c = $this -> input -> post('title');
		$this -> content_c = $this -> input -> post('content');
		$this -> time_c = time();

		$this -> db -> insert('article_t', $this);
	}

	function update_entry()
	{
		$this -> title_c = $this->input->post('title');
		$this->content_c = $this->input->post('content');
		$this->time_c= time();

		$this->db->update('article_t', this, array('id'=>$this->input->post('id')));
	}
}
?>
