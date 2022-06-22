<?php

$con = mysqli_connect("dumont", "210045", "210045", "d210045");

if (mysqli_connect_error()) {
    echo "Falha ao se conectar ao servidor MySQL: " . mysqli_connect_error();
} else {
    mysqli_select_db($con, "banco");
}

?>