      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Data Service Hardware</h3>
<!--               <div class="pull-right box-tools">
                <a href="<?php base_url()?>siswa/cetak" class="btn btn-info pull-right" data-toggle="tooltip" title="Print Data siswa"><span class="fa fa-print"></span> Print</a>
              </div>
 -->            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="" method="post">
              <div class="box-body">
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
              
                <div class="form-group">
                  <label class="col-sm-6 control-label">No Service<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->noservice ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Tanggal Service<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->tglservice ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->hardwareID ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->aset ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->username ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->unitcode ?>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-6 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->unitkerja ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->model ?>
                  </div>
                </div>
              </div>

          <div class="col-sm-6 invoice-col">

                <div class="form-group">
                  <label class="col-sm-6 control-label">Serial Number<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->serialnumber ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Manufacturer<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->manufacturer ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->product ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Remarks<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->remarks ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Status<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->status ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Tanggal Keluar<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->tglkeluar ?>
                  </div>
                </div>
              </div>
            </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url()?>servicehardware/edit/<?php echo strEncrypt($detail[0]->noservice); ?>" class="btn btn-info">Edit Data</a>
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