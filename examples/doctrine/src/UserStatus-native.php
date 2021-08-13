<?php declare(strict_types=1);

namespace Example;

use Mabe\Enum\Cl\EnumBc;

/**
 * @method static UserStatus ACTIVE()
 * @method static UserStatus BANNED()
 * @method static UserStatus DELETED()
 */
enum UserStatus:string
{
    use EnumBc;

    /** @internal */
    case ACTIVE = 'active';

    /** @internal */
    case BANNED = 'banned';

    /** @internal */
    case DELETED = 'deleted';
}
