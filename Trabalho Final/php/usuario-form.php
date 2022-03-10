<form action="usuario-salva.php" method = "post">
    <input type="hidden" name="usuario" value="<?=$usuario?>">
    <p>Nome:<input type="text" name="nome" size="40" value="<?=$nome?>"></p>
    <p>Email<input type="text" name="email" size="40" value="<?=$email?>"></p>
    <p>Senha<input type="text" name="senha" size="40" value="<?=$senha?>"></p>
    <p>Antiga Senha<input type="text" name="antigasenha" size="40" value="<?=$antigasenha?>"></p>
</form>