<?php


class TeamManager extends DbManager
{

    function __construct()
    {
        parent::__construct();
    }

    public function getAllTeam(){

        try {
            $requete = $this->bdd->query("SELECT * FROM team");

            return $requete->fetchALl();
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }

    public function getTeam(int $id){
        try {
            $requete = $this->bdd->prepare("SELECT * FROM team WHERE id = ?");
            $requete->bindParam(1, $id);

            $requete->execute();
            return $requete->fetch();

        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    public function addTeam(Team $team){
        $name = $team->getName();
        $point = $team->getPoints();
        $goalTaken = $team->getGoalTaken();
        $goalScored = $team->getGoalScored();
        $logoUrl = $team->getLogoUrl();
        try {
            $requete = $this->bdd->prepare("INSERT INTO team (name, points, goal_taken, goal_scored, logo_url)
                VALUES (?,?,?,?,?)");

            $requete->bindParam(1, $name);
            $requete->bindParam(2, $point);
            $requete->bindParam(3, $goalTaken);
            $requete->bindParam(4, $goalScored);
            $requete->bindParam(5, $logoUrl);

            $requete->execute();
        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    public function updateTeam(Team $team){
        $name = $team->getName();
        $point = $team->getPoints();
        $goalTaken = $team->getGoalTaken();
        $goalScored = $team->getGoalScored();
        $logoUrl = $team->getLogoUrl();
        $id = $team->getId();
        try {
            $requete = $this->bdd->prepare("UPDATE team 
                SET name=? , points=?, goal_taken=?, goal_scored=?, logo_url=? WHERE id=?");

            $requete->bindParam(1, $name);
            $requete->bindParam(2, $point);
            $requete->bindParam(3, $goalTaken);
            $requete->bindParam(4, $goalScored);
            $requete->bindParam(5, $logoUrl);
            $requete->bindParam(6, $id);

            $requete->execute();
        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    public function deleteTeam($id){
        try {
            $requete = $this->bdd->prepare("DELETE FROM team WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
        } catch (\PDOException $e){
            var_dump($e);
        }
    }
}