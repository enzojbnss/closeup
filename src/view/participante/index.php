<<style>
<!--
.jumbotron{
    background-color: white;
    font-stretch: 2px;
}
-->
</style>

<title>Pessoas</title>

<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/select.js"></script>
<script type="text/javascript" src="js/objeto.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/validacao.js"></script>
<script type="text/javascript" src="js/cadastro_pessoas.js"></script>




	<div class="jumbotron" id="tela">
		<form class="form" name="frmPessoa" id="frmPessoa" method="post"
			action="php/cadPessoa.php">
			<div  class="container">
				<h3>Dados Pessoais</h3>
				<div class="form-group">
					<div class="col-md-9">
						<label for="txtNome"> </label> <input name="txtNome"
							type="text" class="form-control" id="txtNome" size="45"
							maxlength="70" placeholder="Nome" /> <input name="txtID" type="hidden" id="txtID"
							size="45"  />
					</div>
					<div class="col-md-3">
						<label for="txtNome"> </label> <input
							id="txtDataNascimento" class="form-control" type="date" />
					</div>
				</div>
				<h3>Endereço</h3>
				<div class="form-group">
					<div class="col-md-3">
						<input name="txtCEP" type="text" class="form-control"
							id="txtCEP" size="15" maxlength="8"  placeholder="Cep"
							onkeypress="return EntradaNumerico(event)" />
					</div>
					<div class="col-md-3">
						<img src="img/lupa.gif" width="20" height="20" id="buscaCEP"
							style="cursor: pointer"></img><i> Ex: 99999999</i><label
							id="loading"></label>
					</div>
					<div class="col-md-6">
						<input name="txtRua" type="text" class="form-control"
							id="txtRua" size="20" maxlength="60" placeholder="Rua" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						 <select name="cboUF" id="cboUF" onchange=""
							class="form-control">
							<option value="">UF</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="GO">Goiás</option>
							<option value="ES">Espírito Santo</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraiba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Rorâima</option>
							<option value="SP">São Paulo</option>
							<option value="SC">Santa Catarina</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
					</div>
					<div class="col-md-3">
						<input name="txtNumero" type="text"
							class="form-control" id="txtNumero" size="5" maxlength="6" placeholder="Número"/>
					</div>
					<div class="col-md-4">
						 <input name="txtComplemento" type="text"
							class="form-control" id="txtComplemento" size="45" maxlength="60" placeholder="Complemento" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<br /> <input name="txtBairro" type="text"
							class="form-control" id="txtBairro" size="45" maxlength="60" placeholder="Bairro" />
					</div>
					<div class="col-md-4">
						<input name="txtCidade" type="text"
							class="form-control" id="txtCidade" size="45" maxlength="60" placeholder="Cidade" />
					</div>

				</div>
				<div>
					<div class="form-group">
						<div class="col-md-8">
							<input name="txtEmail" type="text"
								class="form-control" id="txtEmail" size="50" maxlength="60" placeholder="Email" />
						</div>
						<div class="col-md-2">
							<select name="cboTipo" id="cboTipo" onchange=""
								class="form-control"><option value="">Tipo</option>
								<option value="AC">pessoal</option>
								<option value="AL">profissional</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<input type="button" name="cmdSalvarPessoa" id="cmdSalvarPessoa"
							value="Salvar" class="btn btn-success" />
					</div>
					<div class="col-md-4">
						<input type="reset" name="cmdLimparPessoa" id="cmdLimparPessoa"
							value="Limpar" class="btn btn-danger" />
					</div>
				</div>
			</div>
		</form>
	</div>


<!--
				<table width="800" border="0">
					<tr>
						<td width="170">RG:<br /> <input name="txtRG" type="text"
							class="form-control" id="txtRG" size="25" maxlength="11" /></td>

						<td width="170">CPF:<br /> <input name="txtCPF" type="text"
							class="form-control" id="txtCPF" size="25" maxlength="11" onkeypress="return EntradaNumerico(event)"/></td>

						<td width="446">&nbsp;</td>
					</tr>
				</table>
                -->


<!-- 
				<table class="table">
					<tr>
						<td width="140">Telefone:<br /> <input name="txtFone" type="text"
							class="form-control" id="txtFone" size="20" maxlength="20"
							onkeypress="return FormatoTelefoneComum(txtFone)" /></td>
						<td width="140">Comercial:<br /> <input name="txtComercial"
							type="text" class="form-control" id="txtComercial" size="20"
							maxlength="20"
							onkeypress="return FormatoTelefoneComum(txtComercial)" /></td>
						<td width="506">Celular:<br /> <input name="txtCelular"
							type="text" class="form-control" id="txtCelular" size="15"
							maxlength="20"
							onkeypress="return FormatoCelularComum(txtCelular)" /></td>
					</tr>
				</table>  -->
