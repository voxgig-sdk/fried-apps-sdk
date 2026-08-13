# FriedApps SDK configuration

module FriedAppsConfig
  def self.make_config
    {
      "main" => {
        "name" => "FriedApps",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://api.friedapps.com",
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "temporary_email" => {},
        },
      },
      "entity" => {
        "temporary_email" => {
          "fields" => [
            {
              "active" => true,
              "name" => "domains",
              "req" => false,
              "type" => "`$ARRAY`",
              "index$" => 0,
            },
          ],
          "name" => "temporary_email",
          "op" => {
            "list" => {
              "input" => "data",
              "name" => "list",
              "points" => [
                {
                  "active" => true,
                  "args" => {},
                  "kind" => "http",
                  "method" => "GET",
                  "orig" => "/temp-mail/domains",
                  "parts" => [
                    "temp-mail",
                    "domains",
                  ],
                  "select" => {},
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body.domains`",
                  },
                  "index$" => 0,
                },
              ],
              "key$" => "list",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    FriedAppsFeatures.make_feature(name)
  end
end
