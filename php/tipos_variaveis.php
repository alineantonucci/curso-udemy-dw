<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Variáveis</title>
    </head>

    <body>

        <?php
            //int 
            $valor_inteiro = 1 * 4;
            echo $valor_inteiro;
            
            echo'<br />';

            $valor_inteiro = $valor_inteiro * 2;
            echo $valor_inteiro;

            //float 
            $valor_fracionado = 10.7;
            echo $valor_fracionado; //php suporta valores negativos

            //boolean
            $estado = true; //false
            echo $estado; //ele imprime o estado 1=verdadeiro 0=falso e não retorna nada

            echo '<br />';

            //strings
            //'' aspas simples apenas exibe o conteúdo na tela
            //" " aspas dupla ele recupera os valores da variável
            //aspas simples é melhor quanbdo tem bastante conteúdo de texto
            $texto = 'Curso de php -'.$valor_inteiro; //concatenação no php é feito pelo "." ponto
            echo $texto;

            //arrays
            
            //arrays (falaremos mais adiante)

            // = significa atribuição, o que está a direita está associado a esquerda
        ?>
           
    </body>
</html>



