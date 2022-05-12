<link rel="stylesheet" href="css/bootstrap.min.css">

<?php

    if($_GET['signature'] != 'opr@$') {
        die;
    }

    $conn = new mysqli('localhost', 'root', '','van');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = mysqli_query($conn,"select * from room_book order by id desc");

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
    }

?>

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>People</th>
        <th>Children</th>
        <th>Room Type</th>
    </tr>
    <?php
        foreach ($data as $k => $d){
            echo "<tr>
                    <td>".($k+1)."</td>
                    <td>".$d['name']."</td>
                    <td>".$d['email']."</td>
                    <td>".$d['number']."</td>
                    <td>".$d['people']."</td>
                    <td>".$d['children']."</td>
                    <td>".$d['room_type']."</td>
                </tr>";
        }
    ?>
</table>
