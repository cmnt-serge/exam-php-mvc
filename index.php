<?php
    require 'include.php';

    $userController = new UserController();
    $dashboardController = new DashboardController();
    $teamController = new TeamController();

    if($_GET['controller'] == 'dashboard'){
        if(empty($_SESSION)){
            header('Location: index.php?controller=user&action=login');
        }
    }

    if(empty($_GET)){
        header('Location: index.php?controller=user&action=login');
    }

    if($_GET['controller'] == 'user' && $_GET['action'] == 'login'){
        $userController->displayLoginForm();
    } elseif ($_GET['controller'] == 'user' && $_GET['action'] == 'loginForm'){
        $userController->logUser();
    }  elseif ($_GET['controller'] == 'user' && $_GET['action'] == 'register'){
        $userController->displayRegisterForm();
    } elseif($_GET['controller'] == 'user' && $_GET['action'] == 'registerForm'){
       $userController->registerUser();
    } elseif($_GET['controller'] == 'dashboard' && $_GET['action'] == 'home') {
        $dashboardController->displayHome();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'list') {
        $teamController->displayHome();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'add') {
        $teamController->displayAddForm();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'submit-adding') {
        $teamController->addingTeam();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'detail' && !empty($_GET['id'])) {
        $teamController->displayDetail();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'edit' && !empty($_GET['id'])) {
        $teamController->displayEditForm();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'submit-update') {
        $teamController->updatingTeam();
    } elseif($_GET['controller'] == 'team' && $_GET['action'] == 'delete' && !empty($_GET['id'])) {
        $teamController->delete();
    }

    else {
        throw new Exception('Page introuvable', 404);
    }
?>