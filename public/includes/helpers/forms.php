<section class="wrap">
	<header class="">
		<h1 class="title">Forms</h1>
	</header>
	<form action="#" method="post">
		<div>
			<label for="">Telefone</label>
			<input type="tel" required>
		</div>
		<div>
			<label for="">CNPJ</label>
			<input type="text" class="mask-cnpj" required>
		</div>
		<div>
			<label for="">CPF</label>
			<input type="text" class="mask-cpf" required>
		</div>
		<div>
			<label for="">RG</label>
			<input type="text" class="mask-rg" required>
		</div>
		<div>
			<label for="">CEP</label>
			<input type="text" class="mask-cep" required>
		</div>
	</form>
	<form action="" class="">
		<legend>Legenda</legend>
		<div>
			<label for="">Input genérico</label>
			<input type="text" placeholder="placeholder">
		</div>
		<div>
			<label for="">Input obrigatório</label>
			<input type="text" required>
		</div>
		<div>
			<label for="">Input genérico desabilitado</label>
			<input type="text" disabled>
		</div>
		<div>
			<label for="">E-mail</label>
			<input type="email">
		</div>
		<div>
			<label for="">Telefone</label>
			<input type="tel">
		</div>
		<div>
			<label for="">Busca</label>
			<input type="search">
		</div>
		<div>
			<input type="submit" value="buscar" class="success">
		</div>
		<div>
			<label for="">Senha <small>(máximo 15 caracteres)</small></label>
			<input type="password" maxlength="15" required>
		</div>
		<div>
			<label for="">Range</label>
			<input type="range" min="0" max="100" value="0" step="10">
		</div>
		<div>
			<label for="">Numero</label>
			<input type="number" min="0" max="10" step="1">
		</div>
		<div>
			<legend>Legenda dois, mais legenda</legend>
			<label for="">Site</label>
			<input type="url">
		</div>
		<div>
			<label for="">Cor</label>
			<input type="color">
		</div>
		<div>
			<label for="">Mensagem</label>
			<textarea name="" id="" cols="30" rows="10"></textarea>
			<div class="radio">
				<input id="opcao1" type="radio" name="gender" value="opcao1">
				<label for="opcao1">Opção 1</label>
				<input id="opcao2" type="radio" name="gender" value="opcao2">
				<label for="opcao2">Opção 2</label>
			</div>
		</div>
		<div>
			<div class="checkbox">
				<input id="check1" type="checkbox" name="check" value="check1">
				<label for="check1">Checkbox No. 1</label>
				<input id="check2" type="checkbox" name="check" value="check2">
				<label for="check2">Checkbox No. 2</label>
			</div>
		</div>
		<fieldset>
			<div>
				<select name="" id="">
					<option value="">opção 1</option>
					<option value="">opção 2</option>
					<option value="">opção 3</option>
					<option value="">opção 4</option>
				</select>
			</div>
			<div>
				<div class="select">
					<select name="" id="">
						<option value="">select personalizado opção 1</option>
						<option value="">opção 2</option>
						<option value="">opção 3</option>
						<option value="">opção 4</option>
					</select>
				</div>
			</div>
		</fieldset>
		<div>
			<input type="reset" class="danger" value="apagar tudo">
			<input type="submit" class="success" value="enviar">
		</div>
	</form>
</section>
