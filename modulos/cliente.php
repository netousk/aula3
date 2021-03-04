<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Cliente </h1>
    <p1> Por favor, preencha os campos abaixo </p1>
    <h2 style = 'font-size:20px'> Lista </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
     

    <form method = "post" action = "dados.php">
        nome:<input type = "text" placeholder="nome" name = "nome"/><br/><br/>
        idade:<input type = "text" name = "idade"/><br/><br/>
        <input type = "radio" name = "sexo" value = "M"/> masculino
        <input type = "radio" name = "sexo" value = "F"/> feminnino <br/><br/>
        celular:<input type = "text" name = "celular"/><br/><br/>
        email:<input type = "text" name = "email"/><br/><br/>
        <input type = "submit" name = "botao" value = "salvar"/>
        <input type = "reset" name = "botao" value = "reset" />
    </form>

    <a href="modelo.php"><br/>proxima pagina </a><br/>

        <?php 

        ?>
    </body>
</html>