angular.module('admin').controller('registration', function($scope, $http, $filter, $timeout , baseURL){
	$scope.data = {};
	$scope.alerts = [];
	$scope.closeAlert = function(index){
		$scope.alerts.splice(index, 1);
	};
	$scope.submit = function(){
		$http.post(baseURL.url('registration'), $scope.data).success(function(data){
			if(data.success){
				$scope.alerts.push({type : 'success', msg : 'Data Berhasil Disimpan!'});
				$timeout.alerts(function(){
					$scope.alerts = [];
				}, 2000);
			}
		}).error(function(e){
			var x ;
			for (x in e){
				$scope.alerts.push({'type' : "danger", 'msg' : (e[x][0])});
				$timeout(function(){
					$scope.alerts = [];
				}, 5000);

			}
		});
	};
});