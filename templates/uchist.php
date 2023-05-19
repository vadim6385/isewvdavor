<script type="text/javascript">
  $(document).ready(function () {
    $('#uchist').DataTable();
    $('#uchist_wrapper').css({"padding":"10px"});
  });
</script>

<?php

	$table = div(div(par("Comment history"), "card-header"), "card card-primary");
	$table["children"][] = make_table($comms, ["text", "votes", "post", "society", "time"], "table", "uchist", [], [3], [2]);

	echo to_html($table);

?>