<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Tabuleiro Xadrez</title>
    </head>

    <body>

        <?php

            $tabuleiro[8]['a'] = 'torre preta';
            $tabuleiro[8]['b'] = 'bispo preta';
            $tabuleiro[8]['c'] = 'cavalo preta';
            $tabuleiro[8]['d'] = 'rainha preta';
            $tabuleiro[8]['e'] = 'rei preta';
            $tabuleiro[8]['f'] = 'bispo preta';
            $tabuleiro[8]['g'] = 'cavalo preta';
            $tabuleiro[8]['h'] = 'torre preta';

            $tabuleiro[7]['a'] = 'peao preta';
            $tabuleiro[7]['b'] = 'peao preta';
            $tabuleiro[7]['c'] = 'peao preta';
            $tabuleiro[7]['d'] = 'peao preta';
            $tabuleiro[7]['e'] = 'peao preta';
            $tabuleiro[7]['f'] = 'peao preta';
            $tabuleiro[7]['g'] = 'peao preta';
            $tabuleiro[7]['h'] = 'peao preta';
            
            $tabuleiro[1]['a'] = 'torre branca';
            $tabuleiro[1]['b'] = 'cavalo branca';
            $tabuleiro[1]['c'] = 'bispo branca';
            $tabuleiro[1]['d'] = 'rainha branca';
            $tabuleiro[1]['e'] = 'rei branca';
            $tabuleiro[1]['f'] = 'bispo branca';
            $tabuleiro[1]['g'] = 'cavalo branca';
            $tabuleiro[1]['h'] = 'torre branca';

            $tabuleiro[2]['a'] = 'peao branca';
            $tabuleiro[2]['b'] = 'peao branca';
            $tabuleiro[2]['c'] = 'peao branca';
            $tabuleiro[2]['d'] = 'peao branca';
            $tabuleiro[2]['e'] = 'peao branca';
            $tabuleiro[2]['f'] = 'peao branca';
            $tabuleiro[2]['g'] = 'peao branca';
            $tabuleiro[2]['h'] = 'peao branca';
        
            print_r($tabuleiro);
            print '<br />';
            print $tabuleiro[8]['g'];
           
          
        ?>
           
    </body>
</html>



