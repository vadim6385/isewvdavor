<script>
	$(document).ready(function() {
		$('#soc_locks').DataTable();
		$('#soc_locks_wrapper').css({"padding":"10px"});
	} );
</script>

<?php
	

	// lock form
	$fdiv = div(div(par("Lock a Society"), "card-header bg-danger text-white"), "card");
	$form = make_form("admin_panel.php?view=locks", "post", "form-inline");
	$form = add_field($form, "soc_to_lock", "socname", true, "form-control");
	$form = add_field($form, "lock_reason", "Reason for lock", true, "form-control");
	$form = add_button($form, "lock", "btn btn-dark");
	$fdiv["children"][] = div(div($form, "form-group"), "card-body");
	
	echo to_html($fdiv);

	// unlock form
	$fdiv = div(div(par("Unlock a Society"), "card-header bg-success text-white"), "card");
	$form = make_form("admin_panel.php?view=locks", "post", "form-inline");
	$form = add_field($form, "soc_to_unlock", "socname", true, "form-control");
	$form = add_field($form, "unlock_reason", "Reason for unlocking", true, "form-control");
	$form = add_button($form, "Unlock", "btn btn-dark");
	$fdiv["children"][] = div(div($form, "form-group"), "card-body");
	
	echo to_html($fdiv);

	// Soc related activities
	$table = div(div(par("Locked societies"), "card-header"), "card");
	$table["children"][] = make_table($locks, ["society", "admin name", "time", "comment"], "table", "soc_locks", [1], [0]);

	echo to_html($table);
	
?>
