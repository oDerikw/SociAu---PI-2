<link href="../css/style.css" rel="stylesheet" />
<link href="../css/responsive.css" rel="stylesheet" />
<br><br><br>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form name="formAdd" id="formAdd" method="post" action="">
    @csrf
    <h2>CADASTRAR QUESTÃO</h2>
    <p type="Categoria"><input type="text" name="cpf" id="cpf" ></p>
        
    <p type="Pergunta"><input type="text" name="cpf" id="cpf" ></p>

    <p type="Explicação Errada"><input type="text" name="cpf" id="cpf" ></p>

    <p type="Imagem"><input type="text" name="cpf" id="cpf" ></p>

    <p type="Alternativa:"><input type="text" name="title" id="title"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name=corretude checked="checked">
        <span class="checkmark"></span>
    </label>
        
    <p type="Alternativa"><input type="text" name="cpf" id="cpf" ></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name=corretude checked="checked">
        <span class="checkmark"></span>
    </label>

    <p type="Alternativa:"><input type="text" name="title" id="title"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name=corretude checked="checked">
        <span class="checkmark"></span>
    </label>
        
    <p type="Alternativa:"><input type="text" name="title" id="title"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name=corretude checked="checked">
        <span class="checkmark"></span>
    </label>

    <p type="Alternativa:"><input type="text" name="title" id="title"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name=corretude checked="checked">
        <span class="checkmark"></span>
    </label>
    <br>

    <button type="submit"></button>
    </form>


