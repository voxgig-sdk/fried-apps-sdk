<?php
declare(strict_types=1);

// FriedApps SDK utility: result_body

class FriedAppsResultBody
{
    public static function call(FriedAppsContext $ctx): ?FriedAppsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
