<script type="text/javascript">
  $(document).ready(function () {
    $('#del_comms').DataTable();
    $('#del_comms_wrapper').css({"padding":"10px"});
  });
</script>

<?php

	// user reports
	$table = div(div(par("Deleted comments"), "card-header"), "card card-info");
	$table["children"][] = make_table($comms, ["comment text", "deleted by", "time", "comment"], "table", "del_comms", [1]);

	echo to_html($table);
	
?>