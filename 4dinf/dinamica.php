<!DOCTYPE html>
<html>
<head>
<title>4DINF - DINAMICA</title>
</head>
<body>
    <h1>Pagina Dinamica</h1>
    <p>Questa è una pagina DINAMICA sul mio server</p>
    <?php 
        //questo è codice PHP eseguito lato server
        echo "Today is " . date("Y/m/d h:m:s");

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = mysqli_connect("localhost", "4dinf", "JZxPv_]*KI1deEQ]", "sakila");
        
        $query = "SELECT * FROM actor where first_name LIKE 'B%'";

        $result = mysqli_query($mysqli, $query);

        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
            printf("<p>%s (%s)</p>", $row["first_name"], $row["last_name"]);
        }
    ?>
</body>
</html>