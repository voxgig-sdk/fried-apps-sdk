package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewTemporaryEmailEntityFunc func(client *FriedAppsSDK, entopts map[string]any) FriedAppsEntity

