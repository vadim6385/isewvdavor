<script type="text/javascript">
  $(document).ready(function () {
    $('#preps').DataTable();
    $('#preps_wrapper').css({"padding":"10px"});
  });
</script>

<?php

    // user reports
    $table = div(div(par("Reports about posts"), "card-header"), "card bg-info text-white");
    $table["children"][] = make_table($reps, ["title", "text", "reported by", "time", "reason"], "table table-striped", "preps", [2], [], [0]);

    echo to_html($table);
    
?>
