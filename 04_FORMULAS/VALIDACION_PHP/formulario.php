<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
<?php

// Definimos variables que guardaran el valor del input de cada campo.
// definimos estas variables como valores vacios

$name = $email = $website = $comment = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

// comprobamos que el formulario se haya enviado aplicando REQUEST_METHOD
// a un POST. Si el formulario se ha enviado, ñas comprobaciones se realizan,
// si no, se ignora y se devuelve un fomulario en blanco


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);

    // y tambien ponemos los campos nombre y mail como requeridos
    if (empty($_POST["name"])) {
        $nameErr = "Nombre obligatorio";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email obligatorio";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<h2>Formulario de validacion</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Web: <input type="text" name="website">
    <br><br>
    Comentarios: <textarea type="text" name="comment"></textarea>
    <br><br>
    <input type="submit" name="Submit" value="Enviar">
</form>

<?php
echo "<h2> Tus datos:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
?>

</body>
</html>