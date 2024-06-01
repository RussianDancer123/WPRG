<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div id="main">
        <form method="post" action="index.php">
            <h2>Rejestracja</h2>
            <label>imie: <input type="text" name="name" required="required"></label><br>
            <label>nazwisko: <input type="text" name="surname" required="required"></label><br>
            <label>email: <input type="text" name="email" required="required"></label><br>
            <label>haslo: <input type="text" name="password" pattern="^(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$" required="required"></label><br>
            <input type="submit" name="register" value="zarejestruj">
        </form>
        <form action="login.php">
            <input type="submit" value="logowanie">
        </form>
    </div>
</body>
</html>