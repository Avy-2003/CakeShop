<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>

<?php

// Database connection details
$servername = "localhost:3306";
$username ="root";
$password = '';
$dbname = "cakeshop";

// Create connection
$conn = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($name)||isset($phone)||isset($email)||isset($angelcake)||isset($babicacake)||isset($cheesecake)||isset($strawberry1cake)||isset($strawberry2cake)||isset($pineapplecake)||isset($blackForestcake)||isset($chocolatecake)||isset($bourbancake)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Process cake items
    $angelcake = $_POST["angelcake"];
    $babicacake = $_POST["babicacake"];
    $cheesecake = $_POST["cheesecake"];
    $strawberry1cake = $_POST["strawberry1cake"];
    $strawberry2cake = $_POST["strawberry2cake"];
    $pineapplecake = $_POST["pineapplecake"];
    $blackForestcake = $_POST["blackforestcake"];
    $chocolatecake = $_POST["chocolatecake"];
    $bourbancake = $_POST["bourbancake"];



    if($angelcake == "") $angelcake=0;
    if($babicacake == "") $babicacake=0;
    if($cheesecake == "") $cheesecake=0;
    if($strawberry1cake == "") $strawberry1cake=0;
    if($strawberry2cake == "") $strawberry2cake=0;
    if($pineapplecake == "") $pineapplecake=0;
    if($blackforestcake == "") $blackforestcake=0;
    if($chocolatecake =="")  $chocolatecake=0;
    if($bourbancake == "") $bourbancake=0;

    $angel_cost=400*(int)$angelcake;
    $babica_cost=500*(int)$babicacake;
    $cheese_cost=600*(int)$cheesecake;
    $straw1_cost=450*(int)$strawberry1cake;
    $straw2_cost=300*(int)$strawberry2cake;
    $pine_cost=350*(int)$pineapplecake;
    $black_cost=400*(int)$blackforestcake;
    $choco_cost=550*(int)$chocolatecake;
    $bourban_cost=250*(int)$bourbancake;



     $total_cost = $angel_cost + $babica_cost+ $cheese_cost + $straw1_cost + $straw2_cost + $pine_cost + $black_cost + $choco_cost + $bourban_cost;

     $total_items = $angelcake + $babicacake + $cheesecake + $strawberry1cake + $strawberry2cake + $pineapplecake + $blackforestcake +$chocolatecake + $bourbancake ;


    // SQL query to insert data into the table
    $sql = "INSERT INTO cakeorder(`name`, `phone`, `email`, `total_items`,`total_cost`) VALUES ('$name', '$phone', '$email', '$total_items', '$total_cost')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


// Close the database connection
$conn->close();
}
?>

<h2>Order Summary</h2>

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>

<table>
  <tr>
    <th>Cake</th>
    <th>Quantity</th>
    <th>Total Price</th>
  </tr>
  <tr>
    <td>Angel Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>

  <tr>
  <td>Babica Cake Cake</td>
  <td><?php echo $angelcake; ?></td>
  <td><?php echo $angel_cost; ?></td>
</tr>
<tr>
    <td>Cheese Cake Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>
  <tr>
    <td>Strawberry-1 Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>
  <tr>
    <td>Strawberry-2 Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>
  <tr>
    <td>Pineapple Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>
  <tr>
    <td>Blackforest Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>
  <tr>
    <td>Chocolate Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost ;?></td>
  </tr>
  <tr>
    <td>Bourban Cake</td>
    <td><?php echo $angelcake; ?></td>
    <td><?php echo $angel_cost; ?></td>
  </tr>


</table>
<p><strong>Total Items:</strong> <?php echo $total_items; ?></p>
<p><strong>Total Cost:</strong> $<?php echo $total_cost; ?></p>

</body>
</html>