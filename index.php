<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test.php" method="POST">
        Name = <input type="text" name="fname"><br><br>

        Age = <input type="text" name="age" class="text"><br><br>

        Contact = <input type="text" name="Contact" class="text"><br><br>

        Email = <input type="email" name="Email" class="email"><br><br>

        Ciyt:
        <select id="City" name="City">
            <option value="mumbai">Mumbai</option>
            <option value="pune">Pune</option>
            <option value="nagpur">Nagpur</option>
            <option value="nashik">Nashik</option>
        </select><br>

        Gender
        <input type="radio" name="gender">Male
        <input type="radio" name="gender">Female
        <input type="radio" name="gender">Other

        <input type="submit" name="save">

    </form>
</body>

</html>