<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>入力</title>
    </head>

    <body>
        <form method = "get" action = "5-9-catch.php">
            <p> A:
                <input type="number" name = "dataA">
                B:
                <input type="number" name = "dataB">

                記号:
                <input type ="radio" name = "symbol" value = "+" id = "+">
                <label for = "+">+</label>

                <input type ="radio" name = "symbol" value = "-" id = "-">
                <label for = "-">-</label>

                <input type ="radio" name = "symbol" value = "*" id = "*">
                <label for = "*">*</label>

                <input type ="radio" name = "symbol" value = "/" id = "/">
                <label for = "/">/</label>

                <input type ="radio" name = "symbol" value = "%" id = "%">
                <label for = "%">%</label>
            </p>
            <input type="submit" value = "送信">
        </form>
    </body>
</html>