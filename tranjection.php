
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>History</title>
</head>
<body>
	<h1>Page2 [Transaction History]</h1>
	<h2>Digital Wallet</h2>
	<br>
	<p>1-<a href="http://localhost/digital-wallet/home.php">Home</a></p>
	<p>2- <a href="http://localhost/digital-wallet/tranjection.php">Transaction History</a></p>
    <br>
    
    <h2>Fund Transfer</h2>
    <br><br>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #d2d9db;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #d2d9db;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Transaction Category</th>
    <th>To</th>
    <th>Amount</th>
  </tr>


<?php   
                          $data = file_get_contents("data1.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["category"].'</td>
                               <td>'.$row["phone"].'</td>
                               <td>'.$row["amount"].'</td>
                               </tr>';  
                          }  
                          ?>  



  
 
</table>