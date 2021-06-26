<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loja de Cameras</title>
        <link rel="stylesheet" type="text/css" href="css/Style.css"
    </head>
    <body>
        <a href="listarDados.php">Lista Cameras</a>
        <hr>
        <div id="container">
            <form action="salvarDados.php" method="POST">
                <div id="campo">
                    <select name="fabricante">
                        <option value="">Fabricante</option>
                        <option value="CANON">CANON</option>
                        <option value="FUJI">FUJI</option>
                        <option value="KODAK">KODAK</option>
                        <option value="NIKON">NIKON</option>
                        <option value="OLYMPUS">OLYMPUS</option>
                        <option value="PANASONIC">PANASONIC</option>
                        <option value="PENTAX">PENTAX</option>
                        <option value="SONY">SONY</option>
                    </select>
                </div>

                <div id="campo">
                    <input type="text" name="modelo" placeholder="MODELO">
                </div>

                <div id="campo">
                    <input type="text" name="preco" placeholder="PREÇO">
                </div>

                <div id="campo">
                    <select name="garantia">
                        <option value="">GARANTIA</option>
                        <option value="1">SIM</option>
                        <option value="0">NÃO</option>
                    </select>
                </div>
                <div>
                    <button type="submit">SALVAR</button>
                </div>
            </form>
        </div>



    </body>
</html>
