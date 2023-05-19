<script>
	$( document ).ready(function(){
		$(".downvote-active").addClass("btn-danger");
		$(".upvote-active").addClass("btn-success");
		$(".post-upvote").click(function() {
			var hasVoted = $(this).hasClass("btn-success");
		    $.ajax({
			    url: "post_vote.php",
			    data: {
			        post_id: this.value,
			        vote: hasVoted ? "UNVOTE":"UP"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
				    	$(this).removeClass("btn-success").addClass("btn-secondary");
			    	}
			    	else
			    	{
				    	$("#post-down-"+this.value).removeClass("btn-danger").addClass("btn-secondary");
				    	$(this).removeClass("btn-secondary").addClass("btn-success");
				    }
			    },
			    error: function( xhr, status, errorThrown ) {
			        alert( "Sorry, there was a problem!" );
			        console.log( "Error: " + errorThrown );
			        console.log( "Status: " + status );
			        console.dir( xhr );
			    }
			});
		});
		$(".post-downvote").click(function() {
			var hasVoted = $(this).hasClass("btn-danger");
		    $.ajax({
			    url: "post_vote.php",
			    data: {
			        post_id: this.value,
			        vote: hasVoted ? "UNVOTE":"DOWN"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
				    	$(this).removeClass("btn-danger").addClass("btn-secondary");
			    	}
			    	else
			    	{
				    	$("#post-up-"+this.value).removeClass("btn-success").addClass("btn-secondary");
				    	$(this).removeClass("btn-secondary").addClass("btn-danger");
			    	}
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

<!-- new post modal -->
<div>
	<div id="new-post" class="modal fade">
		<div class="modal-dialog" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3>Submit a new post</h3>
				</div>
				<form id="postf" class="" method="post" action=<?php echo "\"new_post.php?soc=".$soc["soc_name"]."\"";?> >
					<div class="modal-body">
						<div class="form-group">
							<input name="title" class="form-control" type="text" placeholder="Title">
						</div>
						<div class="form-group">
							<textarea name="text" class="form-control" rows="4" placeholder="Text (Optional)"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input class="btn btn-secondary" type="submit" value="Submit" id="new_post">
						<a href="#" class="btn" data-dismiss="modal">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		if ($soc["status"]!="LOCKED" && !$status["banned"])
			echo "<p><a data-toggle=\"modal\" data-target=\"#new-post\" class=\"btn btn-dark\" style=\"color: orange;\">New Post</a></p>";
	?>
</div>

<!-- posts -->
<div class="card">
	<div class="card-header">Posts</div>
	<div class="list-group card-body">
		<?php 
			if (count($posts) == 0)
			{
				echo to_html(par("No posts yet."));
			}
			else
			{
				foreach($posts as $p)
				{
					echo "<div class=\"card\">";

					echo to_html(post_summary($p, $soc["soc_name"]));

					echo "</div>";
					echo "<hr>";
				}
			}
		?>
	</div>
</div>