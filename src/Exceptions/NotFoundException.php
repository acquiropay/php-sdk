<?php

declare(strict_types=1);

namespace AcquiroPay\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct(string $message = 'The resource you are looking for could not be found.')
    {
        parent::__construct($message);
    }
}
