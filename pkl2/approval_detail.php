<!DOCTYPE html>
<html>
<head>
    <title>Product Registration Detail</title>
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
    <h2>Product Registration Detail</h2>
<table>
        <thead>
</thead>

<?php

//include 'index.php';
include 'koneksi.php';

    $sql="select * from prod_detail where nodoc='12'";
    $no = 1;
	$q=mysqli_query($db, $sql);
	while ($row=mysqli_fetch_array($q))
    {       
        ?>
        <tr>
            <td>No.</td>
            <td>:</td>
            <td><?php echo $no++ ?></td>
        </tr>
        <tr>
            <td>No. Doc</td>
            <td>:</td>
            <td><?php echo $row['nodoc'] ?></td>

    <tr>
        <td>Issue Date</td>
        <td>:</td>
        <td><?php echo $row['Issue_Date'] ?></td>
    </tr>

    <tr>
        <td>Requestor</td>
        <td>:</td>
        <td><?php echo $row['Requestor'] ?></td>
    </tr>  
                <?php } ?>
                </table>
            </body>
</html>