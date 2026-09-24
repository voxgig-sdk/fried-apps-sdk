
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { FriedAppsSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = FriedAppsSDK.test()
    equal(testsdk instanceof FriedAppsSDK, true,
      'FriedAppsSDK.test() must return a client synchronously')
  })

})
