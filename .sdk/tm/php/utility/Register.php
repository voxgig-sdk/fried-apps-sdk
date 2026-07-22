<?php
declare(strict_types=1);

// FriedApps SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

FriedAppsUtility::setRegistrar(function (FriedAppsUtility $u): void {
    $u->clean = [FriedAppsClean::class, 'call'];
    $u->done = [FriedAppsDone::class, 'call'];
    $u->make_error = [FriedAppsMakeError::class, 'call'];
    $u->feature_add = [FriedAppsFeatureAdd::class, 'call'];
    $u->feature_hook = [FriedAppsFeatureHook::class, 'call'];
    $u->feature_init = [FriedAppsFeatureInit::class, 'call'];
    $u->fetcher = [FriedAppsFetcher::class, 'call'];
    $u->make_fetch_def = [FriedAppsMakeFetchDef::class, 'call'];
    $u->make_context = [FriedAppsMakeContext::class, 'call'];
    $u->make_options = [FriedAppsMakeOptions::class, 'call'];
    $u->make_request = [FriedAppsMakeRequest::class, 'call'];
    $u->make_response = [FriedAppsMakeResponse::class, 'call'];
    $u->make_result = [FriedAppsMakeResult::class, 'call'];
    $u->make_point = [FriedAppsMakePoint::class, 'call'];
    $u->make_spec = [FriedAppsMakeSpec::class, 'call'];
    $u->make_url = [FriedAppsMakeUrl::class, 'call'];
    $u->param = [FriedAppsParam::class, 'call'];
    $u->prepare_auth = [FriedAppsPrepareAuth::class, 'call'];
    $u->prepare_body = [FriedAppsPrepareBody::class, 'call'];
    $u->prepare_headers = [FriedAppsPrepareHeaders::class, 'call'];
    $u->prepare_method = [FriedAppsPrepareMethod::class, 'call'];
    $u->prepare_params = [FriedAppsPrepareParams::class, 'call'];
    $u->prepare_path = [FriedAppsPreparePath::class, 'call'];
    $u->prepare_query = [FriedAppsPrepareQuery::class, 'call'];
    $u->result_basic = [FriedAppsResultBasic::class, 'call'];
    $u->result_body = [FriedAppsResultBody::class, 'call'];
    $u->result_headers = [FriedAppsResultHeaders::class, 'call'];
    $u->transform_request = [FriedAppsTransformRequest::class, 'call'];
    $u->transform_response = [FriedAppsTransformResponse::class, 'call'];
});
