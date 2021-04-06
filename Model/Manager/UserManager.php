<?php
class UserManager extends DbManager {

    function __construct()
    {
        parent::__construct();
    }

    public function addUser(User $user) {
        $username = $user->getUsername();
        $password = $user->getPassword();

        try {
            $requete = $this->bdd->prepare("INSERT INTO user (username, password) VALUES (?,?)");

            $requete->bindParam(1, $username);
            $requete->bindParam(2, $password);


            $error = null;

            $requete->execute();


        } catch (\PDOException $e) {

            if($e->getCode() == '23000'){
                $error = 'Cet utilisateur existe déjà veuillez vous connecter avec votre mot de passe';
            } else {
                $error = 'Oups ! Erreur inconnu bonne journée ! ';
            }
        }



        return ['erreur'=> $error];

    }

    public function testLogin($username, $password) {
        $requete = $this->bdd->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        $requete->bindParam(1, $username);
        $requete->bindParam(2, $password);

        $requete->execute();
        $res = $requete->fetch();

        $erreur = null;
        $user = null;

        if($res === false) {
            $erreur = 'Identifiant incorrecte !';
        } else {
            $user = new User($res['id'], $res['username'], $res['password']);
        }

        return ['error'=> $erreur, 'user'=> $user];
    }
}
?>