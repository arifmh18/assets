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
                    <input type="number" class="form-control" name="ID" placeholder="No Service">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Service<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglservice" value="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="hardwareID" id="hardwareID" placeholder="hardware ID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" name="aset" id="aset" class="form-control" placeholder="Aset">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="unitcode" placeholder="Kode Unit" name="unitcode">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="unitkerja" placeholder="Unit Kerja" name="unitkerja">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="model" placeholder="Model" name="model">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Serial Number<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="serialnumber" placeholder="Serial Number" name="serialnumber">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Manufacturer<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer" name="manufacturer">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="product" placeholder="Product" name="product">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Remarks<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <textarea class="form-control" placeholder="Remarks" name="remarks"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Status<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select name="status" class="form-control">
                      <option value="">- Pilih Status -</option>
                      <option value="Service">Service</option>
                      <option value="Selesai">Selesai</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Keluar<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglkeluar" value="<?php echo date('Y-m-d'); ?>">
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
    $("#hardwareID").autocomplete({
          source: function (request, response){
            $.ajax({
              url: "<?php echo site_url('servicehardware/hardware/?');?>",
              dataType: 'json',
              data: request,
              success: function (data){
                response(data.map(function(item){
                  return{
                    'label':  item.hardwareID,
                    'aset': item.aset,
                    'username': item.username,
                    'unitcode': item.unitcode,
                    'unitkerja': item.unitkerja,
                    'model': item.model,
                    'serialnumber': item.serialnumber,
                    'manufacturer': item.manufacturer,
                    'product': item.product,
                    'value': item.hardwareID
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#aset").val(ui.item.aset);
                $("#username").val(ui.item.username);
                $("#unitcode").val(ui.item.unitcode);
                $("#unitkerja").val(ui.item.unitkerja);
                $("#model").val(ui.item.model);
                $("#serialnumber").val(ui.item.serialnumber);
                $("#manufacturer").val(ui.item.manufacturer);
                $("#product").val(ui.item.product);
              }
        });

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