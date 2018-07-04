      <div class="box">
        <div class="box-header with-border">
        <i class="fa fa-lightbulb-o"></i>
          <h3 class="box-title">Master Data Network</h3>
            <div class="pull-right box-tools">
            <!-- <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip" title="Tambah Data"> -->
            <!-- <i class="fa fa-plus"></i></button> -->
            <a href="<?php echo base_url(); ?>network/add" class="btn btn-success btn-sm" data-toggle="tooltip" title="Tambah Data">&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;</a>
        </div></div>
        <div class="box-body">
      <div class="row">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>ID Network</th>
                  <th>Server Area</th>
                  <th>No Switch</th>
                  <th>No Socket</th>
                  <th>No Kabel</th>
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($network as $key => $value){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $i ?></td>
                  <td><?php echo $value->idnetwork ?></td>
                  <td><?php echo $value->server_area ?></td>
                  <td><?php echo $value->no_switch ?></td>
                  <td><?php echo $value->no_socket ?></td>
                  <td><?php echo $value->no_kabel ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>network/edit/<?php echo strEncrypt($value->idnetwork); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->idnetwork ?>" class="btn btn-danger confirm">
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
              url:"<?php echo base_url()?>network/hapus",
              type: "POST",
              data:{id:id},
              success: function(data){
                  swal("Sukses!",data.msg,"success");
                  setTimeout("location.href='<?php echo base_url() ?>network'", 1500);
                console.log(data);
              }
           });
      });
  });
</script>