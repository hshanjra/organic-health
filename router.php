<?php

/**
 * Returns the URL of a static file relative to the base URL.
 *
 * This function requires the STATIC_FOLDER_PATH environment variable to be set in the .env file.
 *
 * @param string $filePath The path to the file relative to the static folder.
 *
 * @return string The URL of the file relative to the base URL.
 * @throws Exception If the STATIC_FOLDER_PATH environment variable is not set.
 */
function asset($filePath = '')
{
    // Retrieve the static folder path from environment variables
    $staticFolderPath = $_ENV['STATIC_FOLDER_PATH'];

    if (!$staticFolderPath) {
        throw new Exception("STATIC_FOLDER_PATH is not set in the .env file");
    }

    // Ensure that the static folder path ends with a directory separator
    $staticFolderPath = rtrim($staticFolderPath, DIRECTORY_SEPARATOR);

    // Join the static folder path with the provided file path, without using realpath
    $fullPath = $staticFolderPath . DIRECTORY_SEPARATOR . ltrim($filePath, DIRECTORY_SEPARATOR);

    // Get the base URL (web root) dynamically
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host . dirname($_SERVER['SCRIPT_NAME']) . '/';

    // Normalize the full path by replacing directory separators
    $relativePath = str_replace(['\\', '//'], '/', $fullPath);

    // Return the full URL relative to the base URL
    return $baseUrl . $relativePath;
}

// try {
//     $staticFolderPath = asset('/');
//     echo "Resolved Static Folder Path: " . $staticFolderPath;
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }


function get($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        route($route, $path_to_include);
    }
}
function post($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        route($route, $path_to_include);
    }
}
function put($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        route($route, $path_to_include);
    }
}
function patch($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'PATCH') {
        route($route, $path_to_include);
    }
}
function delete($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        route($route, $path_to_include);
    }
}
function any($route, $path_to_include)
{
    route($route, $path_to_include);
}
function route($route, $path_to_include)
{
    $callback = $path_to_include;
    if (!is_callable($callback)) {
        if (!strpos($path_to_include, '.php')) {
            $path_to_include .= '.php';
        }
    }
    if ($route == "/404") {
        include_once __DIR__ . "/$path_to_include";
        exit();
    }
    $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    $request_url = rtrim($request_url, '/');
    $request_url = strtok($request_url, '?');
    $route_parts = explode('/', $route);
    $request_url_parts = explode('/', $request_url);
    array_shift($route_parts);
    array_shift($request_url_parts);
    if ($route_parts[0] == '' && count($request_url_parts) == 0) {
        // Callback function
        if (is_callable($callback)) {
            call_user_func_array($callback, []);
            exit();
        }
        include_once __DIR__ . "/$path_to_include";
        exit();
    }
    if (count($route_parts) != count($request_url_parts)) {
        return;
    }
    $parameters = [];
    for ($__i__ = 0; $__i__ < count($route_parts); $__i__++) {
        $route_part = $route_parts[$__i__];
        if (preg_match("/^[$]/", $route_part)) {
            $route_part = ltrim($route_part, '$');
            array_push($parameters, $request_url_parts[$__i__]);
            $$route_part = $request_url_parts[$__i__];
        } else if ($route_parts[$__i__] != $request_url_parts[$__i__]) {
            return;
        }
    }
    // Callback function
    if (is_callable($callback)) {
        call_user_func_array($callback, $parameters);
        exit();
    }
    include_once __DIR__ . "/$path_to_include";
    exit();
}
function out($text)
{
    echo htmlspecialchars($text);
}

function set_csrf()
{
    session_start();
    if (!isset($_SESSION["csrf"])) {
        $_SESSION["csrf"] = bin2hex(random_bytes(50));
    }
    echo '<input type="hidden" name="csrf" value="' . $_SESSION["csrf"] . '">';
}

function is_csrf_valid()
{
    session_start();
    if (!isset($_SESSION['csrf']) || !isset($_POST['csrf'])) {
        return false;
    }
    if ($_SESSION['csrf'] != $_POST['csrf']) {
        return false;
    }
    return true;
}
