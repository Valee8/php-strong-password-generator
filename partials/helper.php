<?php

    $lengthPassword = $_GET['lengthPassword'] ?? 0;

    function generatePassword($lengthPassword) {
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?$%^&*()_-+=[]{}:,;@|<>./";

        $lengthCharacters = strlen($characters);

        $password = "";

        for ($i = 0; $i < $lengthPassword; $i++) {
            $password .= $characters[rand(0, $lengthCharacters - 1)];
        }

        return $password;
    }

        