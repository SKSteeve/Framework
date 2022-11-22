<?php

namespace App\Models;

use App\Providers\Interfaces\IModel;
use App\Providers\PDODatabase;

class BaseModel implements IModel
{
    private $pdo;
    protected $table = '';

    public function __construct()
    {
        $pdoDatabase = PDODatabase::getConn();
        $this->pdo = $pdoDatabase->getPDO();
    }

    /**
     * @param $id
     * @return bool
     */
    public function find($id)
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table . ' WHERE id=' . $id . ' LIMIT 1')->fetchAll()[0];
    }

    /**
     * @param array $values
     * @return bool|mixed
     */
    public function create(array $values): bool
    {
        $columns = implode(',', array_keys($values));
        $countPreps = count($values);
        $preps = [];
        for($i = 0; $i < $countPreps; $i++) {
            $preps[] = '?';
        }
        $preps = implode(',', $preps);

        $sql = "INSERT INTO ". $this->table ." (". $columns .") VALUES (". $preps .")";
        return $this->pdo->prepare($sql)->execute(array_values($values));
    }

    /**
     * @param int $id
     * @param array $args
     * @return bool
     */
    public function update(int $id, array $args): bool
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }

}