<?php

namespace Api\model;

use Api\model\User;

class UserFind extends User
{

    public static function select($id)
    {

        $conn = ConectionFactory::getConnection();
        $sql = 'SELECT * FROM '.self::$table.'  WHERE `id` = :id;';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception('Not Found');
        }

    }

    public static function selectAll()
    {

        $conn = ConectionFactory::getConnection();
        $sql = "SELECT * FROM ".self::$table;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

    }

}
