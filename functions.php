<?php
/**
 * Displays site name.
 */
function siteName()
{
    echo config('name');
}
/**
 * Displays site version.
 */
function siteVersion()
{
    echo config('version');
}
/**
 * Website navigation.
 */
function navMenu($sep = ' | ')
{
    $nav_menu = '';
    foreach (config('nav_menu') as $uri => $name) {
        $nav_menu .= '<a href="/'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name.'</a>'.$sep;
    }
    echo trim($nav_menu, $sep);
}
/**
 * Displays page title. It takes the data from 
 * URL, it replaces the hyphens with spaces and 
 * it capitalizes the words.
 */
function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}
/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function pageContent()
{

}
/**
 * Starts everything and displays the template.
 */
function run()
{
    include config('template_path').'/template.php';
}