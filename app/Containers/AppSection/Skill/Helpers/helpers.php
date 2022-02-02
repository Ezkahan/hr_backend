<?php

/*
|--------------------------------------------------------------------------
| Skill Helpers
|--------------------------------------------------------------------------
|
| All helpers list for Skill container
|
*/

/**
 * Get level name by key
 *
 * @param int $key
 * @return string
 *
 * Is supposed to return gender string based
 * on the key value as [1 => 'man'], [2 => 'women'], [others => 'unknown']
 * Localization is done on frontside with i18next package
 */
if (!function_exists('getLevelByCode')) {
    function getLevelByCode($key): string
    {
        Log::info($key);
        switch ($key) {
            case 1: {
                    return 'low';
                }

            case 2: {
                    return 'medium';
                }

            case 3: {
                    return 'high';
                }

            default: {
                    return 'unknown';
                }
        }
    }
}
