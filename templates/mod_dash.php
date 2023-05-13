<style>
.huge {
    font-size: 40px;
}
</style>

<!-- Stats -->
<div class="row">
	<div class="col-md-6">
	    <div class="card bg-primary text-white">
	        <div class="card-header">
	            <div class="row">
	                <div class="col-3">
	                    <i class="fa fa-user fa-5x"></i>
	                </div>
	                <div class="col-9 text-right">
	                    <div class="huge"><?php echo $active; ?></div>
	                    <div>Active Users</div>
	                </div>
	            </div>
	        </div>
	        <a href=<?php echo $pg."trends#atrend" ?> class="">
	            <div class="card-footer text-white small z-1">
	                <span class="float-left">View Details</span>
	                <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
    </div>
	<div class="col-md-6">
	    <div class="card bg-success text-white">
	        <div class="card-header">
	            <div class="row">
	                <div class="col-3">
	                    <i class="fa fa-user fa-5x"></i>
	                </div>
	                <div class="col-9 text-right">
	                    <div class="huge"><?php echo $subs; ?></div>
	                    <div>New Subscriptions today</div>
	                </div>
	            </div>
	        </div>
	        <a href=<?php echo $pg."trends#strend" ?>>
	            <div class="card-footer text-white small z-1">
	                <span class="float-left">View Details</span>
	                <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
    </div>
</div>

<!-- Rest of your code... -->

<div class="row">
    <div class="col-md-6">
        <div class="card bg-primary text-white">
            <div class="card-header">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-9 text-right">
                        <div class="huge"><?php echo $comms; ?></div>
                        <div>New Comments today</div>
                    </div>
                </div>
            </div>
            <a href=<?php echo $pg."trends#ctrend" ?>>
                <div class="card-footer text-white small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-primary text-white">
            <div class="card-header">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-9 text-right">
                        <div class="huge"><?php echo $posts; ?></div>
                        <div>New Posts today</div>
                    </div>
                </div>
            </div>
            <a href=<?php echo $pg."trends#ptrend" ?>>
                <div class="card-footer text-white small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<div id="atrend-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="atrendModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="atrendModalLabel">Activity trend</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="atrend" style="width:800px; height:600px;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
            </div>
        </div>
    </div>
</div>
