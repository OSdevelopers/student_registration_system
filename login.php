<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SRS</title>
</head>
<body>
    <div>
        <fieldset>
            <legend>Welcome Back!</legend>

            <form action="server.php">
                <div class="inputs">
                    <label for="username">Username</label>
                    <input type="email" name="username" placeholder="Enter Username...">
                </div>

                <div class="inputs">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter password...">
                </div>
                
                <div class="button">
                    <button type="submit">Login</button>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>