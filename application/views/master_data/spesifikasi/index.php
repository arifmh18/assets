      <div class="box">
        <div class="box-header with-border">
        <i class="fa fa-lightbulb-o"></i>
          <h3 class="box-title">Data Spesifikasi Assets</h3>
            <div class="pull-right box-tools">
            <!-- <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip" title="Tambah Data"> -->
            <!-- <i class="fa fa-plus"></i></button> -->
            <a href="<?php echo base_url(); ?>spesifikasi/add" class="btn btn-success btn-sm" data-toggle="tooltip" title="Tambah Data">&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;</a>
        </div></div>
        <div class="box-body">
      <div class="row">
            <!-- /.box-header -->
            <div class="box-body"  style="overflow-y: hidden; overflow-x: scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Hardware ID</th>
                  <th>Model</th>
                  <th>Product</th>
                  <th>Serial Number</th>
                  <th>Manufacturer</th>
                  <th>Processor</th>
                  <th>Memory Type</th>
                  <th>Memory Size</th>
                  <th>Memory Max</th>
                  <th>Memory Dim1</th>
                  <th>Memory Dim2</th>
                  <th>Memory Dim3</th>
                  <th>Memory Dim4</th>
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($spesifikasi as $key => $value){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $i ?></td>
                  <td><a href="<?php echo base_url()?>spesifikasi/detail/<?php echo strEncrypt($value->hardware_IDS); ?>"><?php echo $value->hardware_IDS ?></a></td>
                    <?php 
                    foreach ($model as $key => $m) {
                      if ($value->model == $m->kode_model) {
                        echo "<td>".$m->model."</td>";
                      }
                     } ?>
                  <td><?php echo $value->product ?></td>
                  <td><?php echo $value->serialnumber ?></td>
                  <?php
                     foreach ($manufacturer as $key => $mn) {
                      if ($value->manufacturer == $mn->kode_manufacturer) {
                        echo "<td>".$mn->manufacturer."</td>";
                      }
                     } 
                     ?>
                  <td><?php echo $value->processors ?></td>
                  <td><?php echo $value->memorytype ?></td>
                  <td><?php echo $value->memorysize ?></td>
                  <td><?php echo $value->memorymax ?></td>
                  <td><?php echo $value->memorydim1 ?></td>
                  <td><?php echo $value->memorydim2 ?></td>
                  <td><?php echo $value->memorydim3 ?></td>
                  <td><?php echo $value->memorydim4 ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>spesifikasi/edit/<?php echo strEncrypt($value->hardware_IDS); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->hardware_IDS ?>" class="btn btn-danger confirm">
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
              url:"<?php echo base_url()?>spesifikasi/hapus",
              type: "POST",
              data:{id:id},
              success: function(data){
                  swal("Sukses!",data.msg,"success");
                  setTimeout("location.href='<?php echo base_url() ?>spesifikasi'", 1500);
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
