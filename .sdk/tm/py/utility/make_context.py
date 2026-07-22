# FriedApps SDK utility: make_context

from core.context import FriedAppsContext


def make_context_util(ctxmap, basectx):
    return FriedAppsContext(ctxmap, basectx)
