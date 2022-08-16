<?php

//include 'index.php';
include 'koneksi.php';

 ?>

<form action="" method="GET">

<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-4 well well-lg">
 <h2>Input Approval</h2>

<table>
    <tr>
        <td>No. Doc</td>
        <td>:</td>
        <td><input type="varchar" name="nodoc"/></td>
    </tr>

    <tr>
        <td>Issue Date</td>
        <td>:</td>
        <td><input type="date" name="tanggal" /></td>
    </tr>

    <tr>
        <td>Requestor</td>
        <td>:</td>
        <td><input type="text" name="requestor"  required/><br /></td>
    </tr>  

<tr>
		<td>Request Type</td>
		<td>:</td>
		<td>
				 			
		<select name="RequestType" class="form-control">
		<option value="0"> --- Select type --- </option>
		<option value="New Model"> New Model </option>
		<option value="Modification"> Modification </option>
										
		</select>
			</td>
</tr>

    <tr>

				 		<td>Product Category</td>
				 		<td>:</td>
				 		<td>
				 			
						 <select name="ProductCategory" class="form-control">
										<option value="0"> --- Select category --- </option>
										<option value="LED"> LED </option>
										<option value="LASER"> LASER </option>
									</select>
				 		</td>
    </tr>

    <tr>
        <td>Device Type</td>
        <td>:</td>
        <td>
				 			
						 <select name="devicetype" class="form-control">
										<option value="0"> --- Select device --- </option>
										<option value="Frame Laser"> Frame Laser </option>
										<option value="Single Laser"> Single Laser </option>
									</select>
				 		</td>
    </tr>  
    
    <tr>
        <td>Sharp Model Name</td>
        <td>:</td>
        <td><input type="text" name="SharpModelName"  required/><br /></td>
    </tr>  

    <tr>
        <td>Similar Model</td>
        <td>:</td>
        <td><input type="text" name="SimilarModel"  required/><br /></td>
    </tr>  

    <tr>
        <td>SAP Model Name</td>
        <td>:</td>
        <td><input type="text" name="SAPModelName"  required/><br /></td>
    </tr> 

    <tr>
        <td>D Code SAP</td>
        <td>:</td>
        <td><input type="text" name="DCodeSAP"  required/><br /></td>
    </tr> 

    <tr>
        <td>A3 Model Name</td>
        <td>:</td>
        <td><input type="text" name="A3ModelName"  required/><br /></td>
    </tr> 

    <table border="2">
        <tr>
            <th colspan="2" align="center">Different material with similar model</th>
</tr>
<tr>
    <td rowspan="2">Test</td>
</tr>
<tr>
    <td rowspan="2">Test</td>
</tr>
<tr>
    <td rowspan="2">Test</td>
</tr>
<tr>
    <td rowspan="2">Test</td>
</tr>
</table>

    <tr>
        <td>Ext. No.</td>
        <td>:</td>
        <td><input type="text" name="ExtNo" /></td>
    </tr>

    <tr>
        <td>No. of Rank</td>
        <td>:</td>
        <td><input type="text" name="NoofRank" /></td>
    </tr>

    <tr>
        <td>Ship. Qty</td>
        <td>:</td>
        <td><input type="text" name="ShipQty"  required/><br /></td>
    </tr> 

    <tr>
        <td>Lot Making Qty</td>
        <td>:</td>
        <td><input type="text" name="LotMakingQty"  required/><br /></td>
    </tr> 

    <tr>
        <td>LOT Qty</td>
        <td>:</td>
        <td><input type="text" name="LotQty"  required/><br /></td>
    </tr> 

    <tr>
        <td>Min Qty</td>
        <td>:</td>
        <td><input type="text" name="MinQty"  required/><br /></td>
    </tr> 

    <tr>
        <td>Yield</td>
        <td>:</td>
        <td><input type="text" name="Yield"  required/><br /></td>
    </tr> 

    <tr>
        <td>S/T</td>
        <td>:</td>
        <td><input type="text" name="ST"  required/><br /></td>
    </tr> 

    <tr>
        <td>Notes</td>
        <td>:</td>
        <td><textarea name="komentar" rows="4" cols="50" ></textarea> </td>
    </tr>


    <tr>
        <td><input type="submit" name="submit" value="SUBMIT"/></td>
        <td></td>
        <td></td>
    </tr>

      </form>
    </table>
  </div>
</div>

<?php
if (isset($_GET['submit'])){

include 'koneksi.php';

$nodoc=$_GET['nodoc'];
$tanggal=$_GET['tanggal'];
$requestor=$_GET['requestor'];
$RequestType=$_GET['RequestType'];
$ProductCategory=$_GET['ProductCategory'];
$devicetype=$_GET['devicetype'];
$SharpModelName=$_GET['SharpModelName'];
$SimilarModel=$_GET['SimilarModel'];
$SAPModelName=$_GET['SAPModelName'];
$DCodeSAP=$_GET['DCodeSAP'];
$A3ModelName=$_GET['A3ModelName'];
$ExtNo=$_GET['ExtNo'];
$NoofRank=$_GET['NoofRank'];
$ShipQty=$_GET['ShipQty'];
$LotMakingQty=$_GET['LotMakingQty'];
$LotQty=$_GET['LotQty'];
$MinQty=$_GET['MinQty'];
$Yield=$_GET['Yield'];
$ST=$_GET['ST'];
$Notes=$_GET['komentar'];


$sql="insert into prod_detail (Id_Approval, nodoc, Issue_Date, Requestor, Request_Type, Product_Category, Device_Type, Sharp_Model_Name, Similar_Model, SAP_Model_Name, D_Code_SAP, A3_Model_Name, Ext_No, No_of_Rank, Ship_Qty, Lot_Making_Qty, Lot_Qty, Min_Qty, Yield, ST, Notes) 
value ('0','$nodoc','$tanggal','$requestor','$RequestType','$ProductCategory','$devicetype','$SharpModelName','$SimilarModel','$SAPModelName','$DCodeSAP','$A3ModelName','$ExtNo','$NoofRank','$ShipQty','$LotMakingQty','$LotQty','$MinQty','$Yield','$ST','$Notes')";

$res=mysqli_query($db, $sql);

if (!$res){
echo"Request gagal di buat";
}

require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	$mail->IsSMTP();// send via SMTP
				$mail->Host     = "relay.sharp.co.jp";

	// pengirim
	$mail->setFrom('prodreg@ssi.sharp-world.com');
	//$mail->From     = "prodreg@ssi.sharp-world.com";
	$mail->FromName = "Admin Production Registration Online System";

    $sql_in="insert into approval(id,Id_Approval,status,tgl_approved1,tgl_approved2,tgl_approved3,tgl_approved4,tgl_approved5,remark) values (0,$nodoc,'waiting','','','','','','')";
    $q=mysqli_query($db, $sql_in);

    $mail->AddAddress("yusup_al@ssi.sharp-world.com","Iwan Martanto");
      
    $mail->Subject  =  "Product Registration" ;
        $mail->Body     =  "Attention Mr./Mrs. : Reviewer <br /> This following <span style='color:green'>
        </span> Document need to be <span style='color:blue'>approved</span> <br /> No. Document : ".$nodoc." <br /> Model Name : ".$SharpModelName."<br />
        Please Login into <a href='192.168.132.34/newdocument'>Document Online System</a>, Thank You";
        $mail->AltBody  =  "This research is supported by MIS";
    
        if(!$mail->Send())
        {
            echo "Message was not sent <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
}
 ?>
