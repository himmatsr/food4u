<?php

function setcomment($con){
	if(isset($_POST['commetsubmit']))
	{
		$date=$_POST['date'];
		$emailid=$_POST['emailid'];
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		
		$sql="INSERT INTO comment (date,eamilid,name,comment)
		values ('$date','$eamilid','$name','$comment')";
		$result=$con->query($sql);
	}
}

?>