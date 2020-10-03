<?php

    function get_db_config(){
        if(getenv('IS_IN_HEROKU')){
            $url = parse_url(getenv('DATABASE_URL'));

            //heroku环境的数据库配置
            return [
                'connection' => 'pgsql',
                'host'       => $url['host'],
                'database'   => substr($url['path'],1),
                'user'       => $url['user'],
                'pass'       => $url['pass'],
            ];
        }else{

            //本地数据库配置
            return [
                'connection' => env('DB_CONNECTION','mysql'),
                'host'       => env('DB_HOST','localhost'),
                'database'       => env('DB_DATABASE','forge'),
                'user'       => env('DB_USERNAME','forge'),
                'pass'       => env('DB_PASSWORD',''),
            ];
        }
    }


?>
