<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
<h1 class="text-center">Détail de <?= $team->getName() ?></h1>
<table class="table text-center align-middle">
    <thead>
    <tr>
        <th  class="th-sm" scope="col">#</th>
        <th  class="th-sm" scope="col">Name</th>
        <th  class="th-sm" scope="col">Points</th>
        <th  class="th-sm" scope="col">Goal taken</th>
        <th  class="th-sm" scope="col">Goal scored</th>
        <th  class="th-sm" scope="col">Logo</th>
        <th  class="th-sm" scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $team->getId() ?></td>
            <td><?= $team->getName() ?></td>
            <td><?= $team->getPoints() ?></td>
            <td><?= $team->getGoalTaken() ?></td>
            <td><?= $team->getGoalScored()?></td>
            <td><img  style="height: 50px; width: auto" src=" <?= $team->getLogoUrl() ?>" alt=" <?= $team->getName() ?>"></td>
            <td>
                <a class="btn btn-outline-warning" href="index.php?controller=team&action=edit&id=<?= $team->getId() ?>">Edit</a>
                <a class="btn btn-outline-danger" href="index.php?controller=team&action=delete&id=<?= $team->getId() ?>">Delete</a>
            </td>
        </tr>
    </tbody>
    <a class="btn btn-outline-secondary" href="index.php?controller=team&action=list">Retour</a>
</table>
</body>
</html>