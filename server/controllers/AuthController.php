<?php


    class AuthController {

        public function login(DB $db)
        {
            $id = $_GET['user_id'];
            $allUsers = $db->query('SELECT * FROM users WHERE id = :id', array(':id' => $id));
            echo json_encode($allUsers);
        }

        public function logout()
        {
            echo 'LOGOUT';
        }
    }

?>