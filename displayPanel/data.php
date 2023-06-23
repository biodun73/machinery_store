
  <?php
       //connection
$con = mysqli_connect("localhost","root","","store");
$sql = "SELECT name, price FROM products";

$result = $con->query($sql);

if ($result->num_rows > 0) {

    $data[0][0] = 'name';
    $data[0][1] = 'price';
    $x = 1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[$x][0] = $row["name"];
        $data[$x][1] = (float)$row["price"];
        $x++;
    }
} else {
    die("No records");
}

echo(json_encode($data));
        ?>