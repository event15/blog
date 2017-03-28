<?php

declare (strict_types = 1);

namespace BlogBundle\Entity\Post;


final class Slug
{
    private $slug;

    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }
}