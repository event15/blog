<?php

declare (strict_types = 1);

namespace BlogBundle\Entity\Post;


final class Title
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}