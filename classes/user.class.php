<?php
class User extends Database {
    public function checkLogin($username, $password){
        try {
            $query = $this->db->prepare("SELECT * FROM admin_credentials WHERE username=:username LIMIT 1");
            $query->execute(array(':username'=>$username));
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if($query->rowCount() > 0) {
                if(password_verify($password, $row['password'])) {
                    $_SESSION['user_session'] = $row['id'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}