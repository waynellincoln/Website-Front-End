<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">

    <select name="country">
        <optgroup label="Europe">
            <option value="germany">Germany</option>
            <option value="france">France</option>
            <option value="uk" selected>United Kingdom</option>
        </optgroup>
        <optgroup label="America">
            <option value="brazil">Brazil</option>
            <option value="canada">Canada</option>
            <option value="usa">United States</option>
        </optgroup>
    </select>

    <button>Send</button>

</form>

</body>
</html>
