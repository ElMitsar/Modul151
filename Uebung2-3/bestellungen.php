<?php
$id = $_GET['id'];
$delete = $_GET['delete'];
if (is_numeric($id)){ // XSS Angriffsschutz
$sql = "SELECT * FROM customers, orders, employees, purchase_orders, purchase_orders_details WHERE customers.id = orders.customer_id AND orders.employee_id = employees.id AND purchase_orders.id = purchase_orders_details.id AND customers.id = $id";
foreach ($conn->query($sql) as $row) {
   echo $row['id']."<br />";
   echo '<a href="'.$row['id'].'">loeschen</a>';
   echo $row['purchase_order_id']."<br />";
   echo $row['product_id']."<br />";
   echo $row['quantity']."<br />";
   echo $row['unit_costs']."<br />";
   echo $row['date_received']."<br />";
   echo $row['posted_to_inventory']."<br />";
   echo $row['inventory_id']."<br /><br />";
}
if (is_numeric($delete)) {
    $sql = "ALTER TABLE purchase_order_details DROP COLUMN FROM customers, orders, employees, purchase_orders, purchase_orders_details WHERE customers.id = orders.customer_id AND orders.employee_id = employees.id AND purchase_orders.id = purchase_orders_details.id AND customers.id = $delete";
foreach ($conn->query($sql) as $row) {
   echo $row['id']."<br />";
}
}
?>