<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_Server</title>
</head>

<body>
    <h1>$_Server</h1>



    <table border="1">
        <?php foreach ($_SERVER as $key => $value) { ?>
            <tr>
                <td>
                    <?= $key ?>
                </td>
                <td>
                    <?= $value ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>