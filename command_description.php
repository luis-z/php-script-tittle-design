<?php

#############################
#
#     For a list of bash colors:
#     https://gist.github.com/vratiu/9780109
#
##############################

public function command_description ($description)
{
    echo "\n";
    for ($i=0; $i < 50; $i++) {
        echo "\033[0;34m#\033[0m";
    }
    for ($i=0; $i < 4; $i++) {
        echo "\n";
        echo "\033[0;34m#\033[0m";

        if ($i == 1) {
            echo " \033[47m \033[4;35m". $description."\033[0m";
        }
    }
    for ($i=0; $i < 50; $i++) {
        echo "\033[0;34m#\033[0m";
    }

    echo "\n";
    echo "\n";
    return;
}
