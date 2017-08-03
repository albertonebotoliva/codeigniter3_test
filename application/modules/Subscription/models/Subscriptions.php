<?php

class Subscriptions extends CI_Model
{

	public $name;
	public $surname;
	public $email;

	public function __construct()
	{
		parent::__construct();
		//Connect to the database.
		//NOTE: Please change the configuration parameters to your local database
		// - config/database.php
		$this->load->database();
	}

	public function subscribe()
	{
		//SQL injection and XSS filter
		$this->name = $this->input->post('name',TRUE);
		$this->surname = $this->input->post('surname',TRUE);
		$this->email = $this->input->post('email',TRUE);

		//Escaped data before insertion in the DB
		$this->db->insert('subscriptions', $this);
	}
}
