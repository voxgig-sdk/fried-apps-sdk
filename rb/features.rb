# FriedApps SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module FriedAppsFeatures
  def self.make_feature(name)
    case name
    when "base"
      FriedAppsBaseFeature.new
    when "ratelimit"
      FriedAppsRatelimitFeature.new
    when "retry"
      FriedAppsRetryFeature.new
    when "test"
      FriedAppsTestFeature.new
    when "timeout"
      FriedAppsTimeoutFeature.new
    else
      FriedAppsBaseFeature.new
    end
  end
end
