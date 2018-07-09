      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Isi Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>servicehardware/act_add" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">No Service<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="ID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Service<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglservice">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="hardwareID">
                      <option value="">- Silahkan Pilih -</option>
                      <?php foreach ($hardware as $key => $value) { ?>
                      <option value="<?php echo $value->hardwareID; ?>"><?php echo $value->hardwareID.' - '.$value->product; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Aset" name="aset">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Username" name="username">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Unit" name="unitcode">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Unit Kerja" name="unitkerja">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Model" name="model">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Serial Number<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Serial Number" name="serialnumber">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Manufacturer<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Manufacturer" name="manufacturer">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Product" name="product">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Remarks<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Remarks" name="remarks">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Status<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Status" name="status">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Keluar<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglkeluar">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
                <a href="<?php echo base_url() ?>servicehardware" class="btn btn-default pull-right">Kembali</a>
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
            setTimeout("location.href='<?php echo base_url() ?>servicehardware'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'No Service Sudah Ada<br>, <b>No Service</b> TIDAK BOLEH SAMA!', 'error');
        }
      });

    });
  });
</script>