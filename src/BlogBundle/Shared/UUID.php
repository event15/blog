<?php


namespace BlogBundle\Shared;

use BlogBundle\Shared\Exceptions\InvalidUUIDFormatException;
use Ramsey\Uuid\Uuid as BaseUUID;

class UUID
{
    protected $id;

    public function __construct(string $value)
    {
        $pattern = '/' . BaseUUID::VALID_PATTERN . '/';

        if(!preg_match($pattern, (string) $value)) {
            throw new InvalidUUIDFormatException();
        }

        $this->id = (string) $value;
    }

    public function __toString() : string
    {
        return (string) $this->id;
    }

    public function isEqual(UUID $id) : bool
    {
        return $this->id === $id->id;
    }
}