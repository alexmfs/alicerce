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
		$scope.filterConvenio = true;
		$scope.filterStatus = true;
		$scope.filterDataEntrada = true;

});
</script>

<style>

.menu-contextual {
    float: right;
}

.droplist {
    position: absolute;
    padding: 30px 30px 10px;
    width: auto;
    white-space: nowrap;
    right: 0;
    z-index: 8000;
    background: #fff;
    opacity: 0;
    visibility: hidden;
    transition: 0.2s;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.22);
    border-radius: .3em;
    box-sizing: border-box;
    top: 30px;
    transition: .2s;
}

.dropdown{
	cursor: pointer;
}

.dropdown:before {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.menu-contextual .dropdown:before {
    content: "\f142";
}

.droplist.open {
    opacity: 1;
    visibility: visible;
}

.menu-contextual li {
    margin-bottom: 15px;
    font-size: 1.4rem;
}

.menu-contextual .dropdown {
    color: green;
    font-size: 1.6rem;
}

.menu-contextual .dropdown{
    border-radius: .3em .3em 0 0;
    box-sizing: border-box;
    padding: 15px 22px 5px 22px;
    z-index: 9000;
    position: relative;
    background: #fff;
    display: block;
    position: absolute;
    right: 0px;
    top: -6px;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0);
    transition: .2s;
}

.menu-contextual .dropdown:after {
    content: "";
    display: block;
    position: absolute;
    width: 58px;
    height: 6px;
    background: #fff;
	right: 0px;
	bottom: -4px;
}

.menu-contextual .dropdown.open {
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.22);
}

</style>


<section class="card">
	<h2 class="title">Tabelas</h2>
	<h3 class="subtitle">Comum com filtro</h3>

	<div class="container" ng-app="sortApp" ng-controller="mainController">

		<div class="card-header">
			<h4 class="card-title">Pedidos recentes</h4>
			<div class="menu-contextual">
				<span class="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
				<ul class="droplist">
					<li class="checkbox">
						<input id="filterCodigoterceiro" type="checkbox" ng-model="filterCodigoterceiro">
						<label for="filterCodigoterceiro">Codigo de terceiros</label>
					</li>
					<li class="checkbox">
						<input id="filterPaciente" type="checkbox" ng-model="filterPaciente">
						<label for="filterPaciente">Paciente</label>
					</li>
					<li class="checkbox">
						<input id="filterConvenio" type="checkbox" ng-model="filterConvenio">
						<label for="filterConvenio">Convenio</label>
					</li>
					<li class="checkbox">
						<input id="filterStatus" type="checkbox" ng-model="filterStatus">
						<label for="filterStatus">Status</label>
					</li>
					<li class="checkbox">
						<input id="filterDataEntrada" type="checkbox" ng-model="filterDataEntrada">
						<label for="filterDataEntrada">Data entrada</label>
					</li>

				</ul>
			</div>
		</div>


		<div class="box-input">
			<?php icon('filtrar'); ?>
			<input class="input-control" type="text" placeholder="Digite aqui seu filtro" ng-model="searchPedido">
		</div>

		<table class="table">

			<tr>
				<th>
					<a href="#" ng-click="sortType = 'codigo'; sortReverse = !sortReverse">
						Código
						<span ng-show="sortType == 'codigo' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'codigo' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterCodigoterceiro">
					<a href="#" ng-click="sortType = 'codigoterceiro'; sortReverse = !sortReverse">
						Cod. Terceiro
						<span ng-show="sortType == 'codigoterceiro' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'codigoterceiro' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterPaciente">
					<a href="#" ng-click="sortType = 'paciente'; sortReverse = !sortReverse">
						Paciente
						<span ng-show="sortType == 'paciente' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'paciente' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterConvenio">
					<a href="#" ng-click="sortType = 'convenio'; sortReverse = !sortReverse">
						Convênio
						<span ng-show="sortType == 'convenio' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'convenio' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterStatus">
					<a href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse">
						Status
						<span ng-show="sortType == 'status' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'status' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterDataEntrada">
					<a href="#" ng-click="sortType = 'dataEntrada'; sortReverse = !sortReverse">
						Data de entrada
						<span ng-show="sortType == 'dataEntrada' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'dataEntrada' && sortReverse" class="asc"></span>
					</a>
				</th>
			</tr>

			<tr ng-repeat="pedido in pedidos | orderBy:sortType:sortReverse | filter:searchPedido" ng-if="$index < 10">
				<td>{{ pedido.codigo }}</td>
				<td ng-show="filterCodigoterceiro">{{ pedido.codigoterceiro }}</td>
				<td ng-show="filterPaciente">{{ pedido.paciente }}</td>
				<td ng-show="filterConvenio">{{ pedido.convenio }}</td>
				<td ng-show="filterStatus">{{ pedido.status }}</td>
				<td ng-show="filterDataEntrada">{{ pedido.dataEntrada }}</td>
			</tr>
			<tr class="search-empty">
				<td>
					Nenhum resultado foi encontrado! <br>
					Experimente a <a href="#">busca avançada.</a>
				</td>
			</tr>

		</table>

	</div>

</section>
