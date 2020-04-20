@include('padrao.headerUsers')

<script src="{{ asset('assets/jquery-mask/jquery.mask.js') }}"></script> 
<script src="{{ asset('assets/js/localidade.js') }}"></script> 

{{-- {{ dd($coberturas) }} --}}
		
		<div id="formulario">
            <section id="sec_localidade">   
                <h1>Buscar melhores locais:</h1>

                <div class="box_field_form">
                    <label class="label_float">Coberturas</label>
                    <select class="field_form" name="cobertura" id="field_cobertura">
                        <option value=""></option>
                        
                        @foreach($coberturas as $cobertura)
                            <option value="{{ $cobertura->id }}"> {{ $cobertura->cobertura }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="box_field_form">
                    <label class="label_float">Estado</label>
                    <select class="field_form" name="estado" id="field_estado">
                        <option value=""></option>
                        
                        @foreach($estados as $estado)
                            <option value="{{ $estado->id }}"> {{ $estado->estado }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="box_field_form">
                    <label class="label_float">Cidade</label>
                    <select class="field_form" name="cidade" id="field_cidade">
                        <option value=""></option>
                    </select>
                </div>

                <div class="box_resultado" style="display:none;">
                    <h1>Resultados: </h1>

                    <div class="linha"> 
                        <div class="col_2">
                            <div class="box_resultado_card">
                                <span>Idade Média <small id="lable_idade">35 anos</small></span>
                            </div>
                        </div>
    
                        <div class="col_2">
                            <div class="box_resultado_card">
                                <span>Prêmio Médio <small id="lable_premio">R$ 1.500,00</small></span>
                            </div>
                        </div>
                    </div>

                    <div class="linha"> 
                        <div class="col_2">
                            <div class="box_resultado_card">
                                <span>Nº Segurados <small id="label_numero_segurado">150</small></span>
                            </div>
                        </div>
    
                        <div class="col_2">
                            <div class="box_resultado_card">
                                <span>Renovações <small id="label_renovacao">3</small></span>
                            </div>
                        </div>
                    </div>

                    <div class="box_map" id="box_map">
                        <img src="" class="img_map">
                    </div>
                </div>

            </section>
            
			
		</div>
	</section>
</body>
</html>