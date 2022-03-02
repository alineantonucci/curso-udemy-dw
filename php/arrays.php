<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Arrays</title>
    </head>

    <body>

        <?php
            
            //arrays
            $mensagens_divertidas[1] = 'Sim, claro, sou atlético… surfo na Internet todos os dias.';
            $mensagens_divertidas[2] = 'Eu preciso de um feriado de seis meses, duas vezes por ano.';
            $mensagens_divertidas[3] = 'Meu tanquinho é protegido por uma camada de gordura.';
            $mensagens_divertidas[4] = 'Meu tanquinho é protegido por uma camada de gordura.';
            $mensagens_divertidas[5] = 'Sexta-feira, minha segunda palavra favorita. Bom dia!';

            //echo e print não funciona para array, quando o índice não é conhecido
            //quando conhecemos ai podemos usar o echo e o print

            //podemos usar arrays alfanuméricos
            /*$mensagens_divertidas['a'] = 'Sim, claro, sou atlético… surfo na Internet todos os dias.';
            $mensagens_divertidas['b'] = 'Eu preciso de um feriado de seis meses, duas vezes por ano.';
            $mensagens_divertidas['c'] = 'Meu tanquinho é protegido por uma camada de gordura.';
            $mensagens_divertidas['d'] = 'Meu tanquinho é protegido por uma camada de gordura.';
            $mensagens_divertidas['e'] = 'Sexta-feira, minha segunda palavra favorita. Bom dia!';*/

            /* colocar o array por parâmetros
            $mensagens_divertidas = array(
                'a' => 'Sim, claro, sou atlético… surfo na Internet todos os dias.'
            );

            */

            var_dump($mensagens_divertidas);
            echo '<br />';
            print_r($mensagens_divertidas);
            echo '<br />';
            echo $mensagens_divertidas[3];
            print $mensagens_divertidas[3];

        ?>
           
    </body>
</html>



