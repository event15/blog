<?php

declare (strict_types = 1);

namespace BlogBundle\Entity;

use BlogBundle\Entity\Post\Slug;
use BlogBundle\Entity\Post\Title;

interface Posts
{
    public function getBySlug(Slug $slug) : Post;
    public function getByTitle(Title $title) : Post;
}