<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retirada do filme</title>
    <link rel="stylesheet" href="./style.scss">
    <link rel="stylesheet" type="text/css" href="style.scss">
</head>

<body>
    <section class="paginaLoja">
    </section>
    <section class="backgroundlistaloja">
    </section>



    <section class="listaloja">
    </section>


    <section class="listafuncoes">
        <div class="cardOpcoes">

            <div class="textoOpcoes">
                <div class="textoFunc">
                    <form action="index.html" method="post"> <input type="submit" value="adicionar cliente e filme" class="buttonLista" <br /> </form>
                    <form action="RetiradaEntrega.html" method="post"> <input type="submit" value="Retirada e entrega de titulos" class="buttonLista" <br /> </form>

                </div>
            </div>
        </div>
    </section>
    <section class="listaADD">
</section>
    <section class="listatabela">
        <?php

        $x = $_POST["IDtitulo"];
        $y = $_POST["IDcliente"];
        $z = $_POST["dataRetira"];
        $w = $_POST["dataDev"];
        $endereço = '';
        $usuario = '';
        $senha = '';
        $bd = '';

        $connect = mysqli_connect($endereço, $usuario, $senha, $bd);

        $qry = "INSERT INTO venda(IDtitulo,IDcliente,dataRetira,dataDev,status, multa) values('$x','$y','$z','$w','locado', ' ')";
        $result = mysqli_query($connect, $qry);

        $qry = "SELECT * FROM venda";
        $result = mysqli_query($connect, $qry);
        $dt = array();
        echo "<table class=tabela>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>  ID venda  </th>";
        echo "<th> ID titulo </th>";
        echo "<th> ID cliente </th>";
        echo "<th> Data Retirada </th>";
        echo "<th> Data Devolução </th>";
        echo "<th> Status </th>";
        echo "<th> Multa </th>";
        echo "</tr>";
        echo "</thead>";
        while ($answer = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            $dt[0] = $answer['ID'];
            $dt[1] = $answer['IDtitulo'];
            $dt[2] = $answer['IDcliente'];
            $dt[3] = $answer['dataRetira'];
            $dt[4] = $answer['dataDev'];
            $dt[5] = $answer['status'];
            $dt[6] = $answer['multa'];
            $string1 = ($dt[0]);
            $string2 = ($dt[1]);
            $string3 = ($dt[2]);
            $string4 = ($dt[3]);
            $string5 = ($dt[4]);
            $string6 = ($dt[5]);
            $string7 = ($dt[6]);

            echo "<tr>";
            echo "<td>$string1 </td>";
            echo "<td>$string2</td>";
            echo "<td>$string3</td>";
            echo "<td>$string4</td>";
            echo "<td>$string5</td>";
            echo "<td>$string6</td>";
            echo "<td>$string7</td>";
            echo "</tr>";
            print "<p/>";
        }
        mysqli_free_result($result);
        mysqli_close($connect);
        ?>



    </section>

</body>

</html>
