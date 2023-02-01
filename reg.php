<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        city
                        <select name="city">
                            <option value="">-select-</option>
                            <option value="knp">kanpur</option>
                            <option value="lko">lucknow</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                        <input type="radio"name="gen" id="gen" value="male">male
                        <input type="radio" name="gen" id="gen" value="female">female
                    </td>
                </tr>
                <tr>
                    <td>
                        Image
                        <input type="file" name="f1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
