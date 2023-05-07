<?php
function load_env($file_path) {
    if (!file_exists($file_path)) {
        throw new Exception("The .env file does not exist.");
    }

    $env_vars = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($env_vars as $env_var) {
        $key_value = explode('=', $env_var, 2);

        if (count($key_value) !== 2) {
            throw new Exception("Invalid .env format.");
        }

        list($key, $value) = $key_value;
        $key = trim($key);
        $value = trim($value);

        $_ENV[$key] = $value;
    }
}
