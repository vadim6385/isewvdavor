<div class="container">
   <div class="card mt-3">
       <div class="row">
           <dt class="col-sm-3">Username</dt>
           <dd class="col-sm-9"><?php echo $u["username"]; ?></dd>
       </div>
       <div class="row">
           <dt class="col-sm-3">Member since</dt>
           <dd class="col-sm-9"><?php echo $u["join_date"]; ?></dd>
       </div>
       <div class="row">
           <dt class="col-sm-3">Post Score</dt>
           <dd class="col-sm-9"><?php echo $pscore ?></dd>
       </div>
       <div class="row">
           <dt class="col-sm-3">Comment Score</dt>
           <dd class="col-sm-9"><?php echo $cscore ?></dd>
       </div>
    </div>
</div>

<?php
    if ($self)
    {
        echo 
        "<a href=\"change_pass.php\" class=\"btn btn-dark offset-sm-1\" style=\"color: orange;\"> ".
            "Change Password ".
        "</a>";
    }
?>
