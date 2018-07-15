      <div class="box">
        <div class="box-header with-border">
        <i class="fa fa-lightbulb-o"></i>
          <h3 class="box-title">Master Data Service Hardware</h3>
            <div class="pull-right box-tools">
            <!-- <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip" title="Tambah Data"> -->
            <!-- <i class="fa fa-plus"></i></button> -->
            <a href="<?php echo base_url(); ?>servicehardware/add" class="btn btn-success btn-sm" data-toggle="tooltip" title="Tambah Data">&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;</a>
        </div></div>
        <div class="box-body">
      <div class="row">
            <!-- /.box-header -->
            <div class="box-body"  style="overflow-y: hidden; overflow-x: scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>No Service</th>
                  <th>Tanggal Service</th>
                  <th>Hardware ID</th>
                  <th>Aset</th>
                  <th>Username</th>
                  <th>Kode Unit</th>
                  <th>Unit Kerja</th>
                  <th>Model</th>
                  <th>Serial Number</th>
                  <th>Manufacturer</th>
                  <th>Product</th>
                  <th>Remarks</th>
                  <th>Status</th>
                  <th>Tanggal Keluar</th>
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($servicehardware as $key => $value){ 
                ?>
                <tr>
                <td class="text-center"><?php echo $i ?></td>
                  <td><a href="<?php echo base_url()?>servicehardware/detail/<?php echo strEncrypt($value->noservice); ?>"><?php echo $value->noservice ?></a></td>
                  <td><?php echo $value->tglservice ?></td>
                  <td><?php echo $value->hardwareID ?></td>
                  <td><?php echo $value->aset ?></td>
                  <td><?php echo $value->username ?></td>
                  <td><?php echo $value->unitcode ?></td>
                  <td><?php echo $value->unitkerja ?></td>
                  <td><?php echo $value->model ?></td>
                  <td><?php echo $value->serialnumber ?></td>
                  <td><?php echo $value->manufacturer ?></td>
                  <td><?php echo $value->product ?></td>
                  <td><?php echo $value->remarks ?></td>
                  <td><?php echo $value->status ?></td>
                  <td><?php echo $value->tglkeluar ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>servicehardware/edit/<?php echo strEncrypt($value->noservice); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->noservice ?>" class="btn btn-danger confirm">
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
              url:"<?php echo base_url()?>servicehardware/hapus",
              type: "POST",
              data:{id:id},
              success: function(data){
                  swal("Sukses!",data.msg,"success");
                  setTimeout("location.href='<?php echo base_url() ?>servicehardware'", 1500);
                console.log(data);
              }
           });
      });
  });

</script>
