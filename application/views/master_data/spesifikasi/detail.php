      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Data Spesifikasi</h3>
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
                  <label class="col-sm-6 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->hardware_IDS ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->model ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->product ?>
                  </div>
                </div>

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
                  <label class="col-sm-6 control-label">Processors<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->processors ?>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory Type<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorytype ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory Size<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorysize ?>
                  </div>
                </div>
              </div>

                <div class="col-sm-6 invoice-col">

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory Max<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorymax ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory DIM 1<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorydim1 ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory DIM 2<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorydim2 ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory DIM 3<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorydim3 ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-6 control-label">Memory DIM 4<span style="color: red">*</span></label>
                  <div class="col-sm-6">
                    <?php echo $detail[0]->memorydim4 ?>
                  </div>
                </div>
              </div>
            </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url()?>spesifikasi/edit/<?php echo strEncrypt($detail[0]->hardware_IDS); ?>" class="btn btn-info">Edit Data</a>
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
            setTimeout("location.href='<?php echo base_url() ?>siswa'", 2000);
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