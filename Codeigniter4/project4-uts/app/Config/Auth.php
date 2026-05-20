<?php

namespace Config;

class Auth extends \Myth\Auth\Config\Auth
{
    /**
     * Default User Group
     */
    public $defaultUserGroup;

    /**
     * Landing Route - Halaman setelah berhasil login
     */
    public $landingRoute = '/admin/post'; // Diarahkan langsung ke manajemen blog kamu

    /**
     * Reserved Routes
     */
    public $reservedRoutes = [
        'login'                   => 'login',
        'logout'                  => 'logout',
        'register'                => 'register',
        'activate-account'        => 'activate-account',
        'resend-activate-account' => 'resend-activate-account',
        'forgot'                  => 'forgot',
        'reset-password'          => 'reset-password',
    ];

    /**
     * Libraries
     */
    public $authenticationLibs = [
        'local' => 'Myth\Auth\Authentication\LocalAuthenticator',
    ];

    /**
     * Views used by Auth Controllers
     */
    public $views = [
        'login'           => 'App\Views\Auth\login',
        'register'        => 'App\Views\Auth\register',
        'forgot'          => 'App\Views\Auth\forgot',
        'reset'           => 'App\Views\Auth\reset',
        'emailForgot'     => 'App\Views\Auth\emails\forgot',
        'emailActivation' => 'App\Views\Auth\emails\activation',
    ];

    /**
     * Layout for the views to extend
     */
    public $viewLayout = 'App\Views\Auth\layout';

    /**
     * Authentication Fields
     */
    public $validFields = [
        'email',
        'username',
    ];

    public $personalFields = [];

    public $maxSimilarity = 50;

    /**
     * Allow User Registration
     * Diatur TRUE agar link "Daftar Sekarang" muncul dan berfungsi
     */
    public $allowRegistration = true;

    /**
     * Require Confirmation Registration via Email
     * Diubah ke NULL agar user bisa langsung login tanpa verifikasi email (cocok untuk localhost)
     */
    public $requireActivation = null;

    /**
     * Allow Password Reset via Email
     * Diubah ke NULL agar tidak error SMTP saat development
     */
    public $activeResetter = null;

    /**
     * Allow Persistent Login Cookies (Remember me)
     */
    public $allowRemembering = true;

    public $rememberLength = 30 * DAY;

    public $silent = false;

    public $hashAlgorithm = PASSWORD_DEFAULT;

    public $hashMemoryCost = 2048;

    public $hashTimeCost = 4;

    public $hashThreads = 4;

    public $hashCost = 10;

    public $minimumPasswordLength = 8;

    /**
     * Password Check Helpers
     */
    public $passwordValidators = [
        'Myth\Auth\Authentication\Passwords\CompositionValidator',
        'Myth\Auth\Authentication\Passwords\NothingPersonalValidator',
        'Myth\Auth\Authentication\Passwords\DictionaryValidator',
    ];

    public $userActivators = [
        'Myth\Auth\Authentication\Activators\EmailActivator' => [
            'fromEmail' => null,
            'fromName'  => null,
        ],
    ];

    public $userResetters = [
        'Myth\Auth\Authentication\Resetters\EmailResetter' => [
            'fromEmail' => null,
            'fromName'  => null,
        ],
    ];

    public $resetTime = 3600;
}