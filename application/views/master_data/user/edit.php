      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>user/act_edit/<?php echo strEncrypt($detail[0]->no_badge); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">No Badge<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="No Badge" name="nobadge" value="<?php echo $detail[0]->no_badge; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Username<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $detail[0]->username; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Email<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $detail[0]->email; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Jabatan<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="<?php echo $detail[0]->jabatan; ?>">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 control-label">Unit<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="unit">
                      <option value="">- Pilih Unit -</option>
                      <?php 
                          foreach ($unit as $key => $value) {
                            echo "<option ".($value->unitcode == $detail[0]->unitname ? 'selected' : '')." value='".$value->unitcode."'>".$value->unitname."</option>";
                          }

                        ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Lokasi<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="lokasi">
                      <option value="">- Pilih Lokasi -</option>
                      <?php 
                          foreach ($lokasi as $key => $value) {
                            echo "<option ".($value->code_loc == $detail[0]->lokasi ? 'selected' : '')." value='".$value->code_loc."'>".$value->lokasi."</option>";
                          }

                        ?>
                    </select>
                  </div>
                </div>

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
            setTimeout("location.href='<?php echo base_url() ?>user'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'No Badge Sudah Ada<br>, <b>No Badge</b> TIDAK BOLEH SAMA!', 'error');
          console.log(data);
        }
      });
        console.log(img);
    });
  });
</script>