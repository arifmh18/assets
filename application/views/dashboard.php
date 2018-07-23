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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $hardwareAset; ?></h3>

              <p>Total Unit Aset</p>
            </div>
            <div class="icon">
              <i class="ion ion-pin"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/aset" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $hardwareSewa; ?></h3>

              <p>Total Unit Sewa</p>
            </div>
            <div class="icon">
              <i class="ion ion-link"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/sewa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $hardwarePC; ?></h3>

              <p>PC Dekstop</p>
            </div>
            <div class="icon">
              <i class="ion ion-monitor"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/pc" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $hardwareNote; ?></h3>

              <p>Notebook</p>
            </div>
            <div class="icon">
              <i class="ion ion-laptop"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/notebook" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $hardwarePCAset; ?></h3>

              <p>PC Dekstop Aset</p>
            </div>
            <div class="icon">
              <i class="ion ion-star"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/pcaset" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $hardwarePCSewa; ?></h3>

              <p>PC Dekstop Sewa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/pcsewa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $hardwareNoteAset; ?></h3>

              <p>Notebook Aset</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/noteaset" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $hardwareNoteSewa; ?></h3>

              <p>Notebook Sewa</p>
            </div>
            <div class="icon">
              <i class="ion ion-navigate"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/notesewa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $hardwareStatUsed; ?></h3>

              <p>Hardware Used</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/statused" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $hardwareStatAfval; ?></h3>

              <p>Hardware Afval</p>
            </div>
            <div class="icon">
              <i class="ion ion-close"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail/statafval" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> 

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $hardwareservice; ?></h3>

              <p>Sevice</p>
            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail1/service" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $ipkosong; ?></h3>

              <p>IP Not Used</p>
            </div>
            <div class="icon">
              <i class="ion ion-compose"></i>
            </div>
            <a href="<?php echo base_url() ?>dashboard/detail2/ipnotused" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>       
   <!--     <div class="col-lg-3 col-xs-6">
          <!-- small box -->
   <!--       <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $supplier;?></h3>

              <p>Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url() ?>supplier" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
  <!--      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
 <!--         <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $unit; ?></h3>

              <p>Unit Kerja</p>
            </div>
            <div class="icon">
              <i class="ion ion-usb"></i>
            </div>
            <a href="<?php echo base_url() ?>unit" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
     <!--   <div class="col-lg-3 col-xs-6">
          <!-- small box -->
      <!--    <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $network; ?></h3>

              <p>Network</p>
            </div>
            <div class="icon">
              <i class="ion ion-pinpoint"></i>
            </div>
            <a href="<?php echo base_url() ?>network" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 <!--       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
 <!--         <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $listipaddress; ?></h3>

              <p>List IP Address</p>
            </div>
            <div class="icon">
              <i class="ion ion-pin"></i>
            </div>
            <a href="<?php echo base_url() ?>listipaddress" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
<!--        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
<!--          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $servicehardware; ?></h3>

              <p>Service Hardware</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url() ?>servicehardware" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 <!--       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
 <!--         <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $windowsversion; ?></h3>

              <p>Windows Version</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url() ?>windowsversion" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
