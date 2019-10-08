<form method="POST" action="#">
<legend>Dados Cadastrais</legend>
<br>
<div class='form-group col-md-6'>
	<label>Nome: </label>
	<input type='text' name='txtUser' class='form-control' maxlength='100' required>
</div>
<div class='form-group col-md-6'>
	<label>CPF: </label>
	<input required type='text' name='txtCpf' class='form-control' minlength='11' maxlength='11'>
</div>			
<div class='form-group col-md-6'>										
	<label>Telefone: </label>
	<input required type='text' name='txtTel' class='form-control' maxlength="14" placeholder='(11) 90000-0000'>
</div>
<div class='form-group col-md-6'>										
	<label>Área de atuação: </label>
	<br>
	<select name='cboZona' required>
		<option value='1'>
			ZONA SUL - Santo Amaro
		</option>
		<option value='2'>
			ZONA SUL - Socorro
		</option>
	</select>
</div>
<div class='form-group col-md-10'>
	<label>E-Mail: </label>
	<input required type='text' name='txtEmail' maxlength='60' class='form-control' required>
</div>

<div class='form-group col-md-10'>
	<label>Cofirmar E-Mail: </label>
	<input required type='text' name='txtCemail' maxlength='60' class='form-control' required>
</div>
<div class='form-group col-md-3'>
	<label>Senha: </label>
	<input required type='password' name='txtSenha' minlength='5' maxlength='16' class='form-control'>
</div>
<div class='form-group col-md-3'>
	<label>Confirmar Senha: </label>
	<input required type='password' name='txtCsenha' minlength='5' maxlength='16' class='form-control'>
</div>
<div class='col-sm-8'>
	<button class='btn btn-success' name='btnCadastrar'> Cadastrar </button>
</div>
</form>