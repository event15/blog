<?php

declare (strict_types = 1);

namespace BlogBundle\Entity\Post;


use BlogBundle\Entity\Categories;
use BlogBundle\Entity\Tags;

final class PostLinks
{
    private $tags;
    private $categories;

    public function __construct(Categories $categories, Tags $tags)
    {
        $this->categories = $categories;
        $this->tags       = $tags;
    }
}