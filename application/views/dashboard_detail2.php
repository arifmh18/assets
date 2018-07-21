<div class="callout callout-info">
        <h4>Selamat Datang <strong><?php echo $this->session->userdata('username'); ?></strong> IT ASSET MANAGEMENT UTSG</h4>
      </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Rekap IT Assets</h3>

          <div class="box-body">
      <div class="row">
            <div class="box-body"  style="overflow-y: hidden; overflow-x: scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>IP address</th>
                  <th>Hardware ID</th>
                  <th>Device Name</th>
                  <th>Mac Address</th>
                  <th>Mac Address Wifi</th>
                  <th>Kode Unit</th>
                  <th>Unit Kerja</th>
                  <th>Lokasi</th>
                  <th>Server Area</th>
                                    
                  <th width="200px" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                  foreach ($listipaddress as $key => $value){ 
                ?>
                <tr>
                <td class="text-center"><?php echo $i ?></td>
                  <td><a href="<?php echo base_url()?>listipaddress/detail/<?php echo strEncrypt($value->IPadd); ?>"><?php echo $value->IPadd ?></a></td>
                  <td><?php echo $value->hardwareID ?></td>
                  <td><?php echo $value->devicename ?></td>
                  <td><?php echo $value->macadd ?></td>
                  <td><?php echo $value->macaddwifi ?></td>
                  <td><?php echo $value->unitcode ?></td>
                  <td><?php echo $value->unitkerja ?></td>
                  <td><?php echo $value->lokasi ?></td>
                  <td><?php echo $value->server_area ?></td>
                  
                  <td class="text-center">
                    <a href="<?php echo base_url()?>listipaddress/edit/<?php echo strEncrypt($value->IPadd); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                    <button type="button" value="<?php echo $value->IPadd ?>" class="btn btn-danger confirm">
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