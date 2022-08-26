<link href="../css/style.css" rel="stylesheet" />
<link href="../css/responsive.css" rel="stylesheet" />
<br><br><br>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form name="formAdd" id="formAdd" method="post" action="{{ route('questionRegister') }}">
    @csrf
    <h2>CADASTRAR QUESTÃO</h2>
    <p type="Categoria"><input type="text" name="category" id="category" ></p>
        
    <p type="Pergunta"><input type="text" name="question" id="question" ></p>

    <p type="Explicação Errada"><input type="text" name="explanation" id="explanation" ></p>

    <p type="Imagem"><input type="text" name="image" id="image" ></p>
    <p type="Alternativa:"><input type="text" name="alt1" id="alt1"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name="isCorrect1" checked="checked" value="1">
        <span class="checkmark"></span>
    </label>
        
    <p type="Alternativa"><input type="text" name="alt2" id="alt2"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name="isCorrect2" checked="checked" value="1">
        <span class="checkmark"></span>
    </label>

    <p type="Alternativa:"><input type="text" name="alt3" id="alt3"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name="isCorrect3" checked="checked" value="1">
        <span class="checkmark"></span>
    </label>
        
    <p type="Alternativa:"><input type="text" name="alt4" id="alt4"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name="isCorrect4" checked="checked" value="1">
        <span class="checkmark"></span>
    </label>

    <p type="Alternativa:"><input type="text" name="alt5" id="alt5"></p>
    <br>
    <label class="corretude">Correta<br>
        <input type="checkbox" name="isCorrect5" checked="checked" value="1">
        <span class="checkmark"></span>
    </label>
    <br>

    <button type="submit"></button>
    </form>


