<?php

    function get_db_config(){
        if(getenv('IS_IN_HEROKU')){
            $url = parse_url(getenv('DATABASE_URL'));
            dump($url);
        }
    }


?>
