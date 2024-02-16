<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Anexo</title>
    <?php require 'config.php';?>
    <link rel="stylesheet" href="style.css";>
    <link rel="stylesheet" href="input.css";>
</head>
<body><main>
        <?php 
        $pd0= new PDO("mysql:dbname=.$db_name.;host=$db_host","root", "");?>
        if(isset($_POST['num'])){
            
}    <h1>Informação do arquivo</h1>
    <section>
    <form method="post" action="" >
    <label for="num">ID arquivo :</label>
    <input type="number" name="num" class="coluna" id="num" value=""  required>
    <label for="dsc">Descrição:</label>
    <input type="text" name="dsc" class="num" id="dsc" value=""  required>
    <label for="ses">Sessão:</label>
    <input type="number" name="ses" class="num" id="ses" value=""  required>
    <label>Departamento:</label>
    <input type="text" name="dep" class="dsc" id="dsc" value="">
    <input type="submit" value="Enviar">
    </section>
    </main>
    </form>
    
</body>
</html>