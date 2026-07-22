package core

type FriedAppsError struct {
	IsFriedAppsError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewFriedAppsError(code string, msg string, ctx *Context) *FriedAppsError {
	return &FriedAppsError{
		IsFriedAppsError: true,
		Sdk:              "FriedApps",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *FriedAppsError) Error() string {
	return e.Msg
}
