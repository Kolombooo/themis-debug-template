<?php
include 'gateway.php';
?>

<html>
    <head>
        <title>Themis Debug Webpage Template</title>
    </head>
    <body>
        <h1>Debug Webpage</h1>
        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
                <th>Label</th>
            </tr>
            <tr>
                <td>debug.table.key1</td>
                <td><?= element("debug.table.key1")->{'result'} ?></td>
                <td><?= element("debug.table.key1")->label ?></td>
            </tr>
            <tr>
                <td>debug.table.key2</td>
                <td><?= element("debug.table.key2")->{'result'} ?></td>
                <td><?= element("debug.table.key2")->label ?></td>
            </tr>
            <tr>
                <td>debug.table.key3</td>
                <td><?= element("debug.table.key3")->{'result'} ?></td>
                <td><?= element("debug.table.key3")->label ?></td>
            </tr>
        </table>
        <br><br>
        <hr>
        <br><br>
        <p><b>Project ID: </b> <?= config()['projectid'] ?></p>
    </body>
</html>