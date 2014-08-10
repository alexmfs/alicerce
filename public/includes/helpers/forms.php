<section class="hc forms" id="hc-forms">
	<h1 class="hc">Forms</h1>
	<div>
		<h2 class="hc">Máscaras</h2>

		<label for="">Telefone</label>
		<input type="tel" required>
		<label for="">CNPJ</label>
		<input type="text" class="mask-cnpj" required>
		<label for="">CPF</label>
		<input type="text" class="mask-cpf" required>
		<label for="">RG</label>
		<input type="text" class="mask-rg" required>
		<label for="">CEP</label>
		<input type="text" class="mask-cep" required>
	</div>
	<div>
		<h2 class="hc">Sizes</h2>


	<form action="" class="form-padrao">
		<legend>Legenda</legend>
		<label for="">Input genérico</label>
		<input type="text" placeholder="placeholder">
		<label for="">Input obrigatório</label>
		<input type="text" required>
		<label for="">Input genérico desabilitado</label>
		<input type="text" disabled>
		<label for="">E-mail</label>
		<input type="email">
		<label for="">Telefone</label>
		<input type="tel">
		<label for="">Busca</label>
		<input type="search">
		<input type="submit" value="buscar" class="btn success">
		<label for="">Senha <small>(máximo 15 caracteres)</small></label>
		<input type="password" maxlength="15" required>
		<label for="">Range</label>
		<input type="range" min="0" max="100">
		<label for="">Numero</label>
		<input type="number" min="0" max="10" step="1">
		<legend>Legenda dois, mais legenda</legend>
		<label for="">Site</label>
		<input type="url">
		<label for="">Cor</label>
		<input type="color">
		<label for="">Mensagem</label>
		<textarea name="" id="" cols="30" rows="10"></textarea>
		<div class="radio">
			<input id="opcao1" type="radio" name="gender" value="opcao1">
			<label for="opcao1">Opção 1</label>
			<input id="opcao2" type="radio" name="gender" value="opcao2">
			<label for="opcao2">Opção 2</label>
		</div>
		<div class="checkbox">
			<input id="check1" type="checkbox" name="check" value="check1">
			<label for="check1">Checkbox No. 1</label>
			<input id="check2" type="checkbox" name="check" value="check2">
			<label for="check2">Checkbox No. 2</label>
		</div>
		<fieldset>
			<select name="" id="">
				<option value="">opção 1</option>
				<option value="">opção 2</option>
				<option value="">opção 3</option>
				<option value="">opção 4</option>
			</select>
			<div class="select">
				<select name="" id="">
					<option value="">select personalizado opção 1</option>
					<option value="">opção 2</option>
					<option value="">opção 3</option>
					<option value="">opção 4</option>
				</select>
			</div>
		</fieldset>
		<input type="reset" class="danger" value="apagar tudo">
		<input type="submit" class="success" value="enviar">
	</form>


	</div>
</section>