<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tournament
        <small>Sport Event Information System NPIC</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('adm')?>"><i class="fa fa-home"></i>Dashboard</a></li>
        <li><a href="<?php echo site_url('tournament/view')?>">Tournament</a></li>
        <li><a href="<?php echo site_url('tournament/manage')?>">History</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">History Tournament and Tournament Result</h3>
    </div>
    <form action="<?php echo site_url('tournament/history/findyear') ?>" method="post">
    <div class="box-body">
      <div class="form-group col-md-3">
        <label style="padding-top: 4%;">Choose year of tournament</label>
      </div>
      <div class="form-group col-md-2">
        <select class="form-control select2" id="year" name="year">
          <?php foreach ($tournament as $row) 
          {
            echo '<option value="'.$row->tournament_year.'">'.$row->tournament_year.'</option>';
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-2">
        <a href="#" class="btn btn-info byear">Go</a>
      </div>
    </div>
    <div class="box-body ltour">
      <div class="form-group col-md-3">
        <label style="padding-top: 4%;">Choose tournament</label>
      </div>
      <div class="form-group col-md-2">
        <select class="form-control select2" id="year" name="year">
          <?php foreach ($tournament as $row) 
          {
            echo '<option value="'.$row->tournament_name.'">'.$row->tournament_name.'</option>';
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-2">
        <button class="btn btn-info btournament">Go</button>
      </div>
    </div>
    </form>
</section>
<!-- /.content -->
<script>
  $(document).ready(function () {
    $('.ltour').hide();
    $('.byear').click(function () {
      $('.ltour').show();
    });
  });
</script>