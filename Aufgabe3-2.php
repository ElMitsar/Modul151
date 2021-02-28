getConnection();


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

