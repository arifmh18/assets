      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Isi Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>listipaddress/act_add" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">IP Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="IP Address" name="kode">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="hardwareID" id="hardwareID" placeholder="hardware ID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Device Name<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="devicename" placeholder="Device Name" name="devicename">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="macadd" placeholder="Mac Address" name="macadd">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address Wifi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="macaddwifi" placeholder="Mac Address Wifi" name="macaddwifi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Unit" name="unitcode">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Unit Kerja" name="unitkerja">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Lokasi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Lokasi" name="lokasi">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Server Area<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                  <select class="form-control select2" style="width: 100%;" name="server_area">
                      <option value="">- Pilih Server Area -</option>
                      <?php foreach ($network as $key => $value) { ?>
                      <option value="<?php echo $value->idnetwork; ?>"><?php echo $value->server_area; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
                <a href="<?php echo base_url() ?>listipaddress" class="btn btn-default pull-right">Kembali</a>
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
              url: "<?php echo site_url('listipaddress/hardware/?');?>",
              dataType: 'json',
              data: request,
              success: function (data){
                response(data.map(function(item){
                  return{
                    'label':  item.hardwareID,
                    'devicename': item.devicename,
                    'macadd': item.macadd,
                    'macaddwifi': item.macaddwifi,
                    'value': item.hardwareID
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#devicename").val(ui.item.devicename);
                $("#macadd").val(ui.item.macadd);
                $("#macaddwifi").val(ui.item.macaddwifi);
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
            setTimeout("location.href='<?php echo base_url() ?>listipaddress'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'IP Address Sudah Ada<br>, <b>IP Address</b> TIDAK BOLEH SAMA!', 'error');
        }
      });

    });
  });
</script>