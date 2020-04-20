@include('padrao/header')

<section id="sec_login">
    <div class="barra_menu">
        
    </div>

    <div class="container_login">   

        <h2 class="titulo_principal">Olá! Para continuar, realize a autenticação</h2>

        <form action="{{ route('autenticacao') }}" method="POST">

            <div class="box_field_form">
                <label class="label_float">E-mail</label>
                <input type="text" name="email" class="field_form">
            </div>
            
            <div class="box_field_form">
                <label class="label_float">Senha</label>
                <input type="password" name="password" class="field_form">
            </div>
    
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn primario">Entrar</button>
            <a href="{{ route('cadastrar') }}" class="btn link">Criar conta</a>
        </form>
    </div>
</section>

@include('padrao/footer')