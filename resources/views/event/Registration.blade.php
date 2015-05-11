<!DOCTYPE html>
<html lang="en" ng-app="admin">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Andhika Maheva Wicaksono">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Registrasi HMSI Apps!</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}" >


    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body class="login-body" ng-controller="registration">

<!-- <div class="container">

  <form class="form-signin" ng-submit="submit()">
    <h2 class="form-signin-heading">registration now</h2>
    <div class="login-wrap">
        <p>{{ $title }}</p>
        <input type="text" class="form-control" placeholder="Full Name" autofocus >
        <input type="text" class="form-control" placeholder="Address" autofocus>
        <input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="text" class="form-control" placeholder="City/Town" autofocus>
        <div class="radios">
            <label class="label_radio col-lg-6 col-sm-6" for="laki">
                <input name="laki" id="laki" value="{{ bcrypt('1') }}" type="radio" checked ng-model="data.mhs_gender"> Laki - Laki
            </label>
            <label class="label_radio col-lg-6 col-sm-6" for="perempuan">
                <input name="perempuan" id="perempuan" value="{{ bcrypt('2') }}" type="radio" ng-model="data.mhs_gender"> Perempuan
            </label>
        </div>

        <p> Enter your account details below</p>
        <input type="text" class="form-control" placeholder="User Name" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <input type="password" class="form-control" placeholder="Re-type Password">
        <label class="checkbox">
            <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
        </label>
        <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
        <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

        <div class="registration">
            Already Registered.
            <a class="" href="login.html">
                Login
            </a>
        </div>

    </div>

  </form>

</div>
-->
<div class="container">



  <section class="wrapper site-min-height">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <section class="panel">
                  <header class="panel-heading">
                      <h1>{{ $title }}</h1>
                      <hr>
                      <p>HMSI Apps merupakan online aplikasi yang diperuntukkan bagi
                          mahasiswa Sistem Informasi Institut Bisnis dan Informatika</p>
                          <p><strong>Daftar Gratis!</strong> dan dapatkan banyak manfaat lainnya :)</p>
                      </header>
                      <div class="panel-body">
                          <div class="stepy-tab">
                              <ul id="default-titles" class="stepy-titles clearfix">
                                  <li id="default-title-0" class="current-step">
                                      <div>Step 1</div>
                                  </li>
                                  <li id="default-title-1" class="">
                                      <div>Step 2</div>
                                  </li>
                                  <li id="default-title-2" class="">
                                      <div>Step 3</div>
                                  </li>
                              </ul>

                          </div>
                          <hr>
                          <form class="form-horizontal" id="default" ng-submit="submit()">
                              <fieldset title="Step1" class="step" id="default-step-0">
                                  <legend> </legend>

                                  <div class="form-group" >
                                      <label class="col-lg-2 control-label">NIM</label>
                                      <div class="col-lg-5">
                                        <input type="text" value="" ng-model="data.nim" class="form-control" placeholder="Masukkan 11 digit NIM" reqiured>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Nama</label>
                                  <div class="col-lg-8">
                                      <input type="text" ng-model="data.mhs_nama" class="form-control" placeholder="Nama Lengkap">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                <div class="col-lg-10">
                                    <div class="radios">
                                       <label class="label_radio" for="laki">
                                           <input name="laki" id="laki" value="$2y$10$Icy16T3Y6nH/mxEh3fR/ze3C71fZQQFScbet8JzL6IdBBexdIgCR." type="radio"  ng-model="data.mhs_gender"> Laki - Laki
                                       </label>
                                       <label class="label_radio" for="perempuan">
                                           <input name="perempuan" id="perempuan" value="$2y$10$g1uGRDY4lXfVvFsbVRfO2epOO8W5xN0w6i0GA4RyjZEFEmPC5nyVK" type="radio" ng-model="data.mhs_gender"> Perempuan
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                           <label class="control-label col-lg-2">Tanggal Lahir</label>
                            <div class="col-md-3 col-xs-5">
                                <div  class="input-append date">
                                    <input type="text"
                                    class="form-control"
                                    placeholder="yyyy-MM-dd"
                                    datepicker-popup="yyyy-MM-dd"
                                    ng-model="data.mhs_ttl"
                                    is-open="mulai"
                                    datepicker-options="dateOptions"
                                    ng-required="true"
                                    close-text="Close"
                                    ng-click="mulai = true"
                                    name="mhs_ttl"
                                    size ="16"
                                    required
                                    date-validator readonly
                                    />
                                    <span class="input-group-btn add-on">
                                        <button class="btn btn-danger" type="button" ng-click="open($event)" ><i class="icon-calendar" ></i></button>
                                    </span>
                                </div>
                                <span class="help-block">Pilih Tanggal</span>
                            </div>
                        </div>

                    </fieldset>
                    <fieldset title="Step 2" class="step" id="default-step-1" >
                      <legend> </legend>
                      <div class="form-group">
                          <label class="col-lg-2 control-label">Phone</label>
                          <div class="col-lg-6">
                              <input type="text" ng-model="data.mhs_phone" class="form-control" placeholder="Nomor Telpon">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-7">
                              <input type="email" ng-model="data.mhs_email" class="form-control" placeholder="Alamat Email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 control-label">Address</label>
                          <div class="col-lg-10">
                              <textarea class="form-control" ng-model="data.mhs_alamat" cols="60" rows="5" placeholder="Alamat Rumah"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-7">
                              <input type="password" ng-model="data.mhs_password" class="form-control" placeholder="Password Akun">
                          </div>
                      </div>



                  </fieldset>
                  <fieldset title="Step 3" class="step" id="default-step-2" >
                      <legend> </legend>
                      <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                      <div class="form-group last">
                        <label class="control-label col-md-2">Foto Profil</label>
                        <div class="col-md-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="img/no_image.gif" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                </div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                        <input type="file" class="default" ng-model="data.mhs_photo" />
                                    </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                </div>
                            </div>
                            <span class="label label-danger">NOTE!</span>
                            <span>
                                Besar foto tidak lebih dari 500Kb .
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">NIM</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.nim"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Nama</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_nama"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Jenis Kelamin</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_gender"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Tanggal Lahir</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_ttl | date:'MM/dd/yyyy'"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Alamat</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_alamat"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_email"></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Phone</label>
                      <div class="col-lg-10">
                          <p class="form-control-static" ng-bind="data.mhs_phone"></p>
                      </div>
                  </div>
              </fieldset>
              <button type="submit" ng-click="selesai = false"class="finish btn btn-danger">Finish</button>
          </form>
      </div>
  </section>
</div>
</div>

</section>



</div>
<script>var base_url = "{{url()}}";</script>


<script src="{{asset('js/hmsiapp/angular.min.js')}}"></script>
<script src="{{asset('js/hmsiapp/ui-bootstrap-tpls-0.12.0.min.js')}}"></script>
<script src="{{asset('js/hmsiapp/angular-file-upload.min.js')}}"></script>
<script src="{{asset('js/hmsiapp/angular-file-upload-shim.min.js')}}"></script>
<script src="{{asset('js/hmsiapp/angular-block-ui.min.js')}}"></script>
<script src="{{asset('js/hmsiapp/admin.js')}}"></script>
<script src="{{asset('js/hmsiapp/controller/admin-registration.js')}}"></script>


<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/respond.min.js" ></script>


<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/jquery.stepy.js"></script>


<script src="js/advanced-form-components.js"></script>
<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

<script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Previous',
              block: true,
              nextLabel: 'Next',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>
  <script src="js/form-component.js"></script>

</body>
</html>
