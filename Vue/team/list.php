<html>
<head>
    <title>Team list</title>
</head>
<body>
<h1 class="text-center my-3">Liste des équipes !</h1>
<a class="btn btn-primary mb-3" href="index.php?controller=team&action=add">Ajouter une équipe</a>
<table id="listTeam" class="table text-center align-middle">
    <thead>
    <tr>
        <th  class="th-sm" scope="col" >#</th>
        <th  class="th-sm" scope="col">Name</th>
        <th  class="th-sm" scope="col">Points</th>
        <th  class="th-sm" scope="col">Goal taken</th>
        <th  class="th-sm" scope="col">Goal scored</th>
        <th  class="th-sm" scope="col">Logo</th>
        <th  class="th-sm" scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($teams as $item){
            $team = new Team($item['id'], $item['name'], $item['points'], $item['goal_taken'], $item['goal_scored'], $item['logo_url']);
            ?>
            <tr>
                <td><?= $team->getId() ?></td>
                <td><?= $team->getName() ?></td>
                <td><?= $team->getPoints() ?></td>
                <td><?= $team->getGoalTaken() ?></td>
                <td><?= $team->getGoalScored()?></td>
                <td><img  style="height: 50px; width: auto" src=" <?= $team->getLogoUrl() ?>" alt=" <?= $team->getName() ?>"></td>
                <td>
                    <a class="btn btn-outline-info" href="index.php?controller=team&action=detail&id=<?= $team->getId() ?>">Detail</a>
                    <a class="btn btn-outline-warning" href="index.php?controller=team&action=edit&id=<?= $team->getId() ?>">Edit</a>
                    <a class="btn btn-outline-danger" href="index.php?controller=team&action=delete&id=<?= $team->getId() ?>">Delete</a>
                </td>
            </tr>

    <?php
        }
    ?>
    </tbody>
</table>
</body>
</html>