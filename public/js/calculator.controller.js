/**
 * Created by kaseOga on 12/11/14.
 */

angular.module('xenApp')
    .controller('calculatorCtrl', function($scope, $http) {
        $scope.calcSubmit = function() {
            var data = {
                op1: $scope.calc.op1,
                op2: $scope.calc.op2
            };
            $http({
                    method: 'POST',
                    url: $scope.calc.action,
                    data: data,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                })
                .success(function(data) {
                    $scope.respuesta = data.result;
                });
        };
    });