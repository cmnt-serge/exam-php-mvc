<?php


class TeamController
{
    private $teamManager;
    private $uploaddir = "utils/uploads/";


    /**
     * TeamController constructor.
     */
    public function __construct()
    {
        $this->teamManager = new TeamManager();
    }


    function displayHome(){
        $teams = $this->teamManager->getAllTeam();
        require 'Vue/team/list.php';
    }

    function displayAddForm(){

        require 'Vue/team/add.php';
    }

    function addingTeam(){
        $uniqueSaveName = $this->uploaddir . uniqid(rand()) . '.' . explode('/', $_FILES['logo-url']['type'])[1];
        if (move_uploaded_file($_FILES['logo-url']['tmp_name'], $uniqueSaveName)) {
            $this->teamManager->addTeam(new Team(null, $_POST['name'], $_POST['points'], $_POST['goal-taken'], $_POST['goal-scored'], $uniqueSaveName));
            header('Location: index.php?controller=team&action=list');
        } else {
            header('Location: 404.php');
        }
    }

    function displayDetail(){
        try{
            $res = $this->teamManager->getTeam($_GET['id']);
            $team = (new Team($res['id'], $res['name'], $res['points'], $res['goal_taken'], $res['goal_scored'], $res['logo_url']));
            require 'Vue/team/detail.php';
        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    function displayEditForm(){
        try{
            $res = $this->teamManager->getTeam($_GET['id']);
            $team = (new Team($res['id'], $res['name'], $res['points'], $res['goal_taken'], $res['goal_scored'], $res['logo_url']));
            require 'Vue/team/edit.php';
        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    function updatingTeam(){
        try{
            $uniqueSaveName = null;
            if(!empty($_FILES)){
                $uniqueSaveName = $this->uploaddir . uniqid(rand()) . '.' . explode('/', $_FILES['logo-url']['type'])[1];
                if (move_uploaded_file($_FILES['logo-url']['tmp_name'], $uniqueSaveName)) {
                    $this->teamManager->updateTeam(new Team($_POST['id'], $_POST['name'], $_POST['points'], $_POST['goal-taken'], $_POST['goal-scored'], $uniqueSaveName));
                }
            } else{
                $this->teamManager->updateTeam(new Team($_POST['id'], $_POST['name'], $_POST['points'], $_POST['goal-taken'], $_POST['goal-scored'], $uniqueSaveName));
            }
            header('Location: index.php?controller=team&action=list');
        } catch (Exception $e){
            var_dump($e);
        }
    }

    function delete(){
        $this->teamManager->deleteTeam($_GET['id']);
        header('Location: index.php?controller=team&action=list');
    }
}