<?php

class Feedback extends CI_Controller
{
	public function index()
{
	$this->load->model('feedback_model');
	$data['feedbacks'] = $this->feedback_model->get();
	if(count($data['feedbacks']) <= 0){
		$this->load->view('admin/feedback_empty');
	} else {
		$this->load->view('admin/feedback_list', $data);
	}
}
	{
		$this->load->view('admin/feedback_list');
	}

}