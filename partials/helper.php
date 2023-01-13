<?php

    function generatePassword($lengthPassword, $filterNumbers, $filterUppercaseLetters, $filterLowercaseLetters, $filterSymbols) {

        $characters = "";
        $numbers = "0123456789";
        $uppercaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercaseLetters = "abcdefghijklmnopqrstuvwxyz";
        $symbols = "!?$%^&*()_-+=[]{}:,;@|<>./";

        $password = "";

        if ($filterNumbers) {
            $characters .= $numbers;
        }

        if ($filterUppercaseLetters) {
            $characters .= $uppercaseLetters;
        }
        if ($filterLowercaseLetters) {
            $characters .= $lowercaseLetters;
        }
        if ($filterSymbols) {
            $characters .= $symbols;
        }

        $lengthCharacters = strlen($characters);


        for ($i = 0; $i < $lengthPassword; $i++) {
            $password .= $characters[rand(0, $lengthCharacters - 1)];
        }

        return $password;
    }

        