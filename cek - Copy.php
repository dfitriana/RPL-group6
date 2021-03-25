<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
<h1>Latihan membuat looping for</h1>
<table border="1" cellpadding="10" cellspacing="0">
<?php for($a = 1; $a <= 3; $a++) : ?>
    <tr>
        <?php for($b = 1; $b <= 5; $b++) : ?>
            <td><?php echo "$a , $b"; ?></td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
    
</body>
</html>