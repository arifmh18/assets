      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Isi Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>hardware/act_add" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hardware ID" name="ID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Masuk<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglmsk" value="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="aset">
                      <option value="">- Pilih Aset -</option>
                      <?php foreach ($supplier as $key => $value) { ?>
                      <option value="<?php echo $value->idsupplier; ?>"><?php echo $value->namasup; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Status<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select name="status" class="form-control">
                      <option value="">- Pilih Status -</option>
                      <option value="Service">Service IT</option>
                      <option value="Selesai">Used</option>
                      <option value="Service">Afval</option>
                      <option value="Selesai">Unknown</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Unit" name="unitcode" id="unitcode">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Unit Kerja" name="unitkerja" id="unitkerja">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Computer Name<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Computer Name" name="compname">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select name="model" class="form-control">
                      <option value="">- Pilih Model -</option>
                      <option value="PC Dekstop">PC Dekstop</option>
                      <option value="Notebook">Notebook</option>
                      
                    </select>
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
                  <label class="col-sm-3 control-label">Processors<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Processors" name="processors">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address" name="macadd">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address Wifi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address Wifi" name="macaddwifi">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Type<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory Type" name="memorytype">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Size<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory Size" name="memorysize">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Max<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type-"number" class="form-control" placeholder="Memory Max" name="memorymax">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 1<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 1" name="memorydim1">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 2<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 2" name="memorydim2">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 3<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 3" name="memorydim3">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 4<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 4" name="memorydim4">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="winID" placeholder="Windows OS ID" name="winID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS Version<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="winversion" placeholder="Windows OS Version" name="winversion">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS Product Key<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="productkey" placeholder="Windows OS Product Key" name="productkey">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="winlabel" placeholder="Windows Label ID" name="winlabelID">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label Version<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="winlabelversion" placeholder="Windows Label Version" name="winlabelversion">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label Product Key<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="labelproductkey" placeholder="Windows Label Product Key" name="winlabelpk">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
                <a href="<?php echo base_url() ?>hardware" class="btn btn-default pull-right">Kembali</a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
<script src="<?php echo base_url(); ?>assets/sweet-alert/js/sweetalert2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $("#unitcode").autocomplete({
          source: function (request, response){
            $.ajax({
              url: "<?php echo site_url('hardware/unit/?');?>",
              dataType: 'json',
              data: request,
              success: function (data){
                response(data.map(function(item){
                  return{
                    'label':  item.unitcode,
                    'unitkerja': item.unitkerja,
                    'value': item.unitcode
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#unitkerja").val(ui.item.unitkerja);
              }
        });

        $("#winID").autocomplete({
          source: function (request, response){
            $.ajax({
              url: "<?php echo site_url('hardware/windowsversion/?');?>",
              dataType: 'json',
              data: request,
              success: function (data){
                response(data.map(function(item){
                  return{
                    'label':  item.winID,
                    'winversion': item.winversion,
                    'productkey': item.productkey,
                    'value': item.winID,
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#winversion").val(ui.item.winversion);
                $("#productkey").val(ui.item.productkey);
              }
        });

        $("#winlabel").autocomplete({
          source: function (request, response){
            $.ajax({
              url: "<?php echo site_url('hardware/windowsversion/?');?>",
              dataType: 'json',
              data: request,
              success: function (data){
                response(data.map(function(item){
                  return{
                    'label':  item.winID,
                    'winversion': item.winversion,
                    'productkey': item.productkey,
                    'value': item.winID,
                  };
                }));
              },
            });
          },
              select: function (event, ui){
                $("#winlabelversion").val(ui.item.winversion);
                $("#labelproductkey").val(ui.item.productkey);
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
            setTimeout("location.href='<?php echo base_url() ?>hardware'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'Hardware ID Sudah Ada<br>, <b>Hardware ID</b> TIDAK BOLEH SAMA!', 'error');
        }
      });

    });
  });
</script>