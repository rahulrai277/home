
<?php 

	
	include "imageconnect.php";
		
	include 'index.php';
?>
		
	<body background="profile.jpg">
		<!-- headergoeshere -->
<div id='info' align="center" style='margin-top:10%;position:absolute;z-index:1;background:#EEFFEE;box-shadow:0px 0px 5px black;min-width:100%;'></div>

	<?php

				
				echo "<div id='studimages'  style='margin-top:180px;margin-left:70px;margin-right:70px;'>";			
							
				if(isset($_GET['view']))
				{
					$view = $_GET['view'];
					file_put_contents("hits.txt", $ip. "***" . date("l") . ", " . date("F j, Y, g:i a") . "***" . $view."\n", FILE_APPEND | LOCK_EX);
					
					if($view!="")
					{
			
						$bigData = file_get_contents("data.txt");

						$startpos = strpos($bigData, "\n"."".$view) + 1;
						
						if($startpos === false)
						{

						   echo "Looks like you have entered a wrong url!!";

						}
						else
						{

							$endpos = strpos($bigData, "\n", $startpos);
							$resultStr = substr($bigData, $startpos, $endpos - $startpos);
							
							$row = explode("***", $resultStr);
				
							$studentid = $row[0];
							$name = $row[1];

							$hall = substr($row[6], 0, strpos($row[6], ","));
								
							$url = getImageprofile($row[0]);
							$city = trim($row[12]);

							if($row[7] == "Not Available")
							{
								$email = "Not Available";
								$web = "#";							
							}
							else
							{
								$email = $row[7]."@iitk.ac.in";
								$web = "http://home.iitk.ac.in/~".$row[7];
							}
				
							if(!$row[8])
							{
								$row[8] = 'Not Available';
							}
					
							if(!$row[4])
							{
								$row[4] = 'None';
							}
				
							$namelength = strlen($row[1]);
					
							if($namelength >= 22)
							{
								$width = '190px';
							}
							elseif($namelength > 17 and $namelength<22)
							{
									$width = '160px';
							}
							else
							{
									$width = '130px';
							}

							$hometown = $row[10];
				
							echo "<table align=center style='margin:10px auto;margin-bottom:0px;' cellspacing='1'>		
									<tr align=center>";
							
							echo "<a href='http://home.iitk.ac.in/~$row[7]' target='_blank'>
											<td id='imagebox' style='background:white;box-shadow:0px 0px 1px grey ;min-width:150px;margin-left:5px;'>
												$url
											<p id='imagelayer'>$row[1]<br>$row[0]</p>
							
											</td></a>";
							
							
								echo"<td style='padding:6px;padding-left:6px;width:400px;min-width:500px;text-align:left;background:pink;box-shadow:0px 0px 1px green ;margin:4px;font-family:Lato;'>";
									
								$batch = "y".substr($row[0], 0, 2);
							
								echo "<div id='variables' style=''>
										<li>Name</li><hr>
										<li>Roll No</li><hr>
										<li>Batch</li><hr>
										<li>Gender</li><hr>
										<li>Program</li><hr>
										<li>Department</li><hr>
										<li>IITK Address</li><hr>
										<li>Hometown</li><hr>
										<li>Email</li><hr>
										<li>Blood Group</li><hr>
										<li><a href='http://172.26.142.68/examscheduler/personal_schedule.php?rollno=$row[0]' target='_blank' style='text-decoration:none;background:grey;color:white;cursor:pointer;margin-top:5px;box-shadow:0px 0px 1px rgb(216, 216, 216);font-size:16px;padding:5px;font-weight:bold;padding-left:20px;padding-right:20px;padding-bottom:3px;'>Mid-Sem Schedule</a></li><hr>

										
									  </div>";
								
							
								echo "<div id='values'>
										<li>$row[1]</li><hr>
										<li>$row[0]</li><hr>
										<li>$batch</li><hr>
										<li>$row[9]</li><hr>
										<li>$row[4]</li><hr>
										<li>$row[5]</li><hr>
										<li>$row[6]</li><hr>
										<li>$city</li><hr>
										<li><a href='mailto:$email' style='font-size:17px;text-decoration:none;background:white;'>$email</li></a><hr>
										<li>$row[8]</li><hr>
										<li style='padding-left:16px;padding-top:0px'><a href='http://172.26.142.68/examscheduler2/personal_schedule.php?rollno=$row[0]' target='_blank' style='text-decoration:none;background:grey;color:white;cursor:pointer;margin-top:5px;box-shadow:0px 0px 1px rgb(216, 216, 216);font-size:16px;padding:5px;font-weight:bold;padding-left:20px;padding-right:20px;padding-bottom:3px'>End-Sem Schedule</a></li><hr>

										
										

	        								
									  </div>";
								  
								  
								echo"</td>";
echo"</tr>";
						
						
								echo"</table>"; 



								$facebook = "https://www.facebook.com/search/results.php?q=$row[1]&type=users&ed=iit kanpur";
								
								
								echo "<a href='$web' target='_blank'><p style='margin-left:240px'><img src ='webpage.jpg' height='50' width ='50'></p></a>
<a href='$facebook' target='_blank'><p style='margin-left:300px;margin-top:-49px'><img src ='fb.jpg' height='50' width ='50'></p>
							 </a>
							 <a href='https://plus.google.com/s/$row[1]/people' target='_blank'>
								<p style='margin-left:360px;margin-top:-54px'><img src ='google+.jpg' height='60' width ='60'></p>
							 </a>
							 <a href='https://twitter.com/search?q=$row[1]&mode=users' target='_blank'>
							 <p style='margin-left:424px;margin-top:-56px'><img src ='twitter.jpg' height='50' width ='50'></p>
							 </a>
							 <a href='http://www.linkedin.com/vsearch/p?keywords=$row[1]' target='_blank'>
							 <p style='margin-left:484px;margin-top:-50px'><img src ='linkdin.jpg' height='53' width ='53'></p>
							</a> 
								<a href='https://www.quora.com/search?q=$row[1]' target='_blank'>
							 <p style='margin-left:544px;margin-top:-51.6px'><img src ='quora.jpg' height='50' width ='50'></p>
							</a><br>
							 ";


								
								 
			
			
			
					
		}
	}
}
?>
			
		</div>			
	</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43364785-4', 'auto');
  ga('send', 'pageview');

</script>
</html>
