<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $data['name'] = isset($data['name'])?$data['name']:'guest';

        // can be written as
        $data['name'] = $data['name'] ?? 'guest';

        //now it become more interesting. it's now just
        $data['name'] ??= 'guest';
    ?>
</body>
</html>