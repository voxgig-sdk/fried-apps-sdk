"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.FriedAppsError = void 0;
class FriedAppsError extends Error {
    isFriedAppsError = true;
    sdk = 'FriedApps';
    code;
    ctx;
    status = -1;
    // `err.notFound` rather than a magic number at every call site.
    get notFound() { return 404 === this.status; }
    constructor(code, msg, ctx) {
        super(msg);
        this.code = code;
        this.ctx = ctx;
    }
}
exports.FriedAppsError = FriedAppsError;
//# sourceMappingURL=FriedAppsError.js.map