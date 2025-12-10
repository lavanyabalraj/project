<?php
$conn = new mysqli("localhost","root","","ulloor_artist_db");

$result = $conn->query("SELECT * FROM orders");
?>

<h2>Customer Orders</h2>
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Message</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['message'] ?></td>
</tr>
<?php } ?>

</table>
