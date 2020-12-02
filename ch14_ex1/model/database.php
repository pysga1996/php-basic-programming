<?php
class Database {
	private static string $dsn = 'mysql:host=127.0.0.1;dbname=my_guitar_shop1';
	private static string $username = 'mgs_user';
	private static string $password = 'pa55word';
	private static PDO $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>