<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DB Connection</title>
</head>
<body>
<div class="form">
    <form method="POST" action="form.php">
        <h1>WS2 - Conexão à base de dados</h1>
        <table>
            <tr>
                <td>
                    <label for="host">Host</label><br>
                    <input type="text" name="host" placeholder="x.x.x.x" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="database">Database</label><br>
                    <input type="text" name="database" placeholder="Database" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="user">User</label><br>
                    <input type="text" name="user" placeholder="Name" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" placeholder="Password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Send Message">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>