<?php

/*
|--------------------------------------------------------------------------
| People Helpers
|--------------------------------------------------------------------------
|
| All helpers list for People container
|
*/

/**
 * Get gender key by gender number
 *
 * @param int $gender_no
 * @return string
 *
 * Is supposed to return gender string based
 * on the key value as [1 => 'man'], [2 => 'women'], [others => 'unknown']
 * Localization is done on frontside with i18next package
 */
if (!function_exists('getGender')) {
    function getGender($gender_no): string
    {
        switch ($gender_no) {
            case 1: {
                    return 'man';
                }

            case 2: {
                    return 'women';
                }

            default: {
                    return 'unknown';
                }
        }
    }
}

if (!function_exists('setGender')) {
    function setGender($gender): string
    {
        switch ($gender) {
            case 'man': {
                    return '1';
                }

            case 'women': {
                    return '2';
                }

            default: {
                    return '0';
                }
        }
    }
}


/**
 * Get marital key by marital number
 *
 * @param int $marital_no
 * @return string
 *
 * Is supposed to return marital string based
 * on the key value as [1 => 'married'], [2 => 'single'], [3 => 'divorced'], [4 => 'widower_widow'], [others => 'unknown']
 * Localization is done on frontside with i18next package
 */
if (!function_exists('getMarital')) {
    function getMarital($marital_no): string
    {
        switch ($marital_no) {
            case 1: {
                    return 'married';
                }

            case 2: {
                    return 'single';
                }

            case 3: {
                    return 'divorced';
                }

            case 4: {
                    return 'widower_widow';
                }

            default: {
                    return 'unknown';
                }
        }
    }
}

if (!function_exists('setMarital')) {
    function setMarital($marital): string
    {
        switch ($marital) {
            case 'married': {
                    return '1';
                }

            case 'single': {
                    return '2';
                }

            case 'divorced': {
                    return '3';
                }

            case 'widower_widow': {
                    return '4';
                }

            default: {
                    return '0';
                }
        }
    }
}
