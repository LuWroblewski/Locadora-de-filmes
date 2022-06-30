<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo adicionado</title>
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

        $x = $_POST["titulo"];
        $y = $_POST["duracao"];
        $z = $_POST["dataLanca"];
        $endereço = '';
        $usuario = '';
        $senha = '';
        $bd = '';

        $connect = mysqli_connect($endereço, $usuario, $senha, $bd);

        $qry = "INSERT INTO titulo(titulo,duracao,dataLanca) values('$x','$y','$z')";
        $result = mysqli_query($connect, $qry);

        $qry = "SELECT * FROM titulo";
        $result = mysqli_query($connect, $qry);
        $dt = array();
        echo "<table class=tabela>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>  ID  </th>";
        echo "<th> Titulo </th>";
        echo "<th> Duração </th>";
        echo "<th> Data Lançamento </th>";
        echo "</tr>";
        echo "</thead>";
        while ($answer = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            $dt[0] = $answer['ID'];
            $dt[1] = $answer['titulo'];
            $dt[2] = $answer['duracao'];
            $dt[3] = $answer['dataLanca'];
            $string1 = ($dt[0]);
            $string2 = ($dt[1]);
            $string3 = ($dt[2]);
            $string4 = ($dt[3]);
            echo "<tr>";
            echo "<td>$string1 </td>";
            echo "<td>$string2</td>";
            echo "<td>$string3</td>";
            echo "<td>$string4</td>";
            echo "</tr>";
            print "<p/>";
        }
        mysqli_free_result($result);
        mysqli_close($connect);
        ?>


    </section>

</body>

</html>
