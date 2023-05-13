<div class="container-fluid p-3 mb-2 bg-light text-dark" >
	<h1 class="soc_title"><?php echo to_html(soc_link($soc["soc_name"]), "soc-title"); ?><small></small></h1>
	<div class="btn-toolbar mt-3">
		<hr>
		<?php
			echo "<a role=button href=\"soc.php?soc=".$soc["soc_name"]."&saction=";
			// sub/unsub button
			if ($status["sub"])
				echo "unsub\" class=\"btn btn-success btn-sm\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Subscribed";
			else
				echo "sub\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Subscribe";
			echo "</a>";
			// info
			echo "	<a role=button href=\"soc.php?soc=".$soc["soc_name"]."&view=info\" class=\"btn btn-secondary btn-sm\">
							<i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
							About
						</a>";
			// mod panel
			if ($status["mod"] || $status["admin"])
				echo "	<a role=button href=\"mod_panel.php?soc=".$soc["soc_name"]."\" class=\"btn btn-info btn-sm\">
							<i class=\"fa fa-cog\" aria-hidden=\"true\"></i> 
							Mod Panel
						</a>";
			if (!$status["admin"])
				echo "<a class=\"btn btn-link soc-report-btn\" id=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#report-soc\" value=\"3\" style=\"float:right;\">report</a>";
		?>
	</div>
</div>
<!-- society-report modal -->
<div>
	<div id="report-soc" class="modal fade">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="report-soc-heading">Report society</h5>
				</div>
				<form id="soc_report_f" class="" method="POST" action=<?php echo "\"report_soc.php?soc=".$soc["soc_name"]."\""; ?> >
					<div class="modal-body">
						<div class="form-group">
						<input name="report_soc_id" id="report-soc-id" class="form-control d-none" value=<?php echo $soc["soc_id"]; ?> readonly="">
						</div>
						<div class="form-group">
						<textarea name="report_soc_reason" id="report-soc-text" class="form-control" rows="4" placeholder="Reason for reporting..."></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" type="submit" value="Confirm" id="report-soc-btn">
						<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
