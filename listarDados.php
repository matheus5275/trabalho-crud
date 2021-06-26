<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php">Cadastrar</a>
        <hr>
        <?php
        include_once'./Conexao.php';
        $con = new Conexao();
        $sql = "SELECT *FROM Cameras";
        $result = $con->PDO->query($sql);
        ?>
        <table border="1" width="70%" align="center">
            <thead>
            <th>Código</th>
            <th>Modelo</th>
            <th>Fabricante</th>
            <th>Preço</th>
            <th>Garantia</th>
            </thead>
            <tbody>
                <?php while($camera = $result->fetch(PDO::FETCH_ASSOC)){?>
                <tr>
                <td><?php echo $camera['codigo'];?></td>
                <td><?php echo $camera['modelo'];?></td>
                <td><?php echo $camera['fabricante'];?></td>
                <td><?php echo $camera['preco'];?></td>
                <td><?php echo $camera['garantia'];?></td>
                <td></td>
                <td></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>
