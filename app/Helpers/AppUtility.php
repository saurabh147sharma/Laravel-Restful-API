<?php

/**
 * This file contains all the common method that are being used multiple time throughout the app
 */

namespace App\Helpers;

class AppUtility {

    public function __construct() {

    }

    /**
     * This function is being used for generate password
     * using hash (bcrypt method)
     * @param type $password
     * @return type encrypted password
     */
    public function generatePassword($password = '') {
        return \Hash::make($password);
    }

    /**
     * This function is being used for matching password(change password)
     * @param type $postPassword
     * @param type $userPassword
     * @return type
     */
    public function matchPassword($postPassword, $userPassword) {
        return \Hash::check($postPassword, $userPassword);
    }

}