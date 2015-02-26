<?php
var_dump($usuarios);
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($usuarios as $usuario) {
            ?>
            <tr>
                <td><?= $usuario['Usuario']['nombre'] ?></td>
                <td><?= $usuario['Rol']['nombre'] ?></td>


            </tr>
            <?php
        }
        ?>
    </tbody>
</table>