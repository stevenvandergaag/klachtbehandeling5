<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="text-align: center;">
    <form action="mail.php" method="POST">
        <h2>Send an email</h2>

        <label>name</label>
        <label for="name"></label><input id="name" name="name" type="text" placeholder="Enter name">
        <br><br>
        <label>email</label>
        <label for="email"></label><input id="email"  name="email" type="text" placeholder="Enter email">
        <br><br>
        <label>klacht</label>
        <label for="subject"></label><input id="subject" name="subject" type="text" placeholder="Enter subject">
        <br><br>
        <p>message</p>
        <label for="body"></label><textarea id="body" name="body" rows="5" placeholder="type message"></textarea>
        <br><br>
        <input type="submit" value="verstuur">
</form>
</div>

</body>
</html>



