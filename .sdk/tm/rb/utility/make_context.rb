# FriedApps SDK utility: make_context
require_relative '../core/context'
module FriedAppsUtilities
  MakeContext = ->(ctxmap, basectx) {
    FriedAppsContext.new(ctxmap, basectx)
  }
end
