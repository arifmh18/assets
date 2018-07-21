      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>Hardware/act_edit/<?php echo strEncrypt($detail[0]->hardwareID); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hardware ID" name="ID" value="<?php echo $detail[0]->hardwareID; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Masuk<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglmsk" value="<?php echo $detail[0]->tglmsk; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                  <select class="form-control select2" style="width: 100%;" name="aset">
                      <option value="">- Pilih Aset -</option>
                      <?php 
                          foreach ($supplier as $key => $value) {
                            echo "<option ".($value->idsupplier == $detail[0]->aset ? 'selected' : '')." value='".$value->idsupplier."'>".$value->namasup."</option>";
                          }

                        ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Status<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select name="status" class="form-control">
                      <option value="">- Pilih Status -</option>
                      <option value="Used"<?php if ($detail[0]->status == 'Used' || $detail[0]->status == 'used') {
                        echo 'selected';
                      } ?>>Used</option>
                      <option value="Afval"<?php if ($detail[0]->status == 'AFVAL' || $detail[0]->status == 'Afval') {
                        echo 'selected';
                      } ?>>Afval</option>
                      <option value="Unknown"<?php if ($detail[0]->status == 'Unknown' || $detail[0]->status == 'unknown') {
                        echo 'selected';
                      } ?>>Unknown</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $detail[0]->username; ?>">
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
                  <label class="col-sm-3 control-label">Computer Name<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Computer Name" name="compname" value="<?php echo $detail[0]->compname; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <select name="model" class="form-control">
                      <option value="">- Pilih Model -</option>
                      <option value="PC Dekstop" <?php if ($detail[0]->model == 'PC Dekstop' || $detail[0]->model == 'pc dekstop') {
                        echo 'selected';
                      } ?>>PC Dekstop</option>
                      <option value="Notebook" <?php if ($detail[0]->model == 'Notebook' || $detail[0]->model == 'notebook') {
                        echo 'selected';
                      } ?>>Notebook</option>
                      
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Serial Number<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Serial Number" name="serialnumber" value="<?php echo $detail[0]->serialnumber; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Manufacturer<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Manufacturer" name="manufacturer" value="<?php echo $detail[0]->manufacturer; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Product" name="product" value="<?php echo $detail[0]->product; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Processors<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Processors" name="processors" value="<?php echo $detail[0]->processors; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address" name="macadd" value="<?php echo $detail[0]->macadd; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Mac Address Wifi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Mac Address Wifi" name="macaddwifi" value="<?php echo $detail[0]->macaddwifi; ?>">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Type<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory Type" name="memorytype" value="<?php echo $detail[0]->memorytype; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Size<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory Size" name="memorysize" value="<?php echo $detail[0]->memorysize; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory Max<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type-"number" class="form-control" placeholder="Memory Max" name="memorymax" value="<?php echo $detail[0]->memorymax; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 1<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 1" name="memorydim1" value="<?php echo $detail[0]->memorydim1; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 2<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 2" name="memorydim2" value="<?php echo $detail[0]->memorydim2; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 3<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 3" name="memorydim3" value="<?php echo $detail[0]->memorydim3; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Memory DIM 4<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Memory DIM 4" name="memorydim4" value="<?php echo $detail[0]->memorydim4; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows OS ID" id="winID" name="winOSID" value="<?php echo $detail[0]->winOSID; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS Version<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows OS Version" id="winversion" name="winOSver" value="<?php echo $detail[0]->winOSver; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows OS Product Key<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows OS Product Key" id="productkey" name="winOSpk" value="<?php echo $detail[0]->winOSpk; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows Label ID" id="winlabel" name="winlabelID" value="<?php echo $detail[0]->winlabelID; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label Version<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows Label Version" id="winlabelversion" name="winlabelver" value="<?php echo $detail[0]->winlabelver; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Windows Label Product Key<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Windows Label Product Key" id="labelproductkey" name="winlabelpk" value="<?php echo $detail[0]->winlabelpk; ?>">
                  </div>
                </div>

<!--                 <div class="form-group">
                  <label class="col-sm-2 control-label">Photo Profil</label>
                  <div class="col-sm-10">
                    <input type="file" name="avatar" class="form-control avatar">
                    <p><i>hanya file type jpg, png, gif</i></p>
                  </div>
                </div>
 -->
 <!--               <div class="form-group">
                  <label class="col-sm-3 control-label">Jurusan<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="jurusan">
                      <option value="">- Pilih Jurusan -</option>
                      <?php foreach ($jurusan as $key => $value) { ?>
                      <option value="<?php echo $value->kd_jurusan; ?>"><?php echo $value->nama_jurusan; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
-->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Perbarui</button>
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
          console.log(data);
        }
      });
        console.log(img);
    });
  });
</script>