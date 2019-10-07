<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>AEP 2</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'pessoa.php';
            $pessoa = new Pessoa('matheus','01/01/1999', '70', '1.70', '08021343962');
            echo $pessoa->calculoImc();
            echo $pessoa->calculoIdade();
            echo $pessoa->validarCPF();
            print_r($pessoa);
        ?>  
    </body>
</html>    