<?php
/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        //Website Name
        'name' => "Corvux's Website",
        
        //Navigation Menu
        'nav_menu' => [
            'nope' => 'Home',
            'error' => 'error',
            'test' => 'wtf',
        ],
        
        // Paths
        'template_path' => 'template',
        'content_path' => 'content',
        'image_path' => 'images',
        'application_path' => 'application',
        
        //Pretty!!!!
        'pretty_uri' => true,
        
        //DB Information
        'db_host' => 'localhost',
        'db_username' => getenv('C9_USER'),
        'db_password' => "",
        'db_database' => "test_db",
        'db_port' => '3306',
        
        //Version
        'version' => 'v1.0',
        
    ];
    return isset($config[$key]) ? $config[$key] : null;
}