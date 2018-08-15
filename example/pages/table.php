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

});

$(document).ready(function(){
    
    $('.table').bind('scroll', function(){
        var pos = $(this).scrollLeft();

        if(pos > 0) {
            $('.table tr td:first-child, .table tr th:first-child').addClass('separador');
            
        } else {
            $('.table tr td:first-child, .table tr th:first-child').removeClass('separador');
        }

    });
     
	
});

</script>

<style>

	/* Corrigir no less */

	.table td:first-child, .table th:first-child {
		padding-left: 0;
	}
	.table td, .table th{
		padding: 20px;
	}

	.table td.separador:after, .table th.separador:after {
		content: "";
		display: block;
		width: 12px;
		height: 100%;
		background-image: linear-gradient(to right, #f7f7f7, transparent);
		right: -10px;
		top: 0;
		position: absolute;
		z-index: 10;
	}

	.table td:first-child, .table th:first-child {
		position: sticky;
		background: #fff;
		z-index: 10;
		left: 0;
	}

.table{
    display: block;
    white-space: nowrap;
    width: 100%;
    overflow-x: scroll;
    padding-bottom: 15px;    
}


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




<section class="card" ng-app="sortApp" ng-controller="mainController">
	<h2 class="title">Tabelas</h2>
	<h3 class="subtitle">Comum com filtro</h3>

	<nav class="tabs-nav">
		Templates
		<br /><br />
		<a ng-click="layout=1" ng-class="{'active' : layout==1}">1</a>
		<a ng-click="layout=2" ng-class="{'active' : layout==2}">2</a>
	</nav>

	<div class="container"  ng-init="layout=1">
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
						<input id="filterCpf" type="checkbox" ng-model="filterCpf">
						<label for="filterCpf">CPF</label>
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
					<li class="checkbox">
						<input id="filterColunaA" type="checkbox" ng-model="filterColunaA">
						<label for="filterColunaA">Coluna A</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaB" type="checkbox" ng-model="filterColunaB">
						<label for="filterColunaB">Coluna B</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaC" type="checkbox" ng-model="filterColunaC">
						<label for="filterColunaC">Coluna C</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaD" type="checkbox" ng-model="filterColunaD">
						<label for="filterColunaD">Coluna D</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaE" type="checkbox" ng-model="filterColunaE">
						<label for="filterColunaE">Coluna E</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaF" type="checkbox" ng-model="filterColunaF">
						<label for="filterColunaF">Coluna F</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaG" type="checkbox" ng-model="filterColunaG">
						<label for="filterColunaG">Coluna G</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaH" type="checkbox" ng-model="filterColunaH">
						<label for="filterColunaH">Coluna H</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaI" type="checkbox" ng-model="filterColunaI">
						<label for="filterColunaI">Coluna I</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaJ" type="checkbox" ng-model="filterColunaJ">
						<label for="filterColunaJ">Coluna J</label>
					</li>
					<li class="checkbox">
						<input id="filterColunaK" type="checkbox" ng-model="filterColunaK">
						<label for="filterColunaK">Coluna K</label>
					</li>									
				</ul>
			</div>
		</div>


		<div class="box-input">
			<?php icon('filtrar'); ?>
			<input class="input-control" type="text" placeholder="Digite aqui seu filtro" ng-model="searchPedido">
		</div>

		<table class="table" ng-show="layout == 1">

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
				<th ng-show="filterCpf">
					<a href="#" ng-click="sortType = 'cpf'; sortReverse = !sortReverse">
						Cpf
						<span ng-show="sortType == 'cpf' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'cpf' && sortReverse" class="asc"></span>
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
				<th ng-show="filterColunaA">
					<a href="#" ng-click="sortType = 'colunaA'; sortReverse = !sortReverse">
						Coluna A
						<span ng-show="sortType == 'colunaA' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaA' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaB">
					<a href="#" ng-click="sortType = 'colunaB'; sortReverse = !sortReverse">
						Coluna B
						<span ng-show="sortType == 'colunaB' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaB' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaC">
					<a href="#" ng-click="sortType = 'colunaC'; sortReverse = !sortReverse">
						Coluna C
						<span ng-show="sortType == 'colunaC' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaC' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaD">
					<a href="#" ng-click="sortType = 'colunaD'; sortReverse = !sortReverse">
						Coluna D
						<span ng-show="sortType == 'colunaD' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaD' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaE">
					<a href="#" ng-click="sortType = 'colunaE'; sortReverse = !sortReverse">
						Coluna E
						<span ng-show="sortType == 'colunaE' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaE' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaF">
					<a href="#" ng-click="sortType = 'colunaF'; sortReverse = !sortReverse">
						Coluna F
						<span ng-show="sortType == 'colunaF' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaF' && sortReverse" class="asc"></span>
					</a>
				</th>  
				<th ng-show="filterColunaG">
					<a href="#" ng-click="sortType = 'colunaG'; sortReverse = !sortReverse">
						Coluna G
						<span ng-show="sortType == 'colunaG' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaG' && sortReverse" class="asc"></span>
					</a>
				</th>  
				<th ng-show="filterColunaH">
					<a href="#" ng-click="sortType = 'colunaH'; sortReverse = !sortReverse">
						Coluna H
						<span ng-show="sortType == 'colunaH' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaH' && sortReverse" class="asc"></span>
					</a>
				</th>  
				<th ng-show="filterColunaI">
					<a href="#" ng-click="sortType = 'colunaI'; sortReverse = !sortReverse">
						Coluna I
						<span ng-show="sortType == 'colunaI' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaI' && sortReverse" class="asc"></span>
					</a>
				</th>  
				<th ng-show="filterColunaJ">
					<a href="#" ng-click="sortType = 'colunaJ'; sortReverse = !sortReverse">
						Coluna J
						<span ng-show="sortType == 'colunaJ' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaJ' && sortReverse" class="asc"></span>
					</a>
				</th>
				<th ng-show="filterColunaK">
					<a href="#" ng-click="sortType = 'colunaK'; sortReverse = !sortReverse">
						Coluna K
						<span ng-show="sortType == 'colunaK' && !sortReverse" class="desc"></span>
						<span ng-show="sortType == 'colunaK' && sortReverse" class="asc"></span>
					</a>
				</th>                  
			</tr>

			<tr ng-repeat="pedido in pedidos | orderBy:sortType:sortReverse | filter:searchPedido" ng-if="$index < 10">
				<td>{{ pedido.codigo }}</td>
				<td ng-show="filterCodigoterceiro">{{ pedido.codigoterceiro }}</td>
				<td ng-show="filterPaciente">{{ pedido.paciente }}</td>
				<td ng-show="filterCpf">{{ pedido.cpf }}</td>
				<td ng-show="filterConvenio">{{ pedido.convenio }}</td>
				<td ng-show="filterStatus">{{ pedido.status }}</td>
                <td ng-show="filterDataEntrada">{{ pedido.dataEntrada }}</td>
                <td ng-show="filterColunaA">{{ pedido.colunaA }}</td>
                <td ng-show="filterColunaB">{{ pedido.colunaB }}</td>
                <td ng-show="filterColunaC">{{ pedido.colunaC }}</td>
                <td ng-show="filterColunaD">{{ pedido.colunaD }}</td>
                <td ng-show="filterColunaE">{{ pedido.colunaE }}</td>
                <td ng-show="filterColunaF">{{ pedido.colunaF }}</td>
                <td ng-show="filterColunaG">{{ pedido.colunaG }}</td>
                <td ng-show="filterColunaH">{{ pedido.colunaH }}</td>
                <td ng-show="filterColunaI">{{ pedido.colunaI }}</td>
                <td ng-show="filterColunaJ">{{ pedido.colunaJ }}</td>
                <td ng-show="filterColunaK">{{ pedido.colunaK }}</td>                
			</tr>
			<tr class="search-empty">
				<td>
					Nenhum resultado foi encontrado! <br>
					Experimente a <a href="#">busca avançada.</a>
				</td>
			</tr>

		</table>

		<ul class="table" ng-show="layout == 2">
			<li ng-repeat="pedido in pedidos | orderBy:sortType:sortReverse | filter:searchPedido" ng-if="$index < 10">
				<p>{{ pedido.codigo }}</p>
				<p ng-show="filterCodigoterceiro">{{ pedido.codigoterceiro }}</p>
				<p ng-show="filterPaciente">{{ pedido.paciente }}</p>
				<p ng-show="filterConvenio">{{ pedido.convenio }}</p>
				<p ng-show="filterStatus">{{ pedido.status }}</p>
				<p ng-show="filterDataEntrada">{{ pedido.dataEntrada }}</p>
			</li>
		</ul>

	</div>

</section>
