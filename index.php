<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    input[id='username']{
        width: 345px;
        height: 24px;
    }
    input[id='username']:focus{
        background-color:black;
        color:yellow;
    }
    input[id='password']{
        width: 345px;
        height: 24px;
    }
    input[id='password']:focus{
        background-color:black;
        color:yellow;
    }
    input[id='submit']{
        width: 111px;
        height: 27px;
        margin: 4px 2px 6px 119px;
    }
    </style>
</head>
<body>
    <form action='login.php' method='POST'>
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr><td><label for='username'>Username:<br/><input type="text" id="username" name="username" placeholder="Enter the username"/></label></td></tr>
                <tr><td><label for='password'>Password:<br/><input type="password" id="password" name="password" placeholder="Enter the password"/></label></td></tr>
                <tr><td><input type='submit' id='submit' value='signIn' name='submit'></td></tr>
            </table>
        </fieldset>
    </form>
</body>
</html>