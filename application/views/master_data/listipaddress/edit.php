      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>listipaddress/act_edit/<?php echo strEncrypt($detail[0]->IPadd); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">IP Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="IP Address" name="kode" value="<?php echo $detail[0]->IPadd; ?>">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hardware ID" id="hardwareID" name="hardwareID" value="<?php echo $detail[0]->hardwareID; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Device Name<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Device Name" id="devicename" name="devicename" value="<?php echo $detail[0]->devicename; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address" id="macadd" name="macadd" value="<?php echo $detail[0]->macadd; ?>">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address Wifi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address Wifi" id="mac add wifi" name="macaddwifi" value="<?php echo $detail[0]->macaddwifi; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Unit" id="unitcode" name="unitcode" value="<?php echo $detail[0]->unitcode; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Unit Kerja" id="unitkerja" name="unitkerja" value="<?php echo $detail[0]->unitkerja; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Server Area<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="server_area">
                      <option value="">- Pilih Server Area -</option>
                      <?php 
                          foreach ($network as $key => $value) {
                            echo "<option ".($value->idnetwork == $detail[0]->server_area ? 'selected' : '')." value='".$value->idnetwork."'>".$value->server_area."</option>";
                          } ?>
                    </select>
                  </div>
                </div>
  
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Perbarui</button>
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
                    'compname': item.compname,
                    'macadd': item.macadd,
                    'macaddwifi': item.macaddwifi,
                    'unitcode': item.unitcode,
                    'unitkerja': item.unitkerja,
              //      'lokasi': item.lokasi,
                    'value': item.hardwareID,
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#compname").val(ui.item.compname);
                $("#macadd").val(ui.item.macadd);
                $("#macaddwifi").val(ui.item.macaddwifi);
                $("#unitcode").val(ui.item.unitcode);
                $("#unitkerja").val(ui.item.unitkerja);
           //     $("#lokasi").val(ui.item.lokasi);
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
          console.log(data);
        }
      });
        console.log(img);
    });
  });
</script>