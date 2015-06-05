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
});
