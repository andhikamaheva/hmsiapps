<!DOCTYPE HTML>
<HTML lang="en" ng-app="admin">
	<head>
		<title>Daftar Event HMSI {{ $title }}</title>
		<link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}"
	</head>
	<body ng-controller="eventMahasiswa">
		<h1>Mendaftar Gratis di HMSI apps!</h1>
		<form ng-submit="submit()">
			<label for="nim">Masukkan NIM : </label>
			<input type="text" id="nim" data-toggle="tooltip" data-placement="top" placeholder="Masukkan NIM" name="nim" ng-model="data.nim">
			<br/>
			<label for="angkatan">Angkatan</label>
			<select ng-model="data.angkatan" id="angkatan">
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
			</select>
			<br/>
			<button type="submit"> Daftar Sekarang!</button>
		</form>
		<script>var base_url = "{{url()}}";</script>
		<script src="{{asset('js/hmsiapp/angular.min.js')}}"></script>
		<script src="{{asset('js/hmsiapp/ui-bootstrap-tpls-0.12.0.min.js')}}"></script>
		<script src="{{asset('js/hmsiapp/angular-file-upload.min.js')}}"></script>
		<script src="{{asset('js/hmsiapp/angular-block-ui.min.js')}}"></script>
		<script src="{{asset('js/hmsiapp/admin.js')}}"></script>
		<script src="{{asset('js/hmsiapp/controller/admin-event.js')}}"></script>
	</body>
</HTML>