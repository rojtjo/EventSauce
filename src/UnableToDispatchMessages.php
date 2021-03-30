<?php

namespace EventSauce\EventSourcing;

use RuntimeException;
use Throwable;

class UnableToDispatchMessages extends RuntimeException
{
    public static function dueTo(string $reason, Throwable $previous): self
    {
        return new self("Unable to dispatch messages. {$reason}", 0, $previous);
    }
}
