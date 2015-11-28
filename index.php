
<html>

	<head>
		<title>::Baby Names::</title>
		<link rel='stylesheet' href='style.css' />
	</head>

	<body>

	<h1 align="center" style="margin:10px;color:#8b0000">
		BABY NAME FINDER
	</h1>
	<hr style="width:40%">

	<table width='90%' style="margin:auto;padding:20px;box-sizing:border-box" border=0>
	 <tr>
	 	<td width="50%" align="center" style="border-right:solid #ffccee 1px;padding-right:20px;vertical-align:top">
	 		<div style="background-color:#ddd;padding:7px;font-size:18px;font-weight:bold;border:solid #00ffff 2px">
	 			Popular Names by  Year of birth
	 		</div>

	 		<div style="background-color:#fff;padding:30px 10px;font-size:16px;font-weight:bold;border:solid #00ffff 2px">
	 			
	 			<form action='by_year.php' method='post'  >
	 				<table align="center">
	 					<tr>
	 						<td align="left" class="home-table-td" >
	 							Year:
	 						</td>
	 						<td align="left">
	 							<input type='text' name='year' placeholder='Enter a year between 1944 to 2013' size="40" />
	 						</td>
	 					</tr>
	 					<tr>
	 						<td align="left" class="home-table-td">
	 							Number Of Results:
	 						</td>
	 						<td align="left">
	 							<input type='text' name='limit' placeholder='Enter the number of ranks to show' size="40" />
	 						</td>
	 					</tr>
	 					<tr>
	 						<td align="left" class="home-table-td">
	 							Gender:
	 						</td>
	 						<td align="left">
	 							<select name="gender">
	 								<option value='male' >Male</option>
	 								<option value='female' >Female</option>
	 								<option value='both' >Both</option>
	 							</select>
	 						</td>
	 					</tr>
	 					<tr>
	 						<td colspan="2" align="center">
	 							<button class='home-submit' >Submit</button>
	 						</td>
	 					</tr>

						<?php
	 						if(!empty($_GET['errorType']) && $_GET['errorType']==1 && !empty($_GET['error']))
	 						{
	 					?>
						<tr>
	 						<td colspan="2" align="center">
	 							<div style="margin:auto;color:#ccff2c">
	 								<?php echo $_GET['error']; ?>
	 							</div>
	 						</td>
	 					</tr>	
	 					<?php } ?>

	 				</table>
	 			</form>

	 		</div>
	 	</td>
	 	<td width="50%" align="center" style="padding-left:20px;vertical-align:top">
	 		<div style="background-color:#008b8b;padding:7px;font-size:18px;font-weight:bold;border:solid #a9a9a9 2px">
	 			Change In Popularity Of A Name Over Years
	 		</div>
	 		<div style="background-color:#ffffff;padding:30px 10px;font-size:16px;font-weight:bold;border:solid #222 2px">
	 			
				<form action='by_name.php' method='post'  >
	 				<table align="center">
	 					<tr>
	 						<td align="left" class="home-table-td" >
	 							Name:
	 						</td>
	 						<td align="left">
	 							<input type='text' name='name' placeholder='Enter a full or partial name to search for' size="30" />
	 						</td>
	 					</tr>
	 					<tr>
	 						<td align="left" class="home-table-td">
	 							Start Year:
	 						</td>
	 						<td align="left">
	 							<input type='text' name='year' placeholder='Enter the begining year' size="30" />
	 						</td>
	 					</tr>
	 					<tr>
	 						<td align="left" class="home-table-td">
	 							Gender:
	 						</td>
	 						<td align="left">
	 							<select name="gender" >
	 								<option value='male' >Male</option>
	 								<option value='female' >Female</option>
	 							</select>
	 						</td>
	 					</tr>
	 					<tr>
	 						<td colspan="2" align="center">
	 							<button class='home-submit' >Submit</button>
	 						</td>
	 					</tr>

	 					<?php
	 						if(!empty($_GET['errorType']) && $_GET['errorType']==2 && !empty($_GET['error']))
	 						{
	 					?>
						<tr>
	 						<td colspan="2" align="center">
	 							<div style="margin:auto;color:#c22">
	 								<?php echo $_GET['error']; ?>
	 							</div>
	 						</td>
	 					</tr>	
	 					<?php } ?>
	 				</table>
	 			</form>

	 		</div>
	 	</td>
	 </tr>
	</table>

	</body>

</html>	
