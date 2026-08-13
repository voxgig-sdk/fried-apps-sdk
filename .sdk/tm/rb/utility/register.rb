# FriedApps SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'graphql'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

FriedAppsUtility.registrar = ->(u) {
  u.clean = FriedAppsUtilities::Clean
  u.done = FriedAppsUtilities::Done
  u.make_error = FriedAppsUtilities::MakeError
  u.feature_add = FriedAppsUtilities::FeatureAdd
  u.feature_hook = FriedAppsUtilities::FeatureHook
  u.feature_init = FriedAppsUtilities::FeatureInit
  u.fetcher = FriedAppsUtilities::Fetcher
  u.make_fetch_def = FriedAppsUtilities::MakeFetchDef
  u.make_context = FriedAppsUtilities::MakeContext
  u.make_options = FriedAppsUtilities::MakeOptions
  u.make_request = FriedAppsUtilities::MakeRequest
  u.make_response = FriedAppsUtilities::MakeResponse
  u.make_result = FriedAppsUtilities::MakeResult
  u.make_point = FriedAppsUtilities::MakePoint
  u.make_spec = FriedAppsUtilities::MakeSpec
  u.make_url = FriedAppsUtilities::MakeUrl
  u.param = FriedAppsUtilities::Param
  u.prepare_auth = FriedAppsUtilities::PrepareAuth
  u.prepare_body = FriedAppsUtilities::PrepareBody
  u.prepare_headers = FriedAppsUtilities::PrepareHeaders
  u.prepare_method = FriedAppsUtilities::PrepareMethod
  u.prepare_params = FriedAppsUtilities::PrepareParams
  u.prepare_path = FriedAppsUtilities::PreparePath
  u.prepare_query = FriedAppsUtilities::PrepareQuery
  u.graphql_body = FriedAppsUtilities::GraphqlBody
  u.graphql_errors = FriedAppsUtilities::GraphqlErrors
  u.result_basic = FriedAppsUtilities::ResultBasic
  u.result_body = FriedAppsUtilities::ResultBody
  u.result_headers = FriedAppsUtilities::ResultHeaders
  u.transform_request = FriedAppsUtilities::TransformRequest
  u.transform_response = FriedAppsUtilities::TransformResponse
}
