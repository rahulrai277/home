<html>
	<head>

		<title>Student Search | Rahul Rai </title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<meta name='author' content='Rahul Kumar'>
		<meta http-equiv='cache-control' content='public'>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta http-equiv='content-language' content='en-US'>
		<meta name='copyright' content='&copy; 2016 Rahul Kumar'>
		<meta name='keywords' content='student search iitk, student search, search iitk, search, rahul kumar, rahul kumar rai nauheed, rahul kumar rai nauheed iitk, rahul, rahul rai iitk, rahul kumar iitk, web developer, rahul kumar iitk student search, rahul rai student search iitk, coder, search engine'>
		<meta property='og:title' content='Student Search'>
		<meta property='og:type' content='website'>
		<meta property='og:site_name' content='Student Search'>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<script type="text/javascript">
		 function focusOnInput()
			{
		 		document.getElementById("sname").focus();
		 	}
 </script>	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43364785-4', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body onload="focusOnInput()" background="black.jpg">
<center>
<h1 style="backgroud:3.jpg;font-weight:bold;width:850px;color:yellow">STUDENT SEARCH
<p style='margin-left:795px;margin-top:-53px;padding-top:4px;padding-bottom:-2px'><img src ='rahul.jpg' height='60' width ='55'></p></h1></center> 
<h1 style="background:violet;width:850px">

<p style="padding-left:661.5px;padding-top:0px;margin-top:-2px;margin-bottom:0px">
<a href="http://home.iitk.ac.in/~rkrahul" style="text-decoration:none;background:red;color:white;cursor:pointer;margin-top:20px;box-shadow:0px 0px 1px rgb(216, 216, 216);font-size:16px;padding:5px;font-weight:bold;padding-left:20px;padding-right:20px;  ">Back To Homepage</a>
</p> 
<p style="padding-left:0px;padding-top:0px;margin-top:-18px;margin-bottom:0px;margin-left:-42px">
<a href="index.php" style="text-decoration:none;background:red;color:white;cursor:pointer;margin-top:20px;box-shadow:0px 0px 1px rgb(216, 216, 216);font-size:16px;padding:5px;font-weight:bold;padding-left:20px;padding-right:20px;">Home</a>
</p>


   <div id="searchform" style="width:850px">
<br>
			<form align="center" method="post" action="searchres.php">
		<p style="color:black;font-weight:bold;font-size:18px;margin-left:-550px"> Name of Student</p><br>
			
			<p style="margin-left:-571px;margin-top:-24px">
			<input type="text" name="sname" id="name" placeholder="Name of student" autofocus autocomplete='off' onKeyUp="result(this)" style="width:11%;"></p><br>
		<p style="color:black;font-weight:bold;font-size:18px;margin-left:355px;margin-top:-68px"> Roll No </p><br>
<br><br>
  
		<p style="margin-left:360px;margin-top:-56px">
				<input type="text" name="roll" id="roll" placeholder="Roll No" style="width:20%;">
				</p><br><br><br>
		<p style="color:black;font-weight:bold;font-size:19px;margin-left:-580px"> City</p><br>
 
		<p style="margin-left:-571px;margin-top:-23.5px">
				<input type="text" name="city" id="city" placeholder="City" style="width:11%;">
				</p><br><br><br>
<p style="color:black;font-weight:bold;font-size:19px;margin-left:335px;margin-top:-100px">Email</p><br>
<p style="margin-left:360px;margin-top:-23.5px">
			
				<input type='text' name='email' id="email" placeholder='Email' style="width:20%;">				
			</p><br><br><br>

			<p style="color:black;font-weight:bold;font-size:19px;margin-left:-580px"> Gender</p><br>
 
		<p style="margin-left:-571px;margin-top:-23.5px">
	
					<select name="gender" id="gender"  style="width:11%;">
						<option value="">Gender</option>
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
			</p><br><br><br>

				<p style="color:black;font-weight:bold;font-size:19px;margin-left:335px;margin-top:-102px">Batch</p><br>
<p style="margin-left:360px;margin-top:-23.5px">
					<select name="batch" id="batch" style="width:20%;">
					<option value="">Batch</option>
						<option value="y15">Y15</option>
						<option value="y14">Y14</option>
						<option value="y13">Y13</option>
						<option value="y12">Y12</option>
						<option value="y11">Y11</option>
						<option value="y10">Y10</option>
					</select>
</p><br><br><br>

		<p style="color:black;font-weight:bold;font-size:19px;margin-left:-580px"> Program</p><br>
 
		<p style="margin-left:-571px;margin-top:-23.5px">
					<select name="program" id="program" style="width:11%;">
						<option value="">Program</option>
						<option value='BTech'>BTech</option>
						<option value='MTech'>MTech</option>
						<option value='BS'>BS</option>
						<option value='MSc(2 yr)'>MSc(2 yr)</option>
						<option value='PhD'>PhD</option>
						<option value='PhD(Dual)'>PhD(Dual)</option>
						<option value='Ms-research'>MS-Research</option>
					</select>
</p><br><br><br>

		<p style="color:black;font-weight:bold;font-size:19px;margin-left:335px;margin-top:-102px">Hall</p><br>
<p style="margin-left:360px;margin-top:-23.5px">
					<select name="hall" id="hall" style="width:20%;">
						<option value="">Hall</option>
						<option value="Hall 1">Hall 1</option>
						<option value="Hall 2">Hall 2</option>
						<option value="Hall 3">Hall 3</option>
						<option value="Hall 4">Hall 4</option>
						<option value="Hall 5">Hall 5</option>
						<option value="Hall 6">Hall 6</option>
						<option value="Hall 7">Hall 7</option>
						<option value="Hall 8">Hall 8</option>
						<option value="Hall 9">Hall 9</option>
						<option value="Hall 10">Hall 10</option>
						<option value="Hall 11">Hall 11</option>
						<option value="Gh">GH</option>
					</select>
</p><br><br><br>
<p style="color:black;font-weight:bold;font-size:19px;margin-left:-580px"> Department</p><br>
 
		<p style="margin-left:-571px;margin-top:-23.5px">
					<select name="dept" id="dept" style="width:11%;" >
						<option value="">Dept</option>
						<option value="AE">AE</option>
						<option value="BSBE">BSBE</option>
						<option value="CE">CE</option>
						<option value="CHE">CHE</option>
						<option value="CHM">CHM</option>
						<option value="CSE">CSE</option>
						<option value="DES">DES</option>
						<option value="ECO">ECO</option>
						<option value="EE">EE</option>
						<option value="EEM">EEM</option>
						<option value="ES">ES</option>
						<option value="HSS">HSS</option>
						<option value="IME">IME</option>
						<option value="LT">LT</option>
						<option value="ME">ME</option>
						<option value="MSE">MSE</option>
						<option value="MSP">MSP</option>
						<option value="MTH">MTH</option>
						<option value="NETP">NETP</option>
						<option value="PHY">PHY</option>
 						<option value="STATS">STATS</option>
						
						
						
						
						
					</select>
</p><br><br><br>
<p style="color:black;font-weight:bold;font-size:19px;margin-left:385px;margin-top:-102px">Blood Group</p><br>
<p style="margin-left:360px;margin-top:-23.5px">
					<select name="blood" id="blood"  style="width:20%;">
						<option value="">Blood Group</option>
						<option value="A&#43;">A+</option>
						<option value="A&#45;">A-</option>
						<option value="B&#43;">B+</option>
						<option value="B&#45;">B-</option>
						<option value="AB&#43;">AB+</option>
						<option value="AB&#45;">AB-</option>
						<option value="O&#43;">O+</option>
						<option value="O&#45;">O-</option>
					</select>
					
					</p><br><br><br><br><br>
					 


			<p style="margin-left:-98px;margin-top:20px;">
				
			<input type="submit" name="student_search" value="Search Student" style="font-size:16px;background:red;padding:5px;color:white;cursor:pointer;box-shadow:none;font-weight:bold;width:140px;">
				</form> </p>
			<br><br>

			</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 

			<table>
				<tr>
					<p style='background:Blue;box-shadow:0px 0px 1px rgb(216, 216, 216);padding:10px;text-align:center;margin-top:80px;font-weight:bold;position:fixed;bottom:0px;left:0px;right:0px;' >Designed and Developed By <a href="https://www.facebook.com/rahulkumarraynauheed" target='_blank' style='text-decoration:underline;background:;'>Rahul Kumar</a></p>
				</tr>
			</table>

	
		</body>
		</html>
