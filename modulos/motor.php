<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha o Motor </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">
    
        <form method = "post" action = "dados.php" >
        <select name = "motor">
            <option value = "1.5 3c aspirado"> 1.5 3c aspirado </option>
            <option value = "1.0 3c turbo"> 1.0 3c turbo </option>
            <option value = "2.0 4c turbo"> 2.0 4c turbo </option>
            <option value = "3.0 L6 turbo"> 3.0 L6 turbo  </option>
            <option value = "5.0 v8 bi turbo"> 5.0 v8 bi turbo </option>
        </select><br/>
        <input type = "submit" name = "botao" value = "salvar"/>
        </form>

    <a href="transmissao.php"><br/>proxima pagina </a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/>


        <?php 

        ?>
    </body>
</html>