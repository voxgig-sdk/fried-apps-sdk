-- FriedApps SDK error

local FriedAppsError = {}
FriedAppsError.__index = FriedAppsError


function FriedAppsError.new(code, msg, ctx)
  local self = setmetatable({}, FriedAppsError)
  self.is_sdk_error = true
  self.sdk = "FriedApps"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function FriedAppsError:error()
  return self.msg
end


function FriedAppsError:__tostring()
  return self.msg
end


return FriedAppsError
