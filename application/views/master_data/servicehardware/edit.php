      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>servicehardware/act_edit/<?php echo strEncrypt($detail[0]->noservice); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">No Service<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="ID" value="<?php echo $detail[0]->noservice; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Service<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglservice"  value="<?php echo $detail[0]->tglservice; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hardware ID" name="hardwareID"  value="<?php echo $detail[0]->hardwareID; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Aset<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Aset" name="aset"  value="<?php echo $detail[0]->aset; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Username" name="username"  value="<?php echo $detail[0]->username; ?>">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Unit" name="unitcode" value="<?php echo $detail[0]->unitcode; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit Kerja<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Unit Kerja" name="unitkerja"  value="<?php echo $detail[0]->unitkerja; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Model" name="model"  value="<?php echo $detail[0]->model; ?>">
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
                    <input type="text" class="form-control" placeholder="Manufacturer" name="manufacturer"  value="<?php echo $detail[0]->manufacturer; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Product" name="product"  value="<?php echo $detail[0]->product; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Remarks<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Remarks" name="remarks"  value="<?php echo $detail[0]->remarks; ?>">
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
                    <input type="date" class="form-control" name="tglkeluar"  value="<?php echo $detail[0]->tglkeluar; ?>">
                  </div>
                </div>

<!--                 <div class="form-group">
                  <label class="col-sm-3 control-label">Manufacturer<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="manufacturer">
                      <option value="">- Pilih Manufacturer -</option>
                      <?php 
                          foreach ($manufacturer as $key => $value) {
                            echo "<option ".($value->kode_manufacturer == $detail[0]->manufacturer ? 'selected' : '')." value='".$value->kode_manufacturer."'>".$value->manufacturer."</option>";
                          }

                        ?>







                        
                    </select>
                  </div>
                </div>
 -->
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
          swal('Error', 'Hardware ID Sudah Ada<br>, <b>Hardware ID</b> TIDAK BOLEH SAMA!', 'error');
          console.log(data);
        }
      });
        console.log(img);
    });
  });
</script>