<?php

namespace Bigfork\Extensions;

use SilverStripe\Core\Extension;

class SiteConfigExtension extends Extension
{
    private static $db = [
        'EmailAddress' => 'Varchar(254)'
    ];
}
