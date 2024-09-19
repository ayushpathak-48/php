<?php
// database nme: test
// table name : student

$conn = mysqli_connect('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die('Connection Error : ' . mysqli_error($conn));
}
$sql = "select * from student";
$query = mysqli_query($conn, query: $sql);
echo '<pre>';
echo '<table border="1">';
echo '<tr><th>Id</th><th>Name</th></tr>';
while ($row = mysqli_fetch_assoc($query)) {
    // print_r($row);
    echo '<tr><td>' . $row['s_id'], '</td><td>' . $row['sname'], '</td><td><a href="test.php?del_id=' . $row['s_id'] . '"><button>delete</button></td></a></tr>';

}
echo '</table>';

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $sql2 = "insert into student (`sname`) VAlUES('$name')";
    $query2 = mysqli_query($conn, query: $sql2);
    if ($query2) {
        header('location:test.php');
    }
}
if (isset($_REQUEST['del_id'])) {
    $del_id = $_REQUEST['del_id'];
    $sql3 = "delete from student where s_id = $del_id";
    $query3 = mysqli_query($conn, query: $sql3);
    if ($query3) {
        header('location:test.php');
    }
}
?>

<form action="test.php" method="POST">
    <div>
        <label for="name">Your Name</label>
        <input type="name" id="name" name="name" placeholder="enter name here" required />
    </div>
    <button type="submit" name="submit">Submit</button>
</form>
