<?php

declare (strict_types = 1);

namespace BlogBundle\Entity\Post;

final class PostMetadata
{
    private $slug;
    private $title;
    private $subtitle;
    private $description;
    private $lead;
    private $content;


    public function __construct(
        Title $title,
        Slug $slug,
        $subtitle,
        $description,
        $lead,
        $content
    ) {
        $this->title       = $title;
        $this->slug        = $slug;
        $this->subtitle    = $subtitle;
        $this->description = $description;
        $this->lead        = $lead;
        $this->content     = $content;
    }
}