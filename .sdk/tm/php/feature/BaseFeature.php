<?php
declare(strict_types=1);

// FriedApps SDK base feature

class FriedAppsBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(FriedAppsContext $ctx, array $options): void {}
    public function PostConstruct(FriedAppsContext $ctx): void {}
    public function PostConstructEntity(FriedAppsContext $ctx): void {}
    public function SetData(FriedAppsContext $ctx): void {}
    public function GetData(FriedAppsContext $ctx): void {}
    public function GetMatch(FriedAppsContext $ctx): void {}
    public function SetMatch(FriedAppsContext $ctx): void {}
    public function PrePoint(FriedAppsContext $ctx): void {}
    public function PreSpec(FriedAppsContext $ctx): void {}
    public function PreRequest(FriedAppsContext $ctx): void {}
    public function PreResponse(FriedAppsContext $ctx): void {}
    public function PreResult(FriedAppsContext $ctx): void {}
    public function PreDone(FriedAppsContext $ctx): void {}
    public function PreUnexpected(FriedAppsContext $ctx): void {}
}
