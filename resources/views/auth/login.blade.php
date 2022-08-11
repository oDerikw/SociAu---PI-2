<link href="../css/style.css" rel="stylesheet" />
<link href="../css/responsive.css" rel="stylesheet" />
<br><br><br>
<form name="formAdd" id="formAdd" method="POST" action="{{ route('login') }}">
    @csrf
    @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <h2>LOGIN</h2>
    <p type="Nome"><input type="text" name="name" id="name" ></p>
        
    <p type="Senha"><input type="password" name="password" id="password" ></p>
    <br>

    <input type="submit" value="Entrar">
</form>