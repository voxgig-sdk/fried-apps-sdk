# FriedApps SDK feature factory

from friedapps_sdk.feature.base_feature import FriedAppsBaseFeature
from friedapps_sdk.feature.ratelimit_feature import FriedAppsRatelimitFeature
from friedapps_sdk.feature.retry_feature import FriedAppsRetryFeature
from friedapps_sdk.feature.test_feature import FriedAppsTestFeature
from friedapps_sdk.feature.timeout_feature import FriedAppsTimeoutFeature


_FEATURES = {
    "base": lambda: FriedAppsBaseFeature(),
    "ratelimit": lambda: FriedAppsRatelimitFeature(),
    "retry": lambda: FriedAppsRetryFeature(),
    "test": lambda: FriedAppsTestFeature(),
    "timeout": lambda: FriedAppsTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
