<?php
declare(strict_types=1);

// FriedApps SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class FriedAppsMakeContext
{
    public static function call(array $ctxmap, ?FriedAppsContext $basectx): FriedAppsContext
    {
        return new FriedAppsContext($ctxmap, $basectx);
    }
}
