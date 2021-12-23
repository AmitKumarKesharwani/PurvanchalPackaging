<?php
$conn=mysqli_connect("localhost","root","","purvanchal_packaging");
  if(!$conn)
  {
	  echo "bhag yaha se galat hai tera ";
  }
  else
  {
	// echo " hurrah youe code was correct";
  }
	$a=$_POST['Name'];
	echo $a;
	echo"<br/>";
	$b=$_POST['Number'];
	echo $b;
	echo"<br/>";
	$c=$_POST['Messege'];
	echo $c;
	echo"<br/>";
  $ins="insert into contact (Name,Number,Messege) values('$a','$b','$c')";
   if(mysqli_query($conn,$ins))
   {
  	 header("location:index.php");
   }
   else
   {
  	 echo " data is not inserted";
   }

  ?>
