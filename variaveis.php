<!-- 
    Toda  variável  em  PHP  tem  seu  nome  composto  pelo  caracter  $  e  uma  string,  que  deve  iniciar  por  umaletra ou o caracter “_”. PHP é case sensitive, ou seja, as variáveis $vivas e $VIVAS são diferentes.
    Por isso é preciso termuito cuidado ao definir os nomes das variáveis.
    É bom evitar os nomes em maiúsculas, pois como veremos mais adiante,o PHP já possui alguma variáveis pré-definidas cujos nomes são formados por letras maiúsculas.

 -->


 <html>
    <head>
    <title>Aprendendo PHP</title>
    </head>

    <body>
        <?php 
        $texto = "Primeiro Script";
        echo $texto;
        ?>
    </body>
</html>