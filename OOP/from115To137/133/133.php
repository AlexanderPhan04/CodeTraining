<!-- OOP - function final -->
<?php
    class students
    {
        final function introduce()
        {
            echo 'hi im student';
        }
    }

    class student extends students
    {
        // function introduce()
        // {
        //     echo 'hi';
        // }
    }

    $Alex = new student();
    $Alex->introduce();
?>