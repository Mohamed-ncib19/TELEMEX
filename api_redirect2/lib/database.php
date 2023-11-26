<?php
class Database{
    private static $database_name ='teleme6060_telemex';
    private static $database_host = 'localhost';
    private static $database_user = 'teleme6060_telemex';
    private static $database_user_password = '%mzb1P?YkW4S';

    private static $connection_status = null;

    public function __construct(){
        die('Init function is not allowed');
    }

    public static function connect()
    {
        if(self::$connection_status == null)
        try{
           self::$connection_status = new PDO('mysql:host='.self::$database_host.';dbname='.self::$database_name.'', self::$database_user, self::$database_user_password);

        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection_status;
    }
    public static function disconnect()
    {
        self::$connection_status = null;
    }
}

?>