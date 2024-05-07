<?php
require_once 'Connection.php';
class Product
{
    private int $id;
    private string $item_code;
    private string $item_des;
    private float $unit_price;
    private int $discount;

    public function __construct(string $code, string $desig, float $price, int $discount=0)
    {
        $this->item_code = $code;
        $this->item_des = $desig;
        $this->unit_price = $price;
        $this->discount = $discount;
    }
    
    public function addProduct()
    {
        $query = "insert into product(item_code, item_des, unit_price, discount)
                values('$this->item_code', '$this->item_des', $this->unit_price, $this->discount)";
        try {
            $con = Connection::getConnection();
            $con->exec($query);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public static function getAllProducts()
    {
        $query = "select * from product";
        $con = Connection::getConnection();
        $stmt = $con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}