<?php


	include 'imageconnect.php';
	include 'index.php';

?>
<head>

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

<div id='info' align="center" style='margin-top: 130px;position:absolute;z-index:1; #F2F2F2;box-shadow: 0px 0px 5px rgb(123, 123, 123);width:100%;/* height: 100%; */'></div>
		
<?php
	if (isset($_POST['student_search'])) 
	{
	
		$name = trim(strtolower($_POST['sname']));
		$roll = trim(strtolower($_POST['roll']));
		$city = trim(strtolower($_POST['city']));
		$gender = trim(strtolower($_POST['gender']));
		$batch = trim(strtolower($_POST['batch']));
		$program = trim(strtolower($_POST['program']));
		$dept = trim(strtolower($_POST['dept']));
		$hall = trim(strtolower($_POST['hall']));
		$blood = trim(strtolower($_POST['blood']));
		$email = trim(strtolower($_POST['email']));
		
		$bigData = file_get_contents("data.txt");
		$bigDataArr = explode("\n", $bigData);
		$results = array();
		$dataTraceArr = array();
		$dataTraceCount = 0;

		$dataToEnter = $city."***".$gender."***".$batch."***".$program."***".$dept."***".$hall."***".$blood;

		

		foreach($bigDataArr as $singleData)
		{	
			$singleDataArr = explode("***", $singleData);

			if($roll != "")
			{
				array_push($dataTraceArr, $roll);
				if($singleDataArr[0] == $roll)
				{
					array_push($results, $singleDataArr);
				}
			}
			elseif($email != "")
			{
				array_push($dataTraceArr, $email);
				if($email == @$singleDataArr[7])
				{
					array_push($results, $singleDataArr);
				}	
			}
			else
			{
				$track = 0;

				if($name != "")
				{
					array_push($dataTraceArr, $name);
					if(strtolower($name) == strtolower(@$singleDataArr[1]) || $name == strtolower(@$singleDataArr[2]) || $name == strtolower(@$singleDataArr[3]))
					{
						array_push($results, $singleDataArr);
						$track = 1;
					}
					else
					{
						continue;
					}
				}
				if($city != "")
				{
					array_push($dataTraceArr, $city);
					if(strtolower($city) == strtolower(trim(@$singleDataArr[12])))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}	
				}
				if($dept != "")
				{
					array_push($dataTraceArr, $dept);
					if($dept == strtolower(@$singleDataArr[5]))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($hall != "")
				{
					array_push($dataTraceArr, $hall);
					if($hall == strtolower(substr(@$singleDataArr[6], 0, strpos(@$singleDataArr[6], ','))))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($batch != "")
				{
					array_push($dataTraceArr, $batch);
					if($batch == "y".substr(@$singleDataArr[0], 0, 2))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}

						continue;
					}
				}
				if($gender != "")
				{
					array_push($dataTraceArr, $gender);
					if($gender == strtolower(@$singleDataArr[9]))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($program != "")
				{
					array_push($dataTraceArr, $program);
					if($program == strtolower(@$singleDataArr[4]))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($blood != "")
				{
					array_push($dataTraceArr, $blood);
					if($blood == strtolower(@$singleDataArr[8]))
					{
						if($track != 1)
						{
							array_push($results, $singleDataArr);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}			}
		}
	}		
			$num = count($results);	
	
			echo "<div id='serres' style='' align='center' >";
					
					if($num === 1)
					{
						$rowdet = $results[0];
						echo "<script>
								window.location = 'profile.php?view=$rowdet[0]'
							  </script>";
					
					}
					
					else if($num!=0 && $num !=1)
					{
					


						echo "<div align='center' style='margin-top:200px;margin-left:-114px;margin-right:-80px;margin-bottom:50px;'>
                  				<h3 style='margin-top:20px;padding:10px;width:850px;background:yellow;opacity:1.0;color:green;font-size:28px;'>$num Results</h3>";
						$mailinglist = "";

						foreach($results as $result)
						{
						
							$row = $result;
							$batch = "y".substr($row[0], 0, 2);
						
							$title = "$row[1]\n$batch\n$row[5]";
							
							$url = getImageSearch($row[0]);
							
							if($row[2] == $row[3])
							{
								$showname = $row[1];
							}
							else
							{
								$showname = $row[2]." ".$row[3];
							}

							$namelength = strlen($row[1]);
							
							if($row[7] == "Not Available")
							{
								$mailinglist .= "";							
							}
							else
							{
								$mailinglist = $mailinglist."<span>".$row[7]."@iitk.ac.in</span>, ";
							}
							
							$mlist = substr($mailinglist, 0, strlen($mailinglist)-2);
							
							echo 
										"<div id='singleimage'  style='display:inline-block;margin:10px;margin-bottom:0px;background:white;box-shadow:0px 0px 2px grey;border:5px solid white;'>
											<a href='profile.php?view=$row[0]'  title='$title' style='color:black;text-decoration:none;'>
												$url
												<div style='margin:0px auto;text-align:center;background:white;font-size:13px;font-weight:bold;'>$showname<br>$batch&nbsp;&nbsp;$row[5]</div>
											</a>
										 </div>";
						}
				
						echo "</div><br><br><br><br><br><br><br>";
					}
					elseif($num == 0)
					{	

						echo "<p style='margin-top:200px;color:yellow'>No results found.</p>";
					}

				
?>
