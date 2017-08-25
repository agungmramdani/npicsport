<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tournament
        <small>Sport Event Information System NPIC</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="#"></i> Tournament</a></li>
        <li><a href="#"></i> Create</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Create Tournament</h3>
	</div>
	<div class="box-body">
		<form method="post" action="<?php echo site_url('tournament/create/newpost'); ?>" role="form">
		<div class="form-group col-md-4">
			<label>Tournament Name</label>
			<input type="text" name="t_name" class="form-control" placeholder="Name" required>
		</div>
		<div class="form-group col-md-4">
		    <label>Registration Date</label>
		    <div class="input-group">
		      <div class="input-group-addon">
		        <i class="fa fa-calendar"></i>
		      </div>
		      <input class="form-control pull-right" name="rdate" id="reservation2" type="text">
		    </div>
		</div>
		<div class="form-group col-md-4">
		    <label>Tournament Date</label>
		    <div class="input-group">
		      <div class="input-group-addon">
		        <i class="fa fa-calendar"></i>
		      </div>
		      <input class="form-control pull-right" name="tdate" id="reservation" type="text">
		    </div>
		</div>
		<div class="form-group col-xs-2">
			<label>Max Team</label>
			<input type="text" name="max_team" class="form-control col-xs-3" placeholder="Max team" required>
		</div>
		<div class="form-group col-xs-2">
			<label>Max Team Member</label>
			<input type="text" name="max_player" class="form-control col-xs-3" placeholder="Max team" required>
		</div>
		<div class="form-group col-md-12">
			<label>Description</label>
			<textarea name="description" class="form-control" rows="3" placeholder="Description" required></textarea>
		</div>
		<div class="form-group col-md-12">
			<label>Rules</label>
			<textarea name="rules" class="form-control" rows="6" placeholder="List the tournament rules" required></textarea>
		</div>
		<div class="form-group col-md-12">
			<label>Requirements</label>
			<textarea name="req" class="form-control" rows="6" placeholder="Tournament requirements" required></textarea>
		</div>
		<div class="form-group col-md-4">
			<button type="submit" class="btn btn-info">Create</button>
		</div>
		</form>
	</div>
	</div>
</section>
<script>
$('#reservation').daterangepicker({
    "startDate": "08/07/2017",
    "endDate": "08/20/2017"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
$('#reservation2').daterangepicker({
    "startDate": "08/21/2017",
    "endDate": "08/30/2017"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
</script>