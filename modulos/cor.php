<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "css/estilo1.css" />
        
    </head>
    <body>

    <h1 style = 'font-size:30px'> Monte seu Carro </h1>
    <h2 style = 'font-size:20px'> Escolha a Cor </h2>

    <table border = 5>
        <td align = "center">
        <td valign = "tod">
        <td rowspan = "3">
        <td colspan = "3">

        <form method = "post" action = "dados.php" >
        <select name = "cor">
            <option value = "preto"> preto </option>
            <option value = "branco"> branco </option>
            <option value = "prata"> prata </option>
            <option value = "vermelho"> vermelho  </option>
            <option value = "azul"> azul </option>
        </select><br/>
        <input type = "submit" name = "botao" value = "salvar"/>
        </form>

    <a href="cor.php"><br/>proxima pagina </a><br/><br/>
    <input type = "reset" name = "botao" value = "reset"/>


        <?php 

        ?>
    </body>
</html>