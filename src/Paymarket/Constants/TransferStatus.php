<?php

declare(strict_types=1);

namespace AcquiroPay\Paymarket\Constants;

class TransferStatus
{
    public const CREATED = 1;
    public const PROCESSING = 2;
    public const COMPLETED = 3;
    public const DECLINED = 4;
    public const CANCELED = 5;
    public const ERROR = 6;
}