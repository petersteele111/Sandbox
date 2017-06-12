<?php

        $person = [

            "name" => "Peter",
            "age" => 27,
            "weight" => 280

        ];

        foreach ($person as $trait => $value) {
            echo "<pre>";
            echo "$trait: $value";
            echo "</pre>";
        };