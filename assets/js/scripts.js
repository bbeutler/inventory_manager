$( document ).ready(function() {
  
   $('#main_table').dataTable();

});


function add_inventory()
{
	$("#Category").tipsy("hide");
	$("#Brand").tipsy("hide");
	$("#Type").tipsy("hide");
	$("#Type_2").tipsy("hide");
	$("#Machine_ID").tipsy("hide");
	$("#Available").tipsy("hide");

	$('#Category').tipsy({trigger: 'manual', fallback: 'Please enter category' });
    $('#Brand').tipsy({trigger: 'manual', fallback: 'Please enter brand' });
    $('#Type').tipsy({trigger: 'manual', fallback: 'Please enter type' });
    $('#Type_2').tipsy({trigger: 'manual', fallback: 'Please enter type 2' });
    $('#Machine_ID').tipsy({trigger: 'manual', fallback: 'Please enter machine id' });
    $('#Available').tipsy({trigger: 'manual', fallback: 'Please enter available' });


    var category = $("#Category").val();
	var brand = $("#Brand").val();
	var type = $("#Type").val();
	var type2 = $("#Type_2").val();
	var machine_id = $("#Machine_ID").val();
	var available = $("#Available").val();
	var notes = $("#Notes").val();

	if(category == "")
	{
		$("#Category").focus();
        $("#Category").tipsy("show");
		return false;
	}
	else if(brand == "")
	{
		$("#Brand").focus();
        $("#Brand").tipsy("show");
		return false;
	}
	else if(type == "")
	{
		$("#Type").focus();
        $("#Type").tipsy("show");
		return false;
	}
	else if(type2 == "")
	{
		$("#Type_2").focus();
        $("#Type_2").tipsy("show");
		return false;
	}
	else if(machine_id == "")
	{
		$("#Machine_ID").focus();
        $("#Machine_ID").tipsy("show");
		return false;
	}
	else if(available == "")
	{
		$("#Available").focus();
        $("#Available").tipsy("show");
		return false;
	}

	var postData = {
		'category' : category,
        'brand' : brand,
        'type' : type,
        'type2' : type2,
        'machine_id' : machine_id,
        'available' : available,
        'notes' : notes
    };

	$.ajax({
        url: '/add_inventory',
        type: "POST",
        data: postData,
        dataType: "json",
        success: function(data) {
        	location.reload();
        },
        error: function(data) {
            location.reload();
        }
    });
}




function edit_inventory() 
{
	$("#edit_Category").tipsy("hide");
	$("#edit_Brand").tipsy("hide");
	$("#edit_Type").tipsy("hide");
	$("#edit_Type_2").tipsy("hide");
	$("#edit_Machine_ID").tipsy("hide");
	$("#edit_Available").tipsy("hide");

	$('#edit_Category').tipsy({trigger: 'manual', fallback: 'Please enter brand' });
	$('#edit_Brand').tipsy({trigger: 'manual', fallback: 'Please enter brand' });
    $('#edit_Type').tipsy({trigger: 'manual', fallback: 'Please enter type' });
    $('#edit_Type_2').tipsy({trigger: 'manual', fallback: 'Please enter type 2' });
    $('#edit_Machine_ID').tipsy({trigger: 'manual', fallback: 'Please enter machine id' });
    $('#edit_Available').tipsy({trigger: 'manual', fallback: 'Please enter available' });

	var id = $("#edit_id").val();
	var category = $("#edit_Category").val();
	var brand = $("#edit_Brand").val();
	var type = $("#edit_Type").val();
	var type2 = $("#edit_Type_2").val();
	var machine_id = $("#edit_Machine_ID").val();
	var available = $("#edit_Available").val();
	var notes = $("#edit_Notes").val();

	if(category == "")
	{
		$("#edit_Category").focus();
        $("#edit_Category").tipsy("show");
		return false;
	}
	else if(brand == "")
	{
		$("#edit_Brand").focus();
        $("#edit_Brand").tipsy("show");
		return false;
	}
	else if(type == "")
	{
		$("#edit_Type").focus();
        $("#edit_Type_2").tipsy("show");
		return false;
	}
	else if(type2 == "")
	{
		$("#edit_Type_2").focus();
        $("#edit_Type_2").tipsy("show");
		return false;
	}
	else if(machine_id == "")
	{
		$("#edit_Machine_ID").focus();
        $("#edit_Machine_ID").tipsy("show");
		return false;
	}
	else if(available == "")
	{
		$("#edit_Available").focus();
        $("#edit_Available").tipsy("show");
		return false;
	}

	var postData = {
		'id' : id,
		'category' : category,
        'brand' : brand,
        'type' : type,
        'type2' : type2,
        'machine_id' : machine_id,
        'available' : available,
        'notes' : notes
    };

	$.ajax({
        url: '/edit_inventory',
        type: "POST",
        data: postData,
        dataType: "json",
        success: function(data) {
        	location.reload();
        },
        error: function(data) {
            location.reload();
        }
    });
}


function view_inventory_item(inventory_id) 
{
	$.ajax({
        url: '/inventory/view_inventory_item/' + inventory_id,
        type: "POST",
        dataType: "json",
	    success: function(data) {
	    	var id = data.id;
	    	var brand = data.Brand;
	    	var category = data.Category;
            var type = data.Type;
            var type2 = data.Type_2;
            var machine_id = data.Machine_ID;
            var available = data.Available;
            var notes = data.Notes;

            $("#edit_id").val(id);
            $("#edit_Category").val(category);
            $("#edit_Brand").val(brand);
            $("#edit_Type").val(type);
            $("#edit_Type_2").val(type2);
            $("#edit_Machine_ID").val(machine_id);
            $("#edit_Available").val(available);
            $("#edit_Notes").val(notes);
        },
        error: function(data) {
        	console.log("error");
        }
    });
}


function delete_inventory(inventory_id) 
{
	var r=confirm("Are you sure you want to delete this?");

	if (r==true)
	{
	  	var postData = {
			'id' : inventory_id,
	    };

		$.ajax({
	        url: '/delete_inventory',
	        type: "POST",
	        data: postData,
	        dataType: "json",
		    success: function(data) {
	        	location.reload();
	        },
	        error: function(data) {
	            location.reload();
	        }
	    });

	}
}



$('#add_inventory_modal').on('hidden.bs.modal', function () {
  	$("#Category").tipsy("hide");
  	$("#Brand").tipsy("hide");
	$("#Type").tipsy("hide");
	$("#Type_2").tipsy("hide");
	$("#Machine_ID").tipsy("hide");
	$("#Available").tipsy("hide");
})

$('#edit_inventory_modal').on('hidden.bs.modal', function () {
    $("#edit_Category").tipsy("hide");
    $("#edit_Brand").tipsy("hide");
	$("#edit_Type").tipsy("hide");
	$("#edit_Type_2").tipsy("hide");
	$("#edit_Machine_ID").tipsy("hide");
	$("#edit_Available").tipsy("hide");
})