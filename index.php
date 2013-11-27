<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("guestbook",$konek) or die("Cannot connect to the database");
$query = mysql_query("select * from messages order by id asc");
?>
<html>
	<head><center>GuestBook</center></head>
	<title><h1>GuestBook</h1></title><br>
	
<body>
	<link rel="stylesheet" type="text/css" href="style.css"><center>
	 
	<div>
		<div >
			<table class = "div" width = "40%"  border="1">
				<tr>
					<td>Name</td>
					<td>Message</td>
					<td>Date</td>
   
				</tr>
				<?php

if(mysql_num_rows($query)>0){
    while($row= mysql_fetch_array($query)){
		if($row['is_approved'] == "y"){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['date_posted']?></td>
    </tr>
<?php       
     
       
}

else{
   
    continue;
}
}
}


?>

</table>
		</div>
		<div>
		<form  name = "messages" action="add.php" method="post">
		Fullname: <input type="text" name="name"><br>
		message: <input type="text" name="message"><br>
		Email:	 <input type="text" name="email"><br>
				 <input type="submit" value="Submit" onclick = "return validate()">
				 <input type="reset" value="Reset">
		</form>   
	 </div>
	 <script>
		function validate(){
		var a=document.forms["messages"]["name"].value;
		var b=document.forms["messages"]["message"].value;
		var c=document.forms["messages"]["email"].value;
		if (a==null || a==""){
			alert("name must be filled out");
			return false;
		}
		if (b==null || b==""){
			alert("Message must be filled out");
			return false;
		}
		if (c==null || c==""){
			alert("email must be filled out");
			return false;
		}
    }
    </script>
	 </div>
	 </center>
</body>
</html>
