<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .div1 {
            float: left;
            padding: 15px;
        }

        .div2 {
            float: right;
            padding: 15px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/reg_form" method="Get">
        <table>
            <div class="div1">
                <tr>
                    <td>
                        Name:
                    </td>

                    <td>
                        <input type=text placeholder=”Name” name="name">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email Address:
                    </td>

                    <td>
                        <input type=”mail” placeholder=”Email” name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile:
                    </td>

                    <td>
                        <input type=text placeholder=”Number” name="number">
                    </td>
                </tr>
            </div>
            <tr>
                <td>
                    Role:
                </td>

                <td>
                    <select name="" id="">
                        <option value="">Select</option>
                        <option name="admin" value="admin">Admin</option>
                        <option name="user" value="user">User</option>
                    </select>
                </td>
            </tr>
            <div class="div2">

                <tr>
                    <td>
                        Password:
                    </td>

                    <td>
                        <input type=”Password” placeholder=”Password” name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        Image:
                    </td>

                    <td>
                        <input type="file" placeholder="File" name="file">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>

                    <td>
                        <input type="date" placeholder=date name="date">
                    </td>
                </tr>
            </div>
        </table>
        <input  value="SUBMIT" type="submit">
    </form>
</body>

</html>
