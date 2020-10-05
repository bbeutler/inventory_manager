<table class="table table-hover table-bordered inventory_table">
	<thead>
		<tr>
			<td>Category</td>
			<td>Brand</td>
			<td>Type</td>
			<td>Type 2</td>
			<td>ID</td>
			<td>Available</td>
			<td>Notes</td>
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
			<td><?=$inventory->Notes; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>