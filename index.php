<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Number Display in JS</title>
  </head>
  <body>
   <center>
    <h1>NumberDisplay in JS</h1>
		<h3>This program will display all numbers from  0 up to your number:</h3>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="result">		
						<label for="userNum">Enter a Number:</label>
						<input type="number" step="1" min="0" name="userNum" id="userNum"><br><br>		
						<input type="submit" value="Display Numbers">
					</form>
				</td>
				<td valign="top" align="left">
					<img src="./images/numbers.jpg" alt="Numbers" width="40%">
				</td>
			</tr>
		</table>	
		<!-- Iframe for results -->
    	<iframe id="result" name="result">
    	</iframe>
   </center>
  </body>
</html>
