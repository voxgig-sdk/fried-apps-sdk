# FriedApps SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module FriedAppsFeatures
  def self.make_feature(name)
    case name
    when "base"
      FriedAppsBaseFeature.new
    when "test"
      FriedAppsTestFeature.new
    else
      FriedAppsBaseFeature.new
    end
  end
end
