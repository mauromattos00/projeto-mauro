<h4>Autenticação</h4>

<?php
if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case 1:
            echo '<p class="error">Todos os campos devem ser preenchidos!</p>';
            break;
		case 2:
            echo '<p class="error">E-mail e/ou senha inválidos!</p>';
            break;
    }
}
?>

<form action="php/login.php" method="post">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" />

    <label for="senha">Senha</label>
    <input type="password" id="senha" maxlength="15" name="senha" />
	
	<div id="manterLogado">
		<input type="checkbox" name="manterLogado" id="manterLogado" value="1" />
		<label for="manterLogado">Manter logado</label>
	</div>

    <input type="submit" value="Entrar" />
</form>