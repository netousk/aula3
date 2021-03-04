<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha a Carroceria </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
        
    <form method = "post" action = "dados.php" >
    <input type = "radio" name = "carroceria" value = "Coupe"/> coupe <br/>
    <img src = "imagens/coupe.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Sedan"/> sedan <br/>
    <img src = "imagens/sedan.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Wagon"/> wagon <br/>
    <img src = "imagens/wagon.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Hatchback"/> hatchback <br/>
    <img src = "imagens/hatchback.jpg" width="140" height="auto"> <br/>

    <input type = "radio" name = "carroceria" value = "Pickup"/> pickup <br/>
    <img src = "imagens/pickup.jpg" width="140" height="auto"> <br/>
    <input type = "submit" name = "botao" value = "salvar"/>
    </form>

    
    <a href="motor.php"><br/>proxima pagina </a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/>
    

        <?php 

        ?>
    </body>
</html>