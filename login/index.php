<html>
    <head>
        <title> Sistema de login</title>
</head>
<body>
    <h1>área restrista</h1>
    <hr>
    <form action="verificarlogin.php" method="post">
        login:<br/>
        <input type="text" name="login" /><br/>
        <br/><br/>
        senha:<br/>
        <input type="password" name="senha" /><br/>
        <br/><br/>
        <input type="submit" name="logar" /><br/>
    </form>
    <?php
    if(isset($_GET["msg"])){
        echo $_GET["msg"];
       }
       ?>
    </body>
</html>