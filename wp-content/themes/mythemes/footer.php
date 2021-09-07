<footer>
    <h1>Footer</h1>

<!--    --><?php
//    $conn = new mysqli("localhost", "root", "root", "mydb");
//    if($conn->connect_error){
//        die("Ошибка: " . $conn->connect_error);
//    }
//
//    $link = get_permalink();
//    $sql = "SELECT * FROM comments WHERE link = '$link'";
//    if($result = $conn->query($sql)){
//        $rowsCount = $result->num_rows; // количество полученных строк
//        echo "<p>Получено объектов: $rowsCount</p>";
//        foreach($result as $row){
//            echo "<tr>";
//            echo "<br>" . $row["author_name"] . "</br>";
//            echo "<br>" . $row["comment"] . "</br>";
//            echo "</tr>";
//        }
//        echo "</table>";
//        $result->free();
//    } else{
//        echo "Ошибка: " . $conn->error;
//    }
//    $conn->close();
//    ?>
</footer>


</body>
</html>