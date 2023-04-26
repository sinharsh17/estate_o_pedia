<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estate_o_pedia";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// Query data from table
$sql = "SELECT neighbourhood,city,minimum_expected_price,maximum_expected_price,property_status,property_type,bhk,amenities,bathrooms FROM sell";
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

// Store data in an array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .property {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.property img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  margin-right: 20px;
  margin-bottom: 20px;
}

.property .details {
  flex-grow: 1;
}

.property h2 {
  font-size: 24px;
  margin-top: 0;
}

.property .location {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.property .description {
  margin-bottom: 20px;
}

.property .price {
  font-size: 24px;
  font-weight: bold;
  color: #007bff;
  margin-bottom: 0;
}
    </style>

</head>
<body>
<div class="property">
  <img src="property-image.jpg" alt="Property Image">
  <div class="details">
    <h2>Property Name</h2>
    <p class="location">Location</p>
    <p class="description">Property description goes here. This can be a short or long description depending on the property.</p>
    <p class="price">$1,000,000</p>
  </div>
</div>

</body>
</html>