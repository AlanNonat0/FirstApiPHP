<?php

namespace Api\model;

use PDO;

class ConectionFactory
{
    private static $instance;

    public static function getConnection()
    {
        try {
            if (!self::$instance) {
                self::$instance = new \PDO(
                    DB['DRIVER'] . ": dbhost=" . DB['HOST'] . "; dbname=" . DB['NAME']."; port=".DB['PORT'],
                    DB['USER'],
                    DB['PASSWORD'],
                    DB['OPTIONS']
                );
            }

            return self::$instance;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
