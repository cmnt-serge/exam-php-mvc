<?php
    session_start();
    require 'utils/styles.php';
    require 'Controller/UserController.php';
    require 'Controller/DashboardController.php';
    require 'Controller/TeamController.php';
    require 'Model/Manager/DbManager.php';
    require 'Model/Manager/TeamManager.php';
    require 'Model/Manager/UserManager.php';
    require 'Model/Class/Team.php';
    require 'Model/Class/User.php';