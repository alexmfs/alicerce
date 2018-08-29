<script>
	angular.module('sortApp', [])

		.controller('mainController', function($scope, $http) {
			$scope.sortType     = 'codigo'; // set the default sort type
			$scope.sortReverse  = false;  // set the default sort order
			$scope.searchPedido   = '';     // set the default search/filter term

			// loop pedidos
			$scope.pedidos = [
				<?php include 'pedidos.json'; ?>
			];

			$scope.filterCodigoterceiro = false;
			$scope.filterPaciente = true;
			$scope.filterCpf = true;
			$scope.filterConvenio = true;
			$scope.filterStatus = true;
			$scope.filterDataEntrada = true;
			$scope.filterColunaA = true;
			$scope.filterColunaB = true;
			$scope.filterColunaC = true;
			$scope.filterColunaD = true;
			$scope.filterColunaE = true;
			$scope.filterColunaF = true;
			$scope.filterColunaG = true;
			$scope.filterColunaH = true;
			$scope.filterColunaI = true;
			$scope.filterColunaJ = true;
			$scope.filterColunaK = true;

            $scope.campoNome = true;
            $scope.campoCRM = true;
            $scope.campoRG = true;
            $scope.campoCPF = true;			

	});
</script>