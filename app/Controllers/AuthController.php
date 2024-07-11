<?php
session_start();
include_once 'config/Database.php';
include_once 'models/User.php';

class AuthController {
    private $db;
    private $user;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->user->username = $_POST['username'];
            $stmt = $this->user->login();
            $num = $stmt->rowCount();

            if ($num > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($_POST['password'], $row['password'])) {
                    $_SESSION['username'] = $this->user->username;
                    header("Location: welcome.php");
                } else {
                    echo "Password salah";
                }
            } else {
                echo "Username tidak ditemukan";
            }
        }
    }

    public function logout() {
        session_destroy();
        header("Location: login.php");
    }
}
?>
