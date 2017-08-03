<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct()
	{
		$this->load->module('subscription');
		$this->load->module('subscriberlist');

		$this->load->library('session');
	}

	public function index()
	{
		$data['page'] = 'main/index';
		$data['message'] = (null !== $this->session->flashdata('message'))? $this->session->flashdata('message') : false;
		$this->load->view('template',$data);
	}
	
	public function deleteSubscriber($id)
	{
		if(isset($id)){
			$response = $this->subscriberlist->deleteSubscriber($id);
			if($response)
			{
				$this->session->set_flashdata('message','Subscriber deleted!');
				redirect();
			}
		}
	}

}
