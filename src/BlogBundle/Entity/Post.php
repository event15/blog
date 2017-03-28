<?php

declare (strict_types = 1);

namespace BlogBundle\Entity;

use BlogBundle\Entity\Post\PostId;
use BlogBundle\Entity\Post\PostLinks;
use BlogBundle\Entity\Post\PostMetadata;

/**
 * Post
 */
final class Post
{
    private $id;
    private $metadata;
    private $createdAt;
    private $modifiedAt;


    public function __construct(PostId $postId, PostMetadata $meta, PostLinks $links)
    {
        $this->id       = $postId;
        $this->metadata = $meta;
        $this->links    = $links;

        $this->createdAt  = new \DateTime('now');
        $this->modifiedAt = new \DateTime('now');
    }
}