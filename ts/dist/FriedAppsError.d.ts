import { Context } from './Context';
declare class FriedAppsError extends Error {
    isFriedAppsError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { FriedAppsError };
