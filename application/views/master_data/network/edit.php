      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>network/act_edit/<?php echo strEncrypt($detail[0]->idnetwork); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">ID Network <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="ID Network" name="kode" value="<?php echo $detail[0]->idnetwork; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Server Area <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Server Area" name="nama" value="<?php echo $detail[0]->server_area; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">No Switch <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="No Switch" name="no_switch" value="<?php echo $detail[0]->no_switch; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">No Socket <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="No Socket" name="no_socket" value="<?php echo $detail[0]->no_socket; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">No Kabel <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="No Kabel" name="no_kabel" value="<?php echo $detail[0]->no_kabel; ?>">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right"> Perbarui</button>
                <a href="<?php echo base_url()?>network" class="btn btn-default pull-right">Kembali</a>
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
            swal("Sukses!",data.msg,"success");
            setTimeout("location.href='<?php echo base_url() ?>network'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'ID Network Sudah Ada <br>, <b>ID Network</b> TIDAK BOLEH SAMA!', 'error');
        }
      });
    });
  });  

</script>