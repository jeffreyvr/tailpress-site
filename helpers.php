<?php

function mix($path)
{
    $manifest = json_decode(file_get_contents('mix-manifest.json'), true);

    return $manifest[$path] ?? $path;
}

function svg($path)
{
    if (! file_exists("svgs/$path.php")) {
        return;
    }

    include "svgs/$path.php";
}
