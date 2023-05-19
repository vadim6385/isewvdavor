<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center">
            <h3 class="col-md-3 mb-0">About <?php echo $soc["soc_name"]; ?></h3>
            <div class="col-md-9 text-right">
                <a class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#soc-info-edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
                <a class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#soc-info-hist"><i class="fa fa-history"></i> View history</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php 
            if ($soc["info"])
            {
                echo "<small><p>Latest revision by ".u($soc["revised_by"]);
                echo " (".$soc["time"].")";
                echo "<p></small>";
                echo "<p class=\"card-text\">".$soc["info"]."</p>";
            }
        ?>
    </div>
</div>
<!-- editing modal -->
<div id="soc-info-edit" class="modal fade">
    <div class="modal-dialog" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Edit</h3>
            </div>
            <form id="soc-info-form" method="POST" action="soc_info.php">
                <div class="modal-body">
                    <div class="form-group">
                        <input name="soc_id" class="form-control" value=<?php echo $soc["soc_id"]; ?> hidden readonly>
                        <input name="soc_name" class="form-control" value=<?php echo $soc["soc_name"]; ?> hidden readonly>
                    </div>
                    <div class="form-group">
                        <textarea name="info" class="form-control" rows="" placeholder=""><?php echo $soc["info"]; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-outline-secondary" type="submit" value="Submit" id="new_post">
                    <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- history modal -->
<div id="soc-info-hist" class="modal fade">
    <div class="modal-dialog" role="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">History</h3>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <?php
                        foreach ($hist as $edit) 
                        {
                            echo "<li class=\"list-group-item\">";

                            $link = a("#", "soc-rev-link", "soc-rev-link-".$edit["rev_id"]);
                            $link["data"] = $edit["time"];
                            $link["attribs"]["role"] = "button";
                            $link["attribs"]["value"] = $edit["rev_id"];
                            $link["attribs"]["data-toggle"] = "modal";
                            $link["attribs"]["data-target"] = "#soc-old-info-view";
                            echo to_html($link)." - ".u($edit["username"]).(($edit["rev_id"]==$soc["rev_id"]) ? "<strong>(current)</strong>":"");

                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- revision view modal -->
<div id="soc-old-info-view" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 id="soc-old-info-details" class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p id="soc-old-info-text" class="" readonly></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".soc-rev-link").click(function() {
            $.ajax({
                url: "soc_info_hist.php",
                data: {
                    rev_id: $(this).attr("value")
                },
                type: "POST",
                dataType : "json",
                context: this,
                success: function( revision ) {
                    $("#soc-old-info-details").html("Revision by "+revision.username+" on "+revision.time);
                    $("#soc-old-info-text").text(revision.info);
                },
                error: function( xhr, status, errorThrown ) {
                    alert( "Sorry, there was a problem!" );
                    console.log( "Error: " + errorThrown );
                    console.log( "Status: " + status );
                    console.dir( xhr );
                }
            });
        });
    });
</script>
