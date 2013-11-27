<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("guestbook",$konek) or die("Cannot connect to the database");

$query = mysql_query("select * from messages order by id asc");
?>
<table border="1">
<tr>
    <td>Name</td>
    <td>message</td>
    <td>email</td>
    <td>Date Posted</td>
    <td>Status</td>
    <td>Action</td>
</tr>
<?php

if(mysql_num_rows($query)>0){
    while($row= mysql_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['date_posted']?></td>
        <td><?=$row['is_approved']?></td>
        
        <td><a href="update.php?id=<?=$row['id']?>">
        <? if($row['is_approved'] == "y"){
			print_r ("Reject");
			}
		   else{
			print_r ("Approved");
			}
		?>
		</a>&nbsp;<a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
    </tr>
<?php       
       
    }
       
}
else{
   
    echo "no record";
}

?>
<tr><td colspan="3"><a href="index.php" >[Add new record]</a>
</td></tr>
</table>
