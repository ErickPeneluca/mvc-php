<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuario</a>

<br>
<br>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id']?></td>
        <td><?=$usuario['name']?></td>
        <td><?=$usuario['email']?></td>
        <td>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/edit"> 
                <img src="<?=$base?>/assets/images/document.png" alt="">
         </a>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/excluir">
                <img src="<?=$base?>/assets/images/trash.png" alt="">
            </a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<?php $render('footer'); ?>
