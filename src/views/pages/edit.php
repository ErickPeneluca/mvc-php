<?php $render('header'); ?>

<h2>Editar Usuario</h2>

<form action="<?=$base?>/usuario/<?=$usuario['id'];?>/editar" method="post">
    <label>
        Nome: 
        <br>
        <input type="text" name="name" value="<?=$usuario['nome'];?>">

    </label>
    <br>
    <br>
    <label>
        Email: <br>
        <input type="email" name="email" value="<?=$usuario['email'];?>">
    </label>
    <br>
    <br>
    <input type="submit" value="Salvar">
</form>

<?php $render('footer'); ?>
