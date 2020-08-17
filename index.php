<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Demo Day</title>
</head>
<body style="padding-left: 20%; padding-right:20%">
    <h1>Welcome to Demo Day - Glad you made it</h1>
    <div>
        <form action="handler.php" method="get">
        <label for="user_name">Full name</label>
            <input type="name" name="user_name" id="user_name" placeholder="Enter your full name" required>

            <label for="user_email">Email</label>
            <input type="email" name="user_mail" id="user_email" placeholder="Enter your email" required>

            <input type="submit">
        </form>
    </div>
</body>
</html>