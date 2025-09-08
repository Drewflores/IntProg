<!DOCTYPE html>
<html>
    <haead>
        <meta charset="utf-8">
        <title>GETZ</title>
    </haead>
    <body>
        <h1>Example survey</h1>
        <p>ABOUT YOU:</p>
        <form action="hahaha.php" method="get">
            name: <input type="text" name="name">
            age: <input type="number" name="age">
            hobby: <input type="text" name="hobby">
            <input type="submit">
        </form>
        <br>
        <?php
        $name =  $_GET["name"];
        $age = $_GET["age"];
        $hobby = $_GET["hobby"];

        if (isset($name)) {
            echo "Name: ", $name;
        }
        if (isset($age)) {
            echo "<br>Age: ", $age;
        }
        if (isset($hobby)) {
            echo "<br>Hobby: ", $hobby;
        }
        ?>
    </body>
</html>