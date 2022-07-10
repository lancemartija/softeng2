<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <link rel="stylesheet" href="<?= $data['dir']; ?>src/css/style.css?<?= time(); ?>">
  <?php if (isset($data['modal'])) { ?>
    <script async defer src="<?= $data['dir']; ?>src/js/<?= $data['modal']; ?>.js"></script>
  <?php } ?>
</head>

<body class="bg-gray-50">