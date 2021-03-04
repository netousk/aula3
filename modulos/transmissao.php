<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha a Transmissao </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">

        <form method = "post" action = "dados.php" >
        <select name = "transmissao">
            <option value = "manual 5 marchas"> manual 5 marchas </option>
            <option value = "manual 6 marchar"> manual 6 marchar </option>
            <option value = "automatica 6 marchar"> automatica 6 marchar </option>
            <option value = "automatizada 6 marchas"> automatizada 6 marchas  </option>
            <option value = "automatizada 10 marchas"> automatizada 10 marchas </option>
            <input type = "submit" name = "botao" value = "salvar"/>
        </select><br/>
        </form>


    <a href="cor.php"><br/>proxima pagina </a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/>

        <?php 

        ?>
    </body>
</html>