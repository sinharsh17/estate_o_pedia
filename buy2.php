<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="style.css">

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
<html>
<head>
  <title>My Table</title>

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
  </style>
  
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Neighbourhood</th>
        <th>City</th>
        <th>Minimum Expected Price</th>
        <th>Maximum Expected Price</th>
        <th>Property Status</th>
        <th>Property Type</th>
        <th>BHK</th>
        <th>Amenities</th>
        <th>Bathrooms</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $row): ?>
        <tr>
          <td><?php echo $row['neighbourhood']; ?></td>
          <td><?php echo $row['city']; ?></td>
          <td><?php echo $row['minimum_expected_price']; ?></td>
          <td><?php echo $row['maximum_expected_price']; ?></td>
          <td><?php echo $row['property_status']; ?></td>
          <td><?php echo $row['property_type']; ?></td>
          <td><?php echo $row['bhk']; ?></td>
          <td><?php echo $row['amenities']; ?></td>
          <td><?php echo $row['bathrooms']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
