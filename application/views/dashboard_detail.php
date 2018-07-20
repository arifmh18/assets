      <div class="callout callout-info">
        <h4>Selamat Datang <strong><?php echo $this->session->userdata('username'); ?></strong> IT ASSET MANAGEMENT UTSG</h4>
      </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Rekap IT Assets</h3>

        </div>
        <div class="box-body">
      <div class="row">
            <div class="box-body"  style="overflow-y: hidden; overflow-x: scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Hardware ID</th>
                  <th>Tanggal Masuk</th>
                  <th>Aset</th>
                  <th>Status</th>
                  <th>Username</th>
                  <th>Kode Unit</th>
                  <th>Unit Kerja</th>
                  <th>Comp Name</th>
                  <th>Model</th>
                  <th>Serial Number</th>
                  <th>Manufacturer</th>
                  <th>Product</th>
                  <th>Processor</th>
                  <th>Mac Address</th>
                  <th>Mac Add Wifi</th>
                  <th>Memory Type</th>
                  <th>Memory Size</th>
                  <th>Memory Max</th>
                  <th>Memory Dim1</th>
                  <th>Memory Dim2</th>
                  <th>Memory Dim3</th>
                  <th>Memory Dim4</th>
                  <th>Win OS ID</th>
                  <th>Win OS Vers</th>
                  <th>Win OS PK</th>
                  <th>Win Label ID</th>
                  <th>Win Label Ver</th>
                  <th>Win Label PK</th>
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($hardware as $key => $value){ 
                ?>
                <tr>
                <td class="text-center"><?php echo $i ?></td>
                  <td><a href="<?php echo base_url()?>hardware/detail/<?php echo strEncrypt($value->hardwareID); ?>"><?php echo $value->hardwareID ?></a></td>
                  <td><?php echo $value->tglmsk ?></td>
                  <td><?php
                    foreach ($supplier as $key => $m) {
                      if ($value->aset == $m->idsupplier) {
                        echo $m->namasup;
                      }
                     }
                   ?></td>
                  <td><?php echo $value->status ?></td>
                  <td><?php echo $value->username ?></td>
                  <td><?php echo $value->unitcode ?></td>
                  <td><?php echo $value->unitkerja ?></td>
                  <td><?php echo $value->compname ?></td>
                  <td><?php echo $value->model ?></td>
                  <td><?php echo $value->serialnumber ?></td>
                  <td><?php echo $value->manufacturer ?></td>
                  <td><?php echo $value->product ?></td>
                  <td><?php echo $value->processors ?></td>
                  <td><?php echo $value->macadd ?></td>
                  <td><?php echo $value->macaddwifi ?></td>
                  <td><?php echo $value->memorytype ?></td>
                  <td><?php echo $value->memorysize ?></td>
                  <td><?php echo $value->memorymax ?></td>
                  <td><?php echo $value->memorydim1 ?></td>
                  <td><?php echo $value->memorydim2 ?></td>
                  <td><?php echo $value->memorydim3 ?></td>
                  <td><?php echo $value->memorydim4 ?></td>
                  <td><?php echo $value->winOSID ?></td>
                  <td><?php echo $value->winOSver ?></td>
                  <td><?php echo $value->winOSpk ?></td>
                  <td><?php echo $value->winlabelID ?></td>
                  <td><?php echo $value->winlabelver ?></td>
                  <td><?php echo $value->winlabelpk ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>hardware/edit/<?php echo strEncrypt($value->hardwareID); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->hardwareID ?>" class="btn btn-danger confirm">
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
<script>
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
