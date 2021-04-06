<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update team</title>
</head>
<body>
<div class="container">
    <h1 class="text-center my-5">Update team</h1>
    <div class="row">
        <form action="index.php?controller=team&action=submit-update" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $team->getName() ?>">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="points" name="points" placeholder="Points" value="<?= $team->getPoints() ?>">
                <label for="points">Points</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="goal-taken" name="goal-taken" placeholder="Goal taken" value="<?= $team->getGoalTaken() ?>">
                <label for="goal-taken">Goal taken</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="goal-scored" name="goal-scored" placeholder="Goal scored" value="<?= $team->getGoalScored() ?>">
                <label for="goal-taken">Goal scored</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="logo-url" name="logo-url" placeholder="Logo url" value="<?= $team->getLogoUrl() ?>">
                <label for="logo-url">Logo url</label>
                <img style="height: 50px; width: auto" src="<?= $team->getLogoUrl() ?>" alt="<?= $team->getName() ?>">
            </div>
            <input type="hidden" name="id" id="id" value="<?= $team->getId() ?>">
            <div class="button-group">
                <button class="btn btn-success">Submit</button>
                <a class="btn btn-outline-secondary" href="index.php?controller=team&action=list">Retour</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>