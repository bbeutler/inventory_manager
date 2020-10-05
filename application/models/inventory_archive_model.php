<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_model extends DataMapper {

    // Manually Set Table Name
    var $table = "inventory_archive";

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }

    function delete_inventory()
    {
        
    }
}