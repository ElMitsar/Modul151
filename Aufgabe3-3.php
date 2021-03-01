<?php
getConnection();

$state = $_GET['a'];
$user = $_GET['b'];
$order = $_GET['c'];
$newquery = $_GET['d'];

if ($user != undefined) {
	    $sql = "SELECT * FROM customers, orders, employees, purchase_orders, purchase_orders_details WHERE customers.id = orders.customer_id AND orders.employee_id = employees.id AND purchase_orders.id = purchase_orders_details.id AND customers.id = $user";
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
}

if ($user != undefined) {
	 $sql = "ALTER TABLE purchase_order_details DROP COLUMN FROM customers, orders, employees, purchase_orders, purchase_orders_details WHERE customers.id = orders.customer_id AND orders.employee_id = employees.id AND purchase_orders.id = purchase_orders_details.id AND customers.id = $delete";
}

if ($newquery != undefined) {
	$sql = $newquery;
}


function getConnection() {
    $servername = "localhost";
	$username = "vmadmin";
	$password = "sml12345";
	$database = "northwind";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

$db = DB::get($this->pdo);

function confirmOrder() {
    $c = $this->getConnection();

    if ($hasRunningTransaction != true) {
    $c->exec("START TRANSACTION");
    }
    else { throw new Exception("Multiple Transactions are not supported"); }

    private $hasRunningTransaction = true;

    try {
        // Stelle die Bestellung auf bestätigt
        $stmt = $c->prepare("UPDATE orders SET status = :status WHERE id = :id");
        $stmt->execute(array([
            ":status" => "confirmed",
            ":id" => $this->getId()
        ]));

        // Passe die Lagerbestände der Produkte an
        foreach ($this->getProducts() as $product) {
            $stmt = $c->prepare("UPDATE products SET stock = stock - :quantity WHERE id = :id");
            $stmt->execute(array([
                ":quantity" => $product->getAmount(),
                ":id" => $product->getId()
            ]));
        }

        $c->exec("COMMIT");
    }
    catch (\Exception $e) {
        $c->exec("ROLLBACK");
        throw $e;
    }
}

function cancelOrder() {
    $db = DB::get();

    try {
        $db->startTransaction();

        $db->execute("UPDATE orders SET status = :status WHERE id = :id", [":status" => "cancelled", ":id" => $this->getId()]);

        foreach ($this->getProducts() as $product) {
            $db->execute("UPDATE products SET stock = stock + :quantity WHERE id = :id", [":quantity" => $product->getQuantity(), ":id" => $product->getId()]);
        }

        $db->commit();
    }
    catch (\Exception $e) {
        $db->rollback();
        throw $e;
    }
}

function startTransaction() {
    $db->beginTransaction();

    try {
            $this->pdo = new PDO();
        } catch (PDOException $e) {
            $db->rollback();
        }
}

function commitTransaction() {
    public mysqli::commit ( int $flags = 0 , string $name = ? ) : bool;
}

function rollbackTransaction() {
    query($sql, $params);

    select($sql, $params);

    $returnValue = [
    0 => ["id" => 1, "name" => "Markus"],
    1 => ["id" => 2, "name" => "Fabian"],
    2 => ["id" => 3, "name" => "Maria"],
    3 => ["id" => 4, "name" => "Hans"]
]

public function __destruct()
{
    public PDO::inTransaction ( ) : bool
    if (inTransaction == true) {  odbc_close_all ( ) : void; }
}

}

echo "<a href='/?a=1'>Alle Benutzer auflisten</a>"
echo "<a href='/?a=2'>Alle Bestellungen eines Benutzers einsehen</a>"
echo "<a href='/?a=3'>Einzelne Bestellungen löschen</a>"
echo "<a href='/?a=4'>Daten des Benutzers bearbeiten</a>"

if ($state = '1') { 
startTransaction();

$sql = "SELECT * FROM customers";
foreach ($conn->query($sql) as $row) {
   echo $row['first_name']."<br />";
   echo $row['last_name']."<br />";
   echo $row['company']."<br />";
   echo $row['email_address']."<br />";
   echo $row['job_title']."<br />";
   echo $row['business_phone']."<br />";
   echo $row['home_phone']."<br />";
   echo $row['mobile_phone']."<br />";
   echo $row['fax_number']."<br />";
   echo $row['adress']."<br />";
   echo $row['city']."<br />";
   echo $row['state_province']."<br /><br />";
}
}
if ($state = '2') {
	<script>
	alert('gewünschter Name eingeben');
	function user() {
		value = document.getElementById(text);
		eval ('window.location = '?b=' + value +; ');
	}
	</script>
	<textarea id='text' name='text' ></textarea> 	
      <input onclick='user()' value="Senden" />
}
if ($state = '3') {
	<script>
	alert('gewünschte Bestellung eingeben');
	function user() {
		value = document.getElementById(text);
		eval ('window.location = '?c=' + value +; ');
	}
	</script>
	<textarea id='text' name='text' ></textarea> 	
    <input onclick='user()' value="Senden" />
}
if ($state = '4') {
	<script>
	alert('Gewünschtes SQL Query eingeben um Daten zu verändern');
	function user() {
		value = document.getElementById(text);
		eval ('window.location = '?d=' + value +; ');
	}
	</script>
	<textarea id='text' name='text' ></textarea> 	
      <input onclick='user()' value="Senden" />
}
?>
