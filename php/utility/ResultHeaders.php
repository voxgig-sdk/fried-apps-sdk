<?php
declare(strict_types=1);

// FriedApps SDK utility: result_headers

class FriedAppsResultHeaders
{
    public static function call(FriedAppsContext $ctx): ?FriedAppsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
