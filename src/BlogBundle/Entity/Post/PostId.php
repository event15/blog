<?php

declare (strict_types = 1);

namespace BlogBundle\Entity\Post;

use Ramsey\Uuid\Uuid as BaseUUID;

final class PostId
{
    public static function generate() : PostId
    {
        return new self(BaseUUID::uuid4());
    }
}