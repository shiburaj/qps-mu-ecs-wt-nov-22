<?php

$conn = @mysqli_connect('localhost', 'root', '', 'mydb');

if ($conn === false) {
    echo "Error in establishing connection";
    die();
}

echo "Connect Established <br>";

$sql = "CREATE TABLE myguests (
    id          INT,
    first_name  VARCHAR(191),
    mobile_no  VARCHAR(10)
);";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Table Created <br>";
} else {
    echo "Error creating Table <br>";
}
