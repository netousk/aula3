<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <p1> Escolha o modelo do carro a ser montado </p1>
    <h2 style = 'font-size:20px'> Lista </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">

    <form method = "post" action = "dados.php" >

    <input type = "radio" name = "modelo" value = "Civic"/> civic <br/>
    <img src = "imagens/civic.jpeg" width="140" height="auto"> <br/>

    <input type = "radio" name = "modelo" value = "Supra"/> supra <br/>
    <img src = "imagens/supra.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "modelo" value = "Gtr"/> gtr <br/>
    <img src = "imagens/gtr.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "modelo" value = "Impreza"/> impreza <br/>
    <img src = "imagens/impreza.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "modelo" value = "Lancer"/> lancer <br/>
    <img src = "imagens/lancer.jpg" width="140" height="auto"> <br/>

    <input type = "submit" name = "botao" value = "salvar"/>
    </form>

    
    <a href="carroceria.php"><br/>proxima pagina </a><br/>
    <input type = "reset" name = "botao" value = "reset"/>


        <?php
        
        
        ?>
    </body>
</html>