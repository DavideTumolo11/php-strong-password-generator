<?php
session_start();
include "/MAMP/htdocs/php-strong-password-generator/function.php";
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $_SESSION['password'] = generatePassword($length);
    header('Location: password.php');
}


class address {
    public static $country = 'italy';

     public function __construct( $street) {
        $this->country = $street;
    }
}

echo address :: $country;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<body>

    <div>
        <form method="get">
            <label for="length">Lunghezza della password:</label><br>
            <input type="number" id="length" name="length" min="1"><br>
            <input type="submit" value="Genera">
        </form>
    </div>


</body>

</html>