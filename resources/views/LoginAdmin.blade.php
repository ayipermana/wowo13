<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>login Admin</h4>
    <form action="{{ url('login/auth')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>password</td>
                <td> <input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>