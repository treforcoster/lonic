<?php

// File generated from our OpenAPI spec
namespace Forminator\Stripe\Terminal;

/**
 * A Configurations object represents how features should be configured for terminal readers.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\Stripe\StripeObject $bbpos_wisepos_e
 * @property null|bool $is_account_default Whether this Configuration is the default for your account
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|string $name String indicating the name of the Configuration object, set by the user
 * @property null|\Stripe\StripeObject $offline
 * @property null|\Stripe\StripeObject $tipping
 * @property null|\Stripe\StripeObject $verifone_p400
 */
class Configuration extends \Forminator\Stripe\ApiResource
{
    const OBJECT_NAME = 'terminal.configuration';
    use \Forminator\Stripe\ApiOperations\All;
    use \Forminator\Stripe\ApiOperations\Create;
    use \Forminator\Stripe\ApiOperations\Delete;
    use \Forminator\Stripe\ApiOperations\Retrieve;
    use \Forminator\Stripe\ApiOperations\Update;
}