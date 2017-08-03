<?php

class Subscription extends MY_Controller
{

	public function __construct(){
		parent::__construct();
	}

	private function __initialize($component){
		//We could have several types of subscription forms
		switch ($component) {
			case 'form_type_1':
				return array("name", "surname","email");
				break;
			default:
				throw new Exception("Error Processing Request", 1);
				break;
		}
	}

	public function renderSubscriptionForm(){
		$data['fields'] = $this->__initialize('form_type_1');

		$this->load->library('form_validation');
        if(!empty($_POST) && $this->form_validation->run('frontend/subscription')){
            $this->load->model('Subscriptions');
			$this->Subscriptions->subscribe();

			$this->session->set_flashdata('message', 'New subscription');
        }

		$this->load->view('subscription',$data);
	}

}
