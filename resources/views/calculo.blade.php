@include('padrao.headerUsers')

{{-- {{ dd($calculos) }} --}}

		<section id="sec_planos">
            <h1>Melhor plano para você!</h1>

            @foreach($calculos as $calculo)

                <div class="box_card">
                    <div class="box_azul">
                        <div class="box_preco">
                            <span>Por</span>
                            <span>{{ $calculo['indenizacao'][0]->custoFixo }}</span>
                            <span>,90</span>
                            <span>Mensais</span>
                        </div>
                    </div>

                    <div class="box_indenizacao">
                        <span>Indenizações</span>
                        <ul>

                            @foreach($calculo['indenizacao'] as $indenizacoes)

                            <li>{{ $indenizacoes->descricao }}</li>

                            @endforeach

                        </ul>
                    </div>

                    <div id="box_botao">
                        <button class="botao_cotratar">Contratar</button>
                    </div>
                </div>

            @endforeach

        </section>

	</section>