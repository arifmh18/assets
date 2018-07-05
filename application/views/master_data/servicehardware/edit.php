      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>spesifikasi/act_edit/<?php echo strEncrypt($detail[0]->hardware_IDS); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Hardware ID<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hardware ID" name="ID" value="<?php echo $detail[0]->hardware_IDS; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Model<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="model">
                      <option value="">- Pilih Model -</option>
                      <?php 
                          foreach ($model as $key => $value) {
                            echo "<option ".($value->kode_model == $detail[0]->model ? 'selected' : '')." value='".$value->kode_model."'>".$value->model."</option>";
                          }

                        ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Product<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Product" name="product" value="<?php echo $detail[0]->product; ?>">
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

                <div class="form-group">
                  <label class="col-sm-3 control-label">Processors<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Processors" name="processors" value="<?php echo $detail[0]->processors; ?>">
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
                <a href="<?php echo base_url() ?>spesifikasi" class="btn btn-default pull-right">Kembali</a>
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
            setTimeout("location.href='<?php echo base_url() ?>spesifikasi'", 1500);
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