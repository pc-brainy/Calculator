<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="calculator.js" type="text/javascript"></script>
</head>
<body>
<div class="bg">
    <form name="calculator" action="" method="get">
        <table>
            <tr>
                <td colspan="5">
                    <label>
                        <input type="text" name="result" value="0" class="text" id="mainText"/>
                    </label>
                </td>
            </tr>
            <tr>
                <td><input name="pin" type="button" value="(" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value=")" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="^" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="/" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="C" class="btn" onclick="btnClick(this.value)"></td>
            </tr>
            <tr>
                <td><input name="pin" type="button" value="1" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="2" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="3" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="*" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="CE" class="btn" onclick="btnClick(this.value)"></td>
            </tr>
            <tr>
                <td><input name="pin" type="button" value="4" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="5" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="6" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="-" class="btn" onclick="btnClick(this.value)"></td>
                <td rowspan="3"><input name="pin" type="button" value="=" class="btn equal" onclick="getResult();"></td>
            </tr>
            <tr>
                <td><input name="pin" type="button" value="7" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="8" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="9" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="+" class="btn" onclick="btnClick(this.value)"></td>

            </tr>
            <tr>
                <td><input name="pin" type="button" value="0" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="00" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="000" class="btn" onclick="btnClick(this.value)"></td>
                <td><input name="pin" type="button" value="." class="btn" onclick="btnClick(this.value)"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
