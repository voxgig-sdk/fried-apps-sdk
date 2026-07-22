# FriedApps SDK feature factory

from feature.base_feature import FriedAppsBaseFeature
from feature.test_feature import FriedAppsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: FriedAppsBaseFeature(),
        "test": lambda: FriedAppsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
