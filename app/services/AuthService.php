<?php

namespace App\Services;

use App\Models\AuthModel;

class AuthService
{
    protected AuthModel $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function checkUserEmailPassword($request)
    {
        $user = $this->authModel->findByEmailPassword($request);
        if ($user) {
            $_SESSION['userLogin'] = $user;
            header('Location: ../../../index.php');
        }
        return false;
    }
}