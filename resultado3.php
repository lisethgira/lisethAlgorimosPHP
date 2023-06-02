<h1>
    Mayor o menor de Edad
</h1>

<?php 

$NUM = $_POST['n1'];

if ($NUM >= 18) {
    echo("eres mayor de edad");
}else{
 echo("eres menor de edad");
}

?>