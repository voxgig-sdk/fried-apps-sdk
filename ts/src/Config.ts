
import { BaseFeature } from './feature/base/BaseFeature'
import { TestFeature } from './feature/test/TestFeature'



const FEATURE_CLASS: Record<string, typeof BaseFeature> = {
   test: TestFeature,

}


class Config {

  makeFeature(this: any, fn: string) {
    const fc = FEATURE_CLASS[fn]
    const fi = new fc()
    // TODO: errors etc
    return fi
  }

  // False for a feature added at runtime via options.extend (station's
  // adopt path) - the constructor uses this to skip makeFeature for names
  // no generated class backs.
  hasFeature(this: any, fn: string) {
    return null != FEATURE_CLASS[fn]
  }


  main = {
    name: 'FriedApps',
        slug: "fried-apps",
    version: "0.0.1",
    target: "ts",

  }


  feature = {
     test:     {
      "options": {
        "active": false
      },
      "transport": "base"
    },

  }


  options = {
    base: "https://api.friedapps.com",

    headers: {
      "content-type": "application/json"
    },

    entity: {
      
      temporary_email: {
      },

    }
  }


  entity = {
    "temporary_email": {
      "fields": [
        {
          "name": "domains",
          "short": "List of available email domains",
          "type": "`$ARRAY`"
        }
      ],
      "name": "temporary_email",
      "op": {
        "list": {
          "input": "data",
          "name": "list",
          "points": [
            {
              "args": {},
              "kind": "http",
              "method": "GET",
              "orig": "/temp-mail/domains",
              "parts": [
                "temp-mail",
                "domains"
              ],
              "select": {},
              "transform": {
                "req": "`reqdata`",
                "res": "`body.domains`"
              }
            }
          ]
        }
      },
      "relations": {
        "ancestors": []
      }
    }
  }
}


const config = new Config()

export {
  config
}

