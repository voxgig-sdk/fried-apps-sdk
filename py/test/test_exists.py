# ProjectName SDK exists test

import pytest
from friedapps_sdk import FriedAppsSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = FriedAppsSDK.test(None, None)
        assert testsdk is not None
