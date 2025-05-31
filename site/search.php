<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["search_q"])) {
    $search_q = trim($_POST['search_q']);
    $search_q = strip_tags($search_q);

    $conn = mysqli_connect('db', 'user', 'userpass', 'site');
    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8mb4');
    $search_q = mysqli_real_escape_string($conn, $search_q);
    $query = "SELECT title_value, content FROM title WHERE title_value LIKE '%$search_q%'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Результаты поиска:</h3>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<strong>" . htmlspecialchars($row["title_value"]) . "</strong><br>";
            echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p><hr>";
        }
    } else {
        echo "Ничего не найдено.";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
} else {
    echo "Введите букву для поиска.";
}
?>
