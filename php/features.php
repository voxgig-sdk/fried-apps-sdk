<?php
declare(strict_types=1);

// FriedApps SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class FriedAppsFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new FriedAppsBaseFeature();
            case "test":
                return new FriedAppsTestFeature();
            default:
                return new FriedAppsBaseFeature();
        }
    }
}
