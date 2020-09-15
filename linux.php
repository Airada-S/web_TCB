<!DOCTYPE HTML>
<html>
<body>

<form action="insert.php" method="post">
    Data: <input type="text" name="data"><br>
    <input type="submit">
</form>

</body>
</html>

<?php
$data = $_POST["data"];

$user = "linux";
$password = "ai305520";
$database = "linux";
$table = "todo_list";

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    $sql = "INSERT INTO $table (content) VALUES ($data)";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

