<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_model extends DataMapper {

    // Manually Set Table Name
    var $table = "inventory";

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }

    function get_inventory()
    {
        $inventory_list = new Inventory_model();
        $inventory_list->order_by('id', 'desc');
        $inventory_list->get();

        return $inventory_list;
    }

    function add_inventory()
    {
        $Brand = $_POST['brand'];
        $Category = $_POST['category'];
        $Type = $_POST['type'];
        $Type_2 = $_POST['type2'];
        $Machine_ID = $_POST['machine_id'];
        $Available = $_POST['available'];
        $Notes = $_POST['notes'];

        $inventory_item = new Inventory_model();
        $inventory_item->Brand = $Brand;
        $inventory_item->Category = $Category;
        $inventory_item->Type = $Type;
        $inventory_item->Type_2 = $Type_2;
        $inventory_item->Machine_ID = $Machine_ID;
        $inventory_item->Available = $Available;
        $inventory_item->Notes = $Notes;

        $inventory_item->save();
    }

    function view_inventory_item($id = NULL)
    {
        $inventory_item = new Inventory_model();
        $inventory_item->where('id', $id);
        $inventory_item->get();
        $inventory_item->set_json_content_type();

        return $inventory_item;
    }

    function edit_inventory()
    {
        $ID = $_POST['id'];
        $Brand = $_POST['brand'];
        $Category = $_POST['category'];
        $Type = $_POST['type'];
        $Type_2 = $_POST['type2'];
        $Machine_ID = $_POST['machine_id'];
        $Available = $_POST['available'];
        $Notes = $_POST['notes'];

        $inventory_item = new Inventory_model();
        $inventory_item->where('id', $ID)->update('Brand', $Brand);
        $inventory_item->where('id', $ID)->update('Category', $Category);
        $inventory_item->where('id', $ID)->update('Type', $Type);
        $inventory_item->where('id', $ID)->update('Type_2', $Type_2);
        $inventory_item->where('id', $ID)->update('Machine_ID', $Machine_ID);
        $inventory_item->where('id', $ID)->update('Available', $Available);
        $inventory_item->where('id', $ID)->update('Notes', $Notes);
    }

    function delete_inventory()
    {
        $ID = $_POST['id'];

        $inventory_item = new Inventory_model();
        $inventory_item->where('id', $ID)->get();
        $inventory_item->delete();
    }
}