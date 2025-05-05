<?php

namespace Application\Controllers;

use Application\Model\User as UserModel;


class User extends Controller{

    private $statusArray = [
        'message' => null,
        'status' => null,
        'error' => null
    ];

    public function index(){
        return $this->view('app.index');
    }

    public function signin(){
        return $this->view('app.signinform');
    }

    public function signup(){
        return $this->view('app.signupform');
    }

    public function authSignUp(){
        $user = $_POST;
        $userModel = new UserModel();
        $currentUser = $userModel->find($user['username']);

        if (empty($currentUser)) {
            if ($user['password'] == $user['repassword']) {

                $userModel = new UserModel();
                $userModel->insert($user);

                $userModel = new UserModel();
                $currentUser = $userModel->find($user['username']);

                $_SESSION['currentUser'] = $currentUser['id'];

                $this->statusArray['error'] = false;
                $this->statusArray['message'] = "Welcome";
                $this->statusArray['status'] = 1 ;
    
                $this->signTimeUpdate();
    
                $message = $this->statusArray ;
    
                return $this->view('app.main',compact('message'));

            }
        }else{
            $this->redirect('http://localhost/foxsweeper/user/signup');
        }

    }

    public function authSignIn(){
        // get data
        $user = $_POST;
        $userModel = new UserModel();
        $currentUser = $userModel->find($user['username']);
        
        // validate data
        if(empty($currentUser)){
            $this->statusArray['error'] = true;
            $this->statusArray['message'] = "this user does not exist";
            $this->statusArray['status'] = 0 ;

            $message = $this->statusArray ;

            return $this->view('app.main',compact('message'));


        }elseif ($user['password'] == $currentUser['password']) {

            $_SESSION['currentUser'] = $currentUser['id'];

            $this->statusArray['error'] = false;
            $this->statusArray['message'] = "Welcome";
            $this->statusArray['status'] = 1 ;

            $this->signTimeUpdate();

            $message = $this->statusArray ;

            return $this->view('app.main',compact('message'));

            // $userModel->signInTimeUpdate($_SESSION['currentUser']);
            

        }else{
            $this->statusArray['error'] = true;
            $this->statusArray['message'] = "password is wrong";
            $this->statusArray['status'] = 0 ;

            $message = $this->statusArray ;

            return $this->view('app.main',compact('message'));
        }

    }

    public function signTimeUpdate(){

        $userModel = new UserModel();
        $userModel->signInTimeUpdate($_SESSION['currentUser']);

    }

    public function playGame(){
        $userId = $_SESSION['currentUser'];
        return $this->view('app.game.index',compact('userId'));
    }

    public function setScore(){
        $dataScore = $_POST['maxScore'];

        $userModel = new UserModel();
        $currentUser = $userModel->findById($_SESSION['currentUser']);

        if ($currentUser['score'] < $dataScore) {
            $userModel = new UserModel();
            $userModel->setScore($_SESSION['currentUser'],$dataScore);
        }else{
            return [];
        }
    }

}