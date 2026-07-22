
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { FriedAppsSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await FriedAppsSDK.test()
    equal(null !== testsdk, true)
  })

})
