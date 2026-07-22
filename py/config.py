# FriedApps SDK configuration


def make_config():
    return {
        "main": {
            "name": "FriedApps",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://api.friedapps.com",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "temporary_email": {},
            },
        },
        "entity": {
      "temporary_email": {
        "fields": [
          {
            "active": True,
            "name": "domain",
            "req": False,
            "type": "`$ARRAY`",
            "index$": 0,
          },
        ],
        "name": "temporary_email",
        "op": {
          "list": {
            "input": "data",
            "name": "list",
            "points": [
              {
                "active": True,
                "args": {},
                "method": "GET",
                "orig": "/temp-mail/domains",
                "parts": [
                  "temp-mail",
                  "domains",
                ],
                "select": {},
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "list",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
