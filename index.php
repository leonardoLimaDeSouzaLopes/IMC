<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../IMC/css/reset.css">
    <link rel="stylesheet" href="../IMC/css/style.css">
</head>

<body>
    <nav id="navbar" name="navbar">
        <h1 id="titulo-nav" name="titulo-nav">Calculadora de IMC</h1>
    </nav>

    <container id="container-o-que-e-imc" name="container-o-que-e-imc">

        <p class="texto-o-que-e-imc">O Índice de Massa Corporal (IMC) é uma medida universal adotada pela Organização Mundial de Saúde para avaliar se uma pessoa está dentro do peso considerado ideal para sua altura. Esse cálculo simples é utilizado por profissionais de saúde, como médicos, nutricionistas e enfermeiros, para determinar rapidamente se alguém está com o peso adequado ou se precisa ganhar ou perder peso.
            A fórmula para calcular o IMC é a seguinte:</p>

        <img id="formula-imc" src="../IMC/images/IMC_Formula.png">

        <p class="texto-o-que-e-imc">Essa Tabela mostra os resultados para os valores do IMC:</p>

    </container>

    <table id="tabela-imc">
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
                <p class="texto-tabela">Entre 18,6 e 24,9</p>
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

    <container id="container-seu-imc">

        <h3 class="titulo-seu-imc">Agora Veja Seu IMC:</h3>

        <?php
        $altura = 1.8;
        $peso = 70;
        $imc = $peso / $altura / $altura;

        echo ("<div id='caixa-seu-imc' name='caixa-seu-imc'><p class='texto-seu-imc-altura'>Altura: " . $altura . " m </p>
        <p class='texto-seu-imc-peso'>Peso: " . $peso . " kg </p>
        <p class='texto-seu-imc'>IMC: ");

        if ($imc <= 18.5) {
            echo ($imc . " Magreza"
            );
        } else if ($imc <= 25) {
            echo ($imc . " Peso ideal"
            );
        } else if ($imc <= 30) {
            echo ($imc . " Acima do Peso"
            );
        } else if ($imc <= 35) {
            echo ($imc . " Obessidade I"
            );
        } else if (
            $imc <= 40
        ) {
            echo ($imc . " Obessidade II"
            );
        } else {
            echo ($imc . " Obessidade III"
            );
        }

        echo ("</p></div>")

        ?>
    </container>

    <footer id="footer" name="footer">
        <p id="donos" name="donos">@Leonardo Lopes e Tiago</p>
    </footer>
</body>

</html>