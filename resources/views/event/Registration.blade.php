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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body" ng-controller="registration" >

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

    </div> -->

<div class="container">



          <section class="wrapper site-min-height">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1>{{ $title }}</h1>
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
                              <form class="form-horizontal" id="default" ng-submit="submit()">
                                  <fieldset title="Step1" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Angkatan</label>
                                          <div class="col-lg-3">
                                              <select class="form-control input-md m-bot15" ng-model="data.angkatan">
                                                  <option value="08">2008</option>
                                                  <option value="09">2009</option>
                                                  <option value="10">2010</option>
                                                  <option value="11">2011</option>
                                                  <option value="12">2012</option>
                                              </select>
                                          </div>
                                          <label class="col-lg-2 control-label">Program Studi</label>
                                          <div class="col-lg-3">
                                          <select class="form-control input-md m-bot15" ng-model="data.prodi">
                                                  <option value="41010">Sistem Informasi</option>
                                                  <option value="41011">Sistem Informasi Akuntansi</option>
                                              </select>
                                            </div>
                                      </div>
                                      <div class="form-group" >
                                          <label class="col-lg-2 control-label">NIM</label>
                                          <div class="input-group col-lg-5">
                                                <span class="input-group-addon" ng-bind="data.angkatan + data.prodi"></span>
                                              <input type="text" value="a" ng-model="data.nim" class="form-control" placeholder="4 Digit Berikutnya" reqiured>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" placeholder="Email Address">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">User Name</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" placeholder="Username">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Step 2" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Phone</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" placeholder="Phone">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Mobile</label>
                                          <div class="col-lg-10">
                                              <input type="text" class="form-control" placeholder="Mobile">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Address</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" cols="60" rows="5"></textarea>
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="Step 3" class="step" id="default-step-2" >
                                      <legend> </legend>
                                       <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">NIM</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static" ng-bind="data.nim"></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">tawseef@vectorlab.com</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">User Name</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">tawseef</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Phone</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">01234567</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Mobile</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">01234567</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Address</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">
                                                  Dreamland Ave, Suite 73
                                                  AU, PC 1361
                                                  P: (123) 456-7891 </p>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <button type="submit" class="finish btn btn-danger">Finish</button>
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
    <script src="{{asset('js/hmsiapp/angular-block-ui.min.js')}}"></script>
    <script src="{{asset('js/hmsiapp/admin.js')}}"></script>
    <script src="{{asset('js/hmsiapp/controller/admin-registration.js')}}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/respond.min.js') }}" ></script>


    <!--common script for all pages-->
    <script src="{{ asset('js/common-scripts.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('js/jquery.stepy.js') }}"></script>


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


  </body>
</html>
