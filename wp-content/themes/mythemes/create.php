<?php
echo 123;
if (isset($_POST["link"]) && isset($_POST["author_name"])) {

    $conn = new mysqli("localhost", "root", "root", "mydb");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $link = $conn->real_escape_string($_POST["link"]);
    echo $_POST["link"];
    $author_name = $conn->real_escape_string($_POST["author_name"]);
    $comment = $conn->real_escape_string($_POST["comment"]);
    $sql = "INSERT INTO comments (link, author_name,comment) VALUES ('$link', '$author_name', '$comment')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>