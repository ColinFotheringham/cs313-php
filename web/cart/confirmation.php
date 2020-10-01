
<?php
session_start();

            echo "<h2>Your purchase has been complete!</h2>";
            echo $_SESSION["computer"] . " computer(s) has been purchased<br>";
            echo $_SESSION["mouse"] . " mouse(s) has been purchased<br>";
            echo $_SESSION["keyboard"] . " Keyboard(s) has been purchased<br>";
            echo $_SESSION["laptop"] . " laptop(s) has been purchased<br><br>";
            echo "Delivery sent to:<br>";
            echo $_POST["street"] . "<br>";
            echo $_POST["city"]. ", " . $_POST["state"] . " " . $_POST["zip"];

            unset($_SESSION['computer']);
            unset($_SESSION['mouse']);
            unset($_SESSION['keyboard']);
            unset($_SESSION['laptop']);

            session_destroy();
            ?>
