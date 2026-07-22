
import { Context } from './Context'


class FriedAppsError extends Error {

  isFriedAppsError = true

  sdk = 'FriedApps'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  FriedAppsError
}

