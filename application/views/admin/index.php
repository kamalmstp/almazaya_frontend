<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/dropzone/min/dropzone.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h1 class="card-title">FORMULIR PENDAFTARAN SISWA BARU ALMAZAYA BANJARMASIN</h1>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#jalur-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="jalur-part" id="jalur-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Pilih Jalur</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#diri-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="diri-part" id="diri-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Biodata Diri</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#ayah-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="ayah-part" id="ayah-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Biodata Ayah</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#ibu-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="ibu-part" id="ibu-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Biodata Ibu</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="jalur-part" class="content" role="tabpanel" aria-labelledby="jalur-part-trigger">
                        <div class="form-group">
                            <label>Jalur Masuk</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Jalur Masuk --</option>
                                <option>Reguler</option>
                                <option>Beasiswa</option>
                            </select>
                        </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="diri-part" class="content" role="tabpanel" aria-labelledby="diri-part-trigger">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Jenis Kelamin --</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                        <label>Tanggal Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelurahan / Desa</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kelurahan / Desa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kecamatan</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kabupaten / Kota</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kabupaten / Kota">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Asal Sekolah</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Kelulusan</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tahun Kelulusan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Telepon / Hp</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor Telepon / Hp">
                        </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="ayah-part" class="content" role="tabpanel" aria-labelledby="ayah-part-trigger">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Pekerjaan --</option>
                                <option>Buruh</option>
                                <option>Karyawan Swasta</option>
                                <option>Nelayan</option>
                                <option>Pedagang Besar</option>
                                <option>Pedagang Kecil</option>
                                <option>Pensiunan</option>
                                <option>Petani</option> 
                                <option>Peternak</option> 
                                <option>PNS/TNI/POLISI</option>   
                                <option>Wiraswasta</option>
                                <option>Wirausaha</option>
                                <option>Tidak Bekerja</option>
                                <option>Lain-Lain</option>
                            </select>
                        </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="ibu-part" class="content" role="tabpanel" aria-labelledby="ibu-part-trigger">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Pekerjaan --</option>
                                <option>Buruh</option>
                                <option>Karyawan Swasta</option>
                                <option>Nelayan</option>
                                <option>Pedagang Besar</option>
                                <option>Pedagang Kecil</option>
                                <option>Pensiunan</option>
                                <option>Petani</option> 
                                <option>Peternak</option> 
                                <option>PNS/TNI/POLISI</option>   
                                <option>Wiraswasta</option>
                                <option>Wirausaha</option>
                                <option>Tidak Bekerja</option>
                                <option>Lain-Lain</option> 
                            </select>
                        </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="default-part" class="content" role="tabpanel" aria-labelledby="default-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url()?>assets/admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url()?>assets/admin/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/admin/dist/js/demo.js"></script>
<script>
  $(function () {

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

</script>
</body>
</html>
