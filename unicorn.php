<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="?">
        <label>
            Are you a human, a cat, or a unicorn?
            <select name="creature">
                <option value="human">Human</option>
                <option value="cat">Cat</option>
                <option value="unicorn">Unicorn</option>
            </select>
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php

    if (isset($_GET['creature'])) {
        $creature = $_GET['creature'];

        $gifUrl = ($creature === 'human') ? 'https://media.giphy.com/media/vvBsAcNyjKk6iOkVx3/giphy.gif' : (($creature === 'cat') ? 'https://media.giphy.com/media/mlvseq9yvZhba/giphy.gif' : 'https://media.giphy.com/media/Qv5DHIz21hkUo/giphy.gif');

        echo "<img src=\"$gifUrl\" alt=\"Animated GIF\">";
    }
    ?>
</body>

</html>