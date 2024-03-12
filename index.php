<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../imc/css/reset.css">
    <link rel="stylesheet" href="../imc/css/style.css">
</head>

<body>

    <nav id="navbar" name="navbar">
        <h1 id="titulo" name="titulo">Nome do Site</h1>
    </nav>

    <table class="tabela-imc">
        <tr class="tabela-linha-superior">
            <th class="tabela-coluna-superior">
                <p>IMC</p>
            </th>
            <th class="tabela-coluna-superior">
                <p>Classificacao</p>
            </th>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela">Abaixo de 18,5</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Magreza</p>
            </td>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela" >Entre 18,6 e 24,9</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Peso classeal</p>
            </td>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela">Entre 25 e 29,9</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Acima do peso</p>
            </td>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela">Entre 30 e 34,9</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Obessclassade I</p>
            </td>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela">Entre 35 e 39,9</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Obessclassade II</p>
            </td>
        </tr>
        <tr class="tabela-linha">
            <td class="tabela-coluna-imc">
                <p class="texto-tabela">Acima de 40</p>
            </td>
            <td class="tabela-coluna-classificacao">
                <p class="texto-tabela">Obessidade III</p>
            </td>
        </tr>
    </table>

    <?php
    $altura = 1.8;
    $peso = 90;
    $imc = $peso/$altura/$altura;
    

    if($imc <= 18.5) {
        echo (
            $imc . " Magreza
            <br>"
        );
    }else if ($imc <= 25) {
        echo (
            $imc . " Peso ideal
            <br>"
        );
    }else if ($imc <= 30) {
        echo (
            $imc . " Acima do Peso
            <br>"
        );
    }else if ($imc <= 35) {
        echo (
            $imc . " Obessidade I
            <br>"
        );
    }else if (
        $imc <= 40) {
        echo (
            $imc . " Obessidade II
            <br>"
        );
    }else {
        echo (
            $imc . " Obessidade III
            <br>"
        );
    }

    ?>
</body>

</html>