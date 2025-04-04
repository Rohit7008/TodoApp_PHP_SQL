<?php
$conn = new mysqli ("localhost","root","","todolist");
if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
}
if (isset($_POST["addtask"])) {
    $task = $_POST["task"];
    $conn -> query("INSERT INTO tasks (task) VALUES ('$task')");
    header("Location: index.php");
}
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM tasks WHERE id = '$id'");
    header("Location: index.php");
}
if (isset($_GET["complete"])) {
    $id = $_GET["complete"];
    $conn->query("UPDATE tasks SET status ='completed' WHERE id = '$id'");
    header("Location: index.php");
}
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Todo App</h1>
        <form action="index.php" method="post">
            <input type="text" name="task" placeholder="Enter new task:" id="">
            <button type="submit" name="addtask">Add Task</button>
        </form>
       <ul>
        <?php while($row = $result->fetch_assoc()): ?>
            <li class="<?php echo $row["status"]; ?>">
                <strong><?php echo $row["task"]; ?></strong>
                <div class="actions">
                    <a href="index.php?complete=<?php echo $row['id']; ?>">Complete</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </div>
            </li>
        <?php endwhile ?>
       </ul>
    </div>
</body>
</html>