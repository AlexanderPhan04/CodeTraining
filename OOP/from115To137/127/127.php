<!-- OOP - hàm md5() -->
<?php
    class A
    {
        private $_username;
        private $_password;

        function getUserName()
        {
            return $this->_username;
        }

        function getPassword()
        {
            
        }

        function setUserName($username)
        {
            $this->_username = md5($username);
        }


    }

    $a = new A();
    $a->setUserName('Alex');
    echo $a->getUserName();
?>