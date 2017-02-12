/* Setup general page controller */
angular.module('MetronicApp').controller('UserProfileController', [
    '$rootScope', '$scope',
    function($rootScope, $scope) {
        var vm = this;
        vm.model = $scope.userProfile;
        console.log(vm.model);
        $scope.$on('$viewContentLoaded', function() {
            // initialize core components
            App.initAjax();
        });
    }
]);
