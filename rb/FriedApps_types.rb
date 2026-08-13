# frozen_string_literal: true

# Typed models for the FriedApps SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# TemporaryEmail entity data model.
#
# @!attribute [rw] domains
#   @return [Array, nil]
TemporaryEmail = Struct.new(
  :domains,
  keyword_init: true
)

# Request payload for TemporaryEmail#list.
#
# @!attribute [rw] domains
#   @return [Array, nil]
TemporaryEmailListMatch = Struct.new(
  :domains,
  keyword_init: true
)

