
<html>
<style>
body{
	background-color:#f5f5ef
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<?php
$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'database1');
	$get= "SELECT `weight` FROM `table1` WHERE 1";
	$sql=mysqli_query($con,$get);
	$sum=0;
	while($row=mysqli_fetch_assoc($sql))
	{
		foreach ($row as $field) 
		{
			$sum=$sum+$field;
		}
	}
?>
<script type="text/javascript">
	function display()
{
	var myImg = document.getElementById("imge");
     document.getElementById('imge').src="slim.jpg";
	 myImg.style.width = "125px";
	var val = "<?php echo $sum ?>";			
	document.getElementById("demo").innerHTML="Congratulations!you have lost "+val+" kgs overall"; 
}
</script>
	
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<center><h1 id="demo" class="center">you have not lost any kgs</h1></center><br><br>
    <img src="fat.jpg" id="imge" width="300" class="center">

<form action="weight.php" method='POST'>
        <button type="button" name="click" onclick="display()"class="center button">Click me to know the weight loss</button>		
</form>
</body>
</html>