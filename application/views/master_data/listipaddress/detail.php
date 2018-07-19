      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Data Service Hardware</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">IP Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->IPadd ?>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->hardwareID ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Device Name<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->devicename ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->macadd ?>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address Wifi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->macaddwifi ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->unitcode ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php echo $detail[0]->unitkerja ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Lokasi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <?php 
                    foreach ($unit as $key => $m) {
                      if ($detail[0]->unitcode == $m->unitcode) {
                        echo $m->lokasi;
                      }
                     }
					?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Server Area<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                  	<?php 
	                  foreach ($network as $key => $n) {
	                      if ($detail[0]->server_area == $n->idnetwork) {
	                        echo $n->server_area;
	                      }
	                     }
                  	?>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url()?>servicehardware/edit/<?php echo strEncrypt($detail[0]->IPadd); ?>" class="btn btn-info">Edit Data</a>
                <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Kembali" class="btn btn-default pull-right" />
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
<script src="<?php echo base_url(); ?>assets/sweet-alert/js/sweetalert2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tambah').on('submit', function(e){
      e.preventDefault();

      var $this   = $(this),
        url   = $this.attr('action'),
        data  = $this.serialize();

      $.ajax({
        url   : url,
        type  : 'post',
        dataType: 'json',
        data  : data,
        success : function(data) {
          if(data.sts == 1) {
            $.notify({message: data.msg},{type: 'success'});
            setTimeout("location.href='<?php echo base_url() ?>servicehardware'", 2000);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'Internal Server Error !', 'error');
        }
      });

    });
  });  
</script>