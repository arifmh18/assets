      <div class="box">
        <div class="box-header with-border">
        <i class="fa fa-lightbulb-o"></i>
          <h3 class="box-title">Data Sewa Barang</h3>
            <div class="pull-right box-tools">
            <!-- <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip" title="Tambah Data"> -->
            <!-- <i class="fa fa-plus"></i></button> -->
            <a href="<?php echo base_url(); ?>sewa/add" class="btn btn-success btn-sm" data-toggle="tooltip" title="Tambah Data">&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;</a>
        </div></div>
        <div class="box-body">
      <div class="row">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Kode Barang</th>
                  <th>Model Barang</th>
                  <th>Nama Barang</th>
                  <th>Tanggal Mulai Sewa</th>
                  <th>Tanggal Akhir Sewa</th>
                  <th>No. PO</th>
                  <th>Supplier</th>
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($sewa as $key => $value){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $i ?></td>
                  <td><?php echo $value->kode_barang ?></a></td>
                  <td><?php echo $value->model_barang ?></td>
                  <td><?php echo $value->nama_barang ?></td>
                  <td><?php echo $value->tgl_mulai_sewa ?></a></td>
                  <td><?php echo $value->tgl_akhir_sewa ?></td>
                  <td><?php echo $value->no_po ?></td>
                    <?php 
                    foreach ($supplier as $key => $s) {
                      if ($value->supplier == $s->kode_supplier) {
                        echo "<td>".$s->supplier."</td>";
                      }
                     } 
                     ?>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>sewa/edit/<?php echo strEncrypt($value->kode_barang); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->kode_barang ?>" class="btn btn-danger confirm">
                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                    </button>
                  </td>
                </tr>
                <?php $i++;} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        <!-- /.box-body -->
      <!-- /.box -->
<script type="text/javascript" src="<?php echo base_url()?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).on("click",".confirm",function(){
      var id=$(this).attr("value");
      swal({
          title:"Hapus",
          text:"Yakin akan menghapus data ini?",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Hapus",
          closeOnConfirm: true,
      }).then(function(){
           $.ajax({
              url:"<?php echo base_url()?>sewa/hapus",
              type: "POST",
              data:{id:id},
              success: function(data){
                  swal("Sukses!",data.msg,"success");
                  setTimeout("location.href='<?php echo base_url() ?>sewa'", 1500);
                console.log(data);
              }
           });
      });
  });
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

</script>
