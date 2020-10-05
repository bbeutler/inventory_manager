<a data-toggle="modal" href="#add_inventory_modal">
	<button type="button" class="btn btn-success add_new_button">Add New</button>
</a>

<a href="/export_inventory" target="_blank">
	<button type="button" class="btn btn-danger export_button">Export Inventory</button>
</a>

<table class="table table-hover table-bordered inventory_table" id="main_table">
	<thead>
		<tr>
			<td>Category</td>
			<td>Brand</td>
			<td>Type</td>
			<td>Type 2</td>
			<td>ID</td>
			<td>Available</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($inventory_list as $inventory) : ?>
		<tr>
			<td><?=$inventory->Category; ?></td>
			<td><?=$inventory->Brand; ?></td>
			<td><?=$inventory->Type; ?></td>
			<td><?=$inventory->Type_2; ?></td>
			<td><?=$inventory->Machine_ID; ?></td>
			<td><?=$inventory->Available; ?></td>
			<td>
				<a data-toggle="modal" href="#edit_inventory_modal" onclick="view_inventory_item(<?=$inventory->id;?>);">
					<button type="button" class="btn btn-primary">Edit</button>
				</a>
			</td>
			<td>
				<button type="button" class="btn btn-danger" onclick="delete_inventory(<?=$inventory->id;?>);">Delete</button>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>