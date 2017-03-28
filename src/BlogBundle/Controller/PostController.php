<?php

declare (strict_types = 1);

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\{Request, Response};

class PostController extends Controller
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function createPostAction(Request $request) : Response
    {
        $command = new CreateNewPost(
            (string) $request->get('slug'),
            (string) $request->get('title'),
            (string) $request->get('subtitle'),
            (string) $request->get('description'),
            (string) $request->get('lead'),
            (string) $request->get('content')
        );

        $this->commandBus->handle($command);

        return new Response(201);
    }
}
