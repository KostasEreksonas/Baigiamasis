<?php

namespace Baigiamasis;

use Baigiamasis\Exceptions\UnauthenticatedException;
use Baigiamasis\Models\User;
use JetBrains\PhpStorm\NoReturn;

class Authenticator
{
    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
    }

    /**
     * @param string $checkUser
     * @param string $checkPass
     * @return bool
     * @throws UnauthenticatedException
     */
    public function login(string $checkUser, string $checkPass): bool
    {
        $conf = new Configs();
        $db = new Database($conf);

        $login = $db->query(
            'SELECT * FROM `users` where `name` = :name AND password = :pass AND state = 2',
            ['name' => $checkUser, 'pass' => $checkPass],
            User::class
        );

        if (!empty($login) && !empty($login[0])) {
            $_SESSION['logged'] = true;
            $_SESSION['user'] = true;
            $_SESSION['username'] = $checkUser ?? $_SESSION['username'];
            return true;
        }

        throw new UnauthenticatedException();
    }

    /**
     * @return void
     */
    #[NoReturn] public function logout(): void
    {
        // Vieta kur atjungiam lakytoja ir sunaikinam jo sesija
        $_SESSION['logged'] = false;
        $_SESSION['username'] = null;
        session_destroy();
        header('Location: /');
        exit();
    }
}