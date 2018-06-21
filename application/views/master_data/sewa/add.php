      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Silahkan Isi Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="tambah" class="form-horizontal" action="<?php echo base_url() ?>sewa/act_add" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Barang<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang">
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-3 control-label">Model Barang<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Model Barang" name="model_barang">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Barang<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Mulai Sewa<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_mulai_sewa">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Akhir Sewa<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_akhir_sewa">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">NO. PO<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="NO. PO" name="no_po">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Supplier<span style="color: red">*</span></label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;" name="supplier">
                      <option value="">- Pilih Supplier -</option>
                      <?php foreach ($supplier as $key => $value) { ?>
                      <option value="<?php echo $value->kode_supplier; ?>"><?php echo $value->supplier; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
                <a href="<?php echo base_url() ?>sewa" class="btn btn-default pull-right">Kembali</a>
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
            setTimeout("location.href='<?php echo base_url() ?>sewa'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }    console.log(data);
        },
        error   : function(data) {
          swal('Error', 'Kode Barang Sudah Ada<br>, <b>Kode Barang</b> TIDAK BOLEH SAMA!', 'error');
        }
      });

    });
  });
</script>