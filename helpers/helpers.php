<?php

    function formatexto($txt)
        {
            echo $txt;
            echo "<br>";
            echo strtolower($txt); //tudo em minusculo
            echo "<br>";
            echo strtoupper($txt); //tudo em maiusculo
            echo "<br>";
            echo ucfirst(strtolower($txt)); //primeira letra em maiusculo
        }

    ?>