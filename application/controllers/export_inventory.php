<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_inventory extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->model('Inventory_model');
        $data['inventory_list'] = $this->Inventory_model->get_inventory();
       	$this->template->set('inventory_list', $data['inventory_list']);
		$this->template->render('export_layout');
	}

}

