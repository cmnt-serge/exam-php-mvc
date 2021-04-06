<?php
class UserController {

    private $userManager;

    public function __construct(){
        $this->userManager = new UserManager();
    }

    public function displayLoginForm(){
        require 'Vue/login.php';
    }

    public function displayRegisterForm(){
        require 'Vue/register.php';
    }

    public function registerUser(){
        $errorsForm = [];

        if($_POST['password'] !== $_POST['password_confirm']){
            $errorsForm[] = 'Les mots de passes ne sont pas identiques';
        }

        if(empty($_POST['username'])){
            $errorsForm[] = 'Veuillez saisir un username';
        }

        if(empty($_POST['password'])){
            $errorsForm[] = 'Veuillez saisir un mot de passe';
        }

        if(count($errorsForm) != 0){
            require 'Vue/register.php';
        } else {
            $user = new User(null, $_POST['username'], $_POST['password']);
            $add = $this->userManager->addUser($user);

            if(!is_null($add['erreur'])){
                $errorsForm[] = $add['erreur'];
                require 'Vue/register.php';
            } else {
                header('Location: index.php?controller=user&action=login');
            }
        }

    }


    public function logUser(){
        // Vérifier que les champs sont bien remplis !
        $errorsForm = [];

        if(empty($_POST['username'])){
            $errorsForm[] = 'Veuillez saisir un username !';
        }

        if(empty($_POST['password'])){
            $errorsForm[] = 'Veuillez saisir un password !';
        }

        if(count($errorsForm) == 0){
            // Je vais vérifier que mon utilisateur est bien en BDD
            $result = $this->userManager->testLogin($_POST['username'], $_POST['password']);

            if(is_null($result['user'])){
                $errorsForm[] = $result['error'];

                require 'Vue/login.php';
            } else {
                // Ajouter mon user en session !
                $_SESSION['username'] = $_POST['username'];
                // Rediriger sur une page de dashboard
                header('Location: index.php?controller=dashboard&action=home');
            }
        } else {
            require 'Vue/login.php';
        }
    }
}