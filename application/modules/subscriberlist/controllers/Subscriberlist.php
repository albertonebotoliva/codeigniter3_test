<?php

class Subscriberlist extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	private function __initialize($component)
	{
		//We could have several types of subscription forms
		switch ($component)
		{
			case 'get_data':
				return $this->__get_data();
				break;
			default:
				throw new Exception("Error Processing Request", 1);
				break;
		}
	}

	private function __get_data()
	{
		$this->load->model('Subscribers');

		return $this->Subscribers->getSubscribersList();
	}

	public function deleteSubscriber($id)
	{
		$this->load->model('Subscribers');
		$response = $this->Subscribers->deleteSubscriber($id);
		if($response){
			return true;
		}
		return false;
	}

	public function renderSubscriberList()
	{
		$data['subscribers'] = $this->__initialize('get_data');
		$this->load->view('subscriberlist',$data);
	}

}
