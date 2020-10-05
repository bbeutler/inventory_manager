<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->model('Inventory_model');
        $data['inventory_list'] = $this->Inventory_model->get_inventory();
       	$this->template->set('inventory_list', $data['inventory_list']);
		$this->template->render();
	}

	public function add_inventory()
	{
		$this->load->model('Inventory_model');
        $this->Inventory_model->add_inventory();
	}

	public function edit_inventory()
	{
		$this->load->model('Inventory_model');
        $this->Inventory_model->edit_inventory();
	}

	public function view_inventory_item($id)
	{
		$this->load->model('Inventory_model');
        $item = $this->Inventory_model->view_inventory_item($id);
        echo $item->to_json(array('id', 'Category', 'Brand', 'Type', 'Type_2', 'Machine_ID', 'Available', 'Notes'),
            TRUE);
	}

	public function delete_inventory()
	{
		$this->load->model('Inventory_model');
        $this->Inventory_model->delete_inventory();
	}
}

