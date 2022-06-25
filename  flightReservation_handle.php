<html>
<head>	
	<title>Your Feedback</title></head>
<body>
<?php
$pr=5000;
$numOfTic=$_POST['Tickets'];
$Total;
$Total=($pr*$numOfTic);
print "Thank you {$_POST['title']} {$_POST['fname']} {$_POST['lname']} You requested a flight on {$_POST['day']} of {$_POST['Month']} {$_POST['Year']} form {$_POST['origin']}  To  {$_POST['Destination']} . The total price for your tickets is SR  $Total 
Please find below the flight schedule on that day.";
?>
<br/>
<br/>
<table style="width:50%" border="1">
  <tr>
    <th>Flight Time</th>
    <th>Flight Duration</th>
    <th>Stops</th>
  </tr>
  <tr>
    <td>7pm</td>
    <td>1h 30m</td>
    <td>0</td>
  </tr>
  <tr>
    <td>8pm</td>
    <td>1h 30m</td>
    <td>1</td>
  </tr>
<tr>
    <td>9pm</td>
    <td>1h 30m</td>
    <td>0</td>
  </tr>
</table>
</body>
</html>