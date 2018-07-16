      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Perbarui Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>supplier/act_edit/<?php echo strEncrypt($detail[0]->idsupplier); ?>" method="post">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">ID Supplier <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="ID Supplier" name="kode" value="<?php echo $detail[0]->idsupplier; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Supplier <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Supplier" name="nama" value="<?php echo $detail[0]->namasup; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Status <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select name="status" class="form-control" value="<?php echo $detail[0]->status; ?>">
                      <option value="">- Pilih Status -</option>
                      <option value="Aset">Aset</option>
                      <option value="Sewa">Sewa</option>
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right"> Perbarui</button>
                <a href="<?php echo base_url()?>supplier" class="btn btn-default pull-right">Kembali</a>
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
            setTimeout("location.href='<?php echo base_url() ?>supplier'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'ID Supplier Sudah Ada <br>, <b>ID Supplier</b> TIDAK BOLEH SAMA!', 'error');
        }
      });
    });
  });  

</script>