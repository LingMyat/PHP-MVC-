<?php 

class QueryBuilder{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function all($table){
    $stmt = $this->pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function create($dataArr,$table){
        $cols = implode(",",array_keys($dataArr));//array to string
        $qty = '';
        for ($i=0; $i < count(array_keys($dataArr)) ; $i++) { 
            $qty .= '?,';// in php we use .= for string in js we use += ;
        };
        $colValues = rtrim($qty,',');
        $sql = "INSERT INTO $table ($cols) VALUES ($colValues)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_values($dataArr));// execute accept only array when query accept only strings;
    }
}