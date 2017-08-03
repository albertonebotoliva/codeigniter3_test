<?php

class Subscribers extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Connect to the database.
		//NOTE: Please change the configuration parameters to your local database
		// - config/database.php
		$this->load->database();
	}

	//Retrieve the subscribers table
	public function getSubscribersList()
	{
		$this->db->select('*')
				 ->from('subscriptions')
				 ->where('active',1);

		return $this->db->get()->result();
	}

	public function deleteSubscriber($id)
	{
		$data['active'] = 0;
		$this->db->where('id',$id)
				 ->update('subscriptions',$data);

		return true;
	}
}
