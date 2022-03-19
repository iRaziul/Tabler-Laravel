<?php

/**
 * Determine if the nav item is active or not
 *
 * @param array $item
 * @return bool
 */
function is_active_nav($item)
{
    if (isset($item['active'])) {
        return request()->routeIs($item['active']);
    }

    if (!empty($item['items'])) {
        foreach ($item['items'] as $subItem) {
            if (is_active_nav($subItem)) return true;
        }
    }

    return request()->fullUrlIs($item['url'] ?? null);

    // return false;
}


function format_bytes(int $bytes, string $to = 'MB', $decimal_precision = 1)
{
    $formulas = [
        'KB' => $bytes / 1024,
        'MB' => $bytes / 1048576,
        'GB' => $bytes / 1073741824
    ];

    return isset($formulas[$to]) ? number_format($formulas[$to], $decimal_precision) : 0;
}

function format_size_units(int $bytes)
{
    if ($bytes <= 1024) {
        return $bytes . ' Bytes';
    }

    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return number_format($bytes, 2) . ' ' . $units[$i];
}
