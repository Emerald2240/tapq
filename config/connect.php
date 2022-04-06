<?php

$db = new mysqli("localhost", "root", "", "tapq");

if ($db->connect_error) {
    die("Error Occured" . $db->connect_error);
} else {
    //echo "Connection Established";
}


$host = 'localhost';
$user = 'root';
$password = "";
$dbname = "tapq";

// Set DSN
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname;


$options = [
    // turn off emulation mode for "real" prepared statements
    PDO::ATTR_EMULATE_PREPARES   => false,

    //turn on errors in the form of exceptions
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    //make the default fetch be an associative array
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    //Getting the number of affected rows is exceedingly simple, as all you need to do is $stmt->rowCount().
    PDO::MYSQL_ATTR_FOUND_ROWS => true,
];



try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Something weird happened'); //something a user can understand
}


//UPDATE
// $stmt = $pdo->prepare("UPDATE myTable SET name = :name WHERE id = :id");
// $stmt->execute([':name' => 'David', ':id' => $_SESSION['id']]);
// $stmt = null;


//INSERT
// $stmt = $pdo->prepare("INSERT INTO myTable (name, age) VALUES (?, ?)");
// $stmt->execute([$_POST['name'], 29]);
// $stmt = null;


//Get Number of affected rows
// $stmt = $pdo->prepare("UPDATE myTable SET name = ? WHERE id = ?");
// $stmt->execute([$_POST['name'], $_SESSION['id']]);
// echo $stmt->rowCount();
// $stmt = null;


//Get Latest Primary Key Inserted
// $stmt = $pdo->prepare("INSERT INTO myTable (name, age) VALUES (?, ?)");
// $stmt->execute([$_POST['name'], 29]);
// echo $pdo->lastInsertId();
// $stmt = null;


//Check for duplicate Entry
// try {
//     $stmt = $pdo->prepare("INSERT INTO myTable (name, age) VALUES (?, ?)");
//     $stmt->execute([$_POST['name'], 29]);
//     $stmt = null;
//   } catch(Exception $e) {
//     if($e->errorInfo[1] === 1062) echo 'Duplicate entry';
//   }



//Create unique column
//ALTER TABLE myTable ADD CONSTRAINT unique_person UNIQUE (name, age)



//Create PDO instance

// //Sample Query
// $stmt = $pdo->query('SELECT * FROM courses');
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['code'] . '<br>';
// }
