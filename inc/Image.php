<?php


/**
 * @param string $file
 * @return string
 */
function image(string $file): string
{
    return get_template_directory_uri() . '/assets/images/' . $file;
}

function picture(string $name, string $alt, string $extension = 'jpg'): string
{
    return '
        <picture>
            <source srcset="'. image($name) . '.webp" type="image/webp">
            <img src="'. image($name) . '.' . $extension . '" alt="' . $alt .'" title="' . $alt .'" loading="lazy">
        </picture>
        ';
}