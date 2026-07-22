<?php
declare(strict_types=1);

// FriedApps SDK utility: prepare_body

class FriedAppsPrepareBody
{
    public static function call(FriedAppsContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
