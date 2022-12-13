<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
</head>
<body>
    <form name="frm" action="process.php" method="post">
        <ul style="list-style:none;" >
            <li>
                <label>First number</label>
                <input type="text" name="num1">
                <label>Second Number</label>
                <input type="text" name="num2">
            </li>
            <li>
                <label>Operators</label>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
            </select>
            <li>
                <input type="submit" value="calculate">
                <input type="reset">
            </li>
        </ul>
    </form>
</body>
</html>