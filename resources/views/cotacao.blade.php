@include('padrao.headerUsers')

<script src="{{ asset('assets/jquery-mask/jquery.mask.js') }}"></script> 
<script src="{{ asset('assets/js/cotacao.js') }}"></script> 
		
		<div id="formulario">
            <h1>Realizar Cotação:</h1>
            
			<div id="form">
				<form method="POST" action="{{ route('calculo') }}">

                    <div class="box_field_form">
                        <label class="label_float">CPF</label>
                        <input type="text" name="cpf" class="field_form cpf">
                    </div>

                    <div class="box_field_form">
                        <label class="label_float">Nome</label>
                        <input type="text" id="field_nome" name="nome" class="field_form">
                    </div>

                    <div class="box_field_form">
                        <label class="label_float">Sobrenome</label>
                        <input type="text" id="field_sobrenome" name="sobrenome" class="field_form">
                    </div>

                    <div class="row">
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Nascimento</label>
                                <input type="text" id="field_nascimento" name="data_nascimento" class="field_form">
                            </div>
                        </div>
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Sexo</label>
                                <select class="field_form" name="sexo" id="field_sexo">
                                    <option value=""></option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Profissão</label>
                                <input type="text" name="profissao" class="field_form">
                            </div>
                        </div>
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Renda</label>
                                <input type="text" name="renda" class="field_form renda">
                            </div>
                        </div>
                    </div>

                    <div class="box_field_form">
                        <label class="label_float">CEP</label>
                        <input type="text" name="cep" class="field_form cep">
                    </div>

                    <div class="box_field_form">
                        <label class="label_float">Endereço</label>
                        <input type="text" name="logradouro" id="field_endereco" class="field_form">
                    </div>

                    <div class="row">
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Número</label>
                                <input type="text" name="numero" id="field_numero" class="field_form">
                            </div>
                        </div>
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Complemento</label>
                                <input type="text" name="complemento" class="field_form">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">Estado</label>
                                <input type="text" name="estado" id="field_estado" class="field_form">
                            </div>
                        </div>
                        <div class="col_2">
                            <div class="box_field_form">
                                <label class="label_float">cidade</label>
                                <input type="text" name="cidade" id="field_cidade" class="field_form">
                            </div>
                        </div>
                    </div>

                    <div id="btn">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>Salvar</button>
                    </div>

                </form>
			</div>
		</div>
	</section>
</body>
</html>