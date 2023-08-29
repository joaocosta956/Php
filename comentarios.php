<!-- Há dois tipos de comentários-->

<!-- Comentários de uma linha: 
Marca  como  comentário  até  o  final  da  linha  ou  até  o  final  do  bloco  de  código  PHP  –  
o  que  vier  antes.
Pode ser delimitado pelo caracter “#” ou por duas barras ( // ). -->

<!-- E comentários em blocos:

    Tem como delimitadores os caracteres “/*” para o início do bloco e “*/” para o final do comentário.
    Se  o  delimitador  de  final  de  código  PHP  (  ?>  )  estiver  dentro  de  um  comentário,  não  será  reconhecido  pelointerpretador.

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        echo "test"; #Isto é um teste
        echo "another test"; //Isto é outro teste
        /*
            Este é um
            comentário
            em bloco.
        */
    ?>
</body>
</html>