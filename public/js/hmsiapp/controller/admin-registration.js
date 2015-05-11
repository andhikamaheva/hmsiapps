/*angular.module('admin').controller('registration', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    //$scope.jk = [{'id': 'L', 'label': 'Laki Laki'}, {'id': 'P', 'label': 'Perempuan'}];
    //$scope.status = [{'id': 'guru', 'label': 'Guru'}, {'id': 'pegawai', 'label': 'Pegawai'}, {'id': 'admin', 'label': 'Admin'}];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    $scope.submit = function() {
    	
        $http.post(baseURL.url('registration'), $scope.data).success(function(data) {
            if (data.success) {
                $scope.alerts.push({type: 'success', msg: 'Data berhasil di simpan. Tunggu sebentar...'});
                $timeout(function() {
                    window.location.replace(baseURL.url('admin/pegawai'));
                },3000);
            }
        }).error(function(e) {
            var x;
            for (x in e) {
                $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
            }
            $timeout(function() {
                $scope.alerts = [];
            }, 5000);
        });
    }
});*/
angular.module('admin').controller('registration', function($scope, $http, $filter, $timeout, baseURL) {
	$scope.data = {};
	$scope.alerts = [];
	$scope.closeAlert = function(index) {
		$scope.alerts.splice(index, 1);
	};
	$scope.mulai = false;
	$scope.open = function($event) {
		$event.preventDefault();
		$event.stopPropagation();
		$scope.mulai = true;
	};

	$scope.dateOptions = {
		formatYear: 'yy',
		startingDay: 1
	};

	var id = $filter('_uriseg')(6);
	$http.get(baseURL.url('api/agenda/') + id).success(function(data) {
		$scope.data = data;
	})
	$scope.submit = function(id) {
		$scope.data['isi'] = CKEDITOR.instances.isi.getData();
		$scope.data['keterangan'] = CKEDITOR.instances.keterangan.getData();
		$http.put(baseURL.url('admin/agenda/') + id, $scope.data).success(function(data) {
			if (data.success) {
				$scope.alerts.push({type: 'success', msg: 'Data berhasil di perbarui. Tunggu sebentar...'});
				$timeout(function() {
					window.location.replace(baseURL.url('admin/agenda'));
				}, 3000);
			}
		}).error(function(e,status) {
			if (status === 422) {
				var x;
				for (x in e) {
					$scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
				}
				$timeout(function() {
					$scope.alerts = [];
				}, 5000);
			}
		});
	}
});