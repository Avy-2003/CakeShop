<?php
// Check if form is submitted
if(isset($customer_name)||isset($cake_flavor)||isset($quantity)||isset($total_price)){
    // Collect form data
    $customer_name = $_POST['customer_name'];
    $cake_flavor = $_POST['cake_flavor'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];
    
    // Generate bill content
    $bill_content = "Customer Name: " . $customer_name . "\n";
    $bill_content .= "Cake Flavor: " . $cake_flavor . "\n";
    $bill_content .= "Quantity: " . $quantity . "\n";
    $bill_content .= "Total Price: " . $total_price . "\n";
    
    // Set headers for file download
    header("Content-disposition: attachment; filename=cake_bill.txt");
    header("Content-type: text/plain");
    
    // Output the bill content
    echo $bill_content;
    exit;
}

?>