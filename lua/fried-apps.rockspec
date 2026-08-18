package = "voxgig-sdk-fried-apps"
version = "0.0.1-1"
source = {
  -- git+https (GitHub dropped git:// in 2022); pin the install to the release
  -- tag pushed by `make publish`, and point at the lua/ subdir of the monorepo.
  url = "git+https://github.com/voxgig-sdk/fried-apps-sdk.git",
  tag = "lua/v0.0.1",
  dir = "fried-apps-sdk/lua"
}
description = {
  summary = "Unofficial generated Lua SDK for the Fried Apps public API. Not affiliated with or endorsed by the upstream API provider.",
  homepage = "https://github.com/voxgig-sdk/fried-apps-sdk",
  issues_url = "https://github.com/voxgig-sdk/fried-apps-sdk/issues",
  license = "MIT",
  labels = { "voxgig", "sdk", "generated-sdk", "openapi", "api-client", "fried-apps" }
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["fried-apps_sdk"] = "fried-apps_sdk.lua",
    ["config"] = "config.lua",
    ["config_shared"] = "config_shared.lua",
    ["features"] = "features.lua",
  }
}
