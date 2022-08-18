<!DOCTYPE html>
<html>
<head>
    <title>Product Registration Request</title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>

<body>
    <h2>Product Registration Request</h2>
<table>
        <thead>
<tr>
<td>No.</td>
    <td>No. Doc</td>
    <td>Status</td>
    <td>Approver 1</td>
    <td>Approver 2</td>
    <td>Approver 3</td>
    <td>Approver 4</td>
    <td>Approver 5</td>
</tr>
</thead>

<?php

//include 'index.php';
include 'koneksi.php';


    $sql="select * from approval where status='waiting'";
    $no = 1;
	$q=mysqli_query($db, $sql);
	while ($row=mysqli_fetch_array($q))
    {       
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nodoc'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['tgl_approved1'] ?></td>
                <td><?php echo $row['tgl_approved2'] ?></td>
                <td><?php echo $row['tgl_approved3'] ?></td>
                <td><?php echo $row['tgl_approved4'] ?></td>
                <td><?php echo $row['tgl_approved5'] ?></td>
                <?php } ?>
                </table>
            </body>
</html>