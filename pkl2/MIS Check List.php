<?php

//include 'index.php';
include 'koneksi.php';

 ?>
<form action="" method="GET">

<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-4 well well-lg">
 <h2>input MIS Check List</h2>
<table>
    <tr>
        <td>GCM Reg. Date</td>
        <td>:</td>
        <td><input type="date" name="tanggal" /></td>
    </tr>

    <tr>
        <td>Flow</td>
        <td>:</td>
        <td><input type="text" name="Flow"  required/><br /></td>
    </tr>   
    
    <tr>
        <td>Process ID</td>
        <td>:</td>
        <td><input type="text" name="Proid"  required/><br /></td>
    </tr>   

    <tr>
        <td>Label Pattern</td>
        <td>:</td>
        <td><input type="text" name="LabelPat"  required/><br /></td>
    </tr>

<tr>
        <td><input type="checkbox" name="Request Type" />A12(Model Before CT/Parent Model)</input>
    </tr>

<tr>
    <td><input type="checkbox" name="Request Type" />A13(Model After CT/Child Model)</input>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />A53(Part-Model Relation)</input>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />C11(AGL Reference Value)</input>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />C22(Manhours and Yield)</input>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />C41(Check Sheet/LPCS)</input>
        <tr>
            <td>- Model Position</td>
            <td>:</td>
            <td><input type="Label Pattern" name="Label Pattern"  required/><br /></td>
        </tr>
        <tr>
            <td>- Lot Position</td>
            <td>:</td>
            <td><input type="Label Pattern" name="Label Pattern"  required/><br /></td>
        </tr>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />Model Change</input>
</tr>

<tr>
    <td><input type="checkbox" name="Request Type" />Sending Handy Program Approval to SC</input>
</tr>

    <tr>
        <td>Notes</td>
        <td>:</td>
        <td><textarea name="komentar" rows="4" cols="50" ></textarea> </td>
    </tr>

    <p class="besar">
    <tr>
        <td>[Activation / Mass Production]</td>
    </tr>
    </p>

    <tr>
        <td><input type="checkbox" name="Request Type" />Copy LPCS to Date Server (Backup)</input>
    </tr>

    <tr>
        <td><input type="checkbox" name="Request Type" />Copy LPCS to PC Bersama</input>
    </tr>

    <tr>
        <td>[SAP Check List]</td>
    </tr>

    <tr>
        <td><input type="checkbox" name="Request Type" />BOM(attached by PE)</input>
    </tr>

    <p class="besar">
    <tr>
        <td>[Production Version]</td>
    </tr>
    </p>

    <tr>
        <td><input type="checkbox" name="Request Type" />FG10</input>
    </tr>

    <tr>
        <td><input type="checkbox" name="Request Type" />PK10</input>
    </tr>

    <tr>
        <td><input type="checkbox" name="Request Type" />NG</input>
    </tr>

    <tr>
        <td><input type="submit" name="submit" value="SUBMIT"/></td>
        <td></td>
        <td></td>
    </tr>

</table>
</form>
				 </table>
				 </div>

 </div>
 
 <?php
if (isset($_GET['submit'])){


include 'koneksi.php';

$nama=$_GET['nama'];
$group=$_GET['group'];
$status=$_GET['status'];






echo $sql="insert into device (id_device,name,group_dev,status) value ('0','$nama','$group','$status')";

$res=mysqli_query($link, $sql);

if ($res){
echo"<script>
     document.location='conf_device.php';
     </script>";
}
}
 ?>