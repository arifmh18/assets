    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green-active">
              <h3 class="widget-user-username"><strong><center><?php echo $profile[0]->username ?></center></strong></h3>
            </div>
<!--             <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url() ?>assets/img/avatar/<?php echo $profile[0]->avatar ?>" alt="User Avatar">
            </div>
-->            <div class="box-footer">
            <form id="tambah" class="form-horizontal" action="" method="post">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Username<span style="color: red">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $profile[0]->username ?>">
                    </div>
                  </div>
                </li>

                <li class="list-group-item">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Password<span style="color: red">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Password" name="password" value="">
                      <small style="color: red;"><i>*Kosongi apabila tidak ingin merubah password</i></small>
                    </div>
                  </div>
                </li>

                <li class="list-group-item">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Ulangi Password<span style="color: red">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Retype Password" name="repass" value="">
                      <small style="color: red;"><i>*Kosongi apabila tidak ingin merubah password</i></small>
                    </div>
                  </div>
                </li>

              </ul>
              <button type="submit" class="btn btn-primary btn-block"><b>Perbarui</b></button>
            </div>
          </div>
          </form>
          <!-- /.widget-user -->
        </div>
      </div>

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
            // $.notify({message: data.msg},{type: 'success'});
            // console.log(data);
            setTimeout("location.href='<?php echo base_url() ?>profile/edit/<?php echo $profile[0]->id; ?>'", 1500);
          } else {
            $.notify({message: data.msg},{type: 'danger'});
          }   
        },
        error   : function(data) {
          swal('Error', 'Terdapat Kesamaan Data <br>, <b>Nomor Induk</b> dan <b>Email</b> TIDAK BOLEH SAMA!', 'error');
        }
      });
      console.log(data);
    });

});
</script>