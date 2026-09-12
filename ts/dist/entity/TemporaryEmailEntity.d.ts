import { FriedAppsEntityBase } from '../FriedAppsEntityBase';
import type { FriedAppsSDK } from '../FriedAppsSDK';
import type { Control } from '../types';
import type { TemporaryEmail, TemporaryEmailListMatch } from '../FriedAppsTypes';
declare class TemporaryEmailEntity extends FriedAppsEntityBase<TemporaryEmail> {
    constructor(client: FriedAppsSDK, entopts: any);
    make(this: TemporaryEmailEntity): TemporaryEmailEntity;
    list(this: any, reqmatch?: TemporaryEmailListMatch, ctrl?: Control): Promise<TemporaryEmailEntity[]>;
}
export { TemporaryEmailEntity };
