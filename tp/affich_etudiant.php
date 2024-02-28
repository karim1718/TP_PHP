<html>
<body>

<table border="1">
    <tr style="background-color: red;">
        <th>Nom</th>
        <th>Moyenne</th>
    </tr>

    <?php
    include("include.php");

    foreach ($tab6 as $cle => $val) {
        $color = color($val);
    ?>
        <tr style='background-color: <?= $color ?>;'>
            <td><?= $cle ?></td>
            <td><?= $val ?></td>
        </tr>
    <?php
    }
    ?>

</table>

</body>
</html>
