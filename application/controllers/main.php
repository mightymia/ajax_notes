<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
		$this->load->model('notes');
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->output->enable_profiler();
		$this->load->view('index');
	}
	function create()
	{
		// $this->load->model('notes');
		$note = $this->input->post();
		$new_id = $this->notes->insert($note); 
		$new_note = $this->notes->get_note($new_id);
		$data['notes'] = $this->notes->all();
		$this->output->enable_profiler();
		$this->load->view('partials/notes', $data);
	}
	function index_html()
	{
		// $this->load->model('notes');
		$data['notes'] = $this->notes->all();
		$this->load->view('partials/notes', $data);
	}
	function edit()
	{
		$description = array('description' => $this->input->post('description'),
			'id' => $this->input->post('id'));
		$this->notes->update($description);
		$this->load->view('partials/notes');

	}
	function delete()
	{
		//delete a note
	}
}

