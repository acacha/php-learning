<?php



/**
 * Class Connection
 */
class Connection
{

    /**
     * @return PDO
     */
    public static function make($config,$message) {

        try {
            $pdo = new PDO(
                $config['dbtype'] . ':host='.
                $config['dbhost'] . ';dbname=' .
                $config['dbname'],
                $config['username'],
                $config['password']);

            return $pdo;
        } catch (PDOException $e) {
            die( $message['DatabaseErrorConnection'] . $e->getMessage());
        }
    }


}