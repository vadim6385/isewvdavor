<!-- New PM modal -->
<div>
    <div id="new-pm" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Private Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="pmf" class="pm" method="POST" action="<?php echo 'new_pm.php'; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="subject" class="form-control" type="text" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="text" class="form-control" rows="4" placeholder="Message"></textarea>
                            <input type="hidden" name="to" value="<?php echo $u['username']; ?>" id="new-pm-btn">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="new-pm-btn">Send</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- user-report modal -->
<div>
    <div id="report-user" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="report-user-heading">Report user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="user_report_f" class="" method="POST" action="report_user.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="report_username" id="report-user-id" class="form-control" value="<?php echo $_GET['u']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <textarea name="report_user_reason" id="report-user-text" class="form-control" rows="4" placeholder="Reason for reporting..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="report-user-btn">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="btn-toolbar float-right">
<?php
    if (!$self) 
    {
        echo '<button type="button" class="btn btn-warning soc-report" id="" href="" data-toggle="modal" data-target="#report-user" value="" style="float:right;">report</button>';
        echo '<button type="button" data-toggle="modal" data-target="#new-pm" class="btn btn-primary">Send PM</button>';
    }
?>
</div>

<?php 
    $t = isset($_GET['view']) ? $_GET['view'] : 'profile';
$pg .= '&view=';
?>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link <?php echo $t=="profile" ? 'active' : ''?>" href="<?php echo $pg.'profile' ?>">
            <span class="fa fa-user"></span> Profile
        </a>
        <a class="nav-item nav-link <?php echo $t=="phist" ? 'active' : ''?>" href="<?php echo $pg.'phist' ?>">
            <span class="fa fa-file"></span> Post History
        </a>
        <?php
        if ($self) 
        {
            echo "<a class='nav-item nav-link ".($t=="inbox" ? 'active' : '')."' href='".$pg."inbox"."'>".
                "<span class='fa fa-envelope'></span> Inbox".
                "</a>".
                "<a class='nav-item nav-link ".($t=="outbox" ? 'active' : '')."' href='".$pg."outbox"."'>".
                "<span class='fa fa-envelope'></span> Outbox".
                "</a>".
                "<a class='nav-item nav-link ".($t=="chist" ? 'active' : '')."' href='".$pg."chist"."'>".
                "<span class='fa fa-comment'></span> Comment History".
                "</a>".
                "<a class='nav-item nav-link ".($t=="socs" ? 'active' : '')."' href='".$pg."socs"."'>".
                "<span class='fa fa-home'></span> Societies".
                "</a>";
        }
        ?>
    </div>
</nav>
<div class="well">
