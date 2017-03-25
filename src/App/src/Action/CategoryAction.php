<?php

namespace App\Action;

use Doctrine\Common\Proxy\Exception\InvalidArgumentException;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use PHPUnit\Framework\Exception;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class CategoryAction implements ServerMiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        switch ($request->getAttribute('action', 'index')) {
            case 'index':
                return $this->indexAction($request, $delegate);
            case 'view':
                return $this->viewAction($request, $delegate);
            case 'search':
                return $this->searchAction($request, $delegate);
            case 'edit':
                return $this->editAction($request, $delegate);
            case 'add':
                return $this->addAction($request, $delegate);
            default:
                throw new InvalidArgumentException('wrong parameter.');
        }
    }

    private final function indexAction(
        ServerRequestInterface $request,
        DelegateInterface $delegate,
        callable $next = null
    )
    {
        return new JsonResponse(['ack' => time()]);
    }

    private final function viewAction(
        ServerRequestInterface $request,
        DelegateInterface $delegate,
        callable $next = null
    )
    {
        return new JsonResponse(['ack' => time()]);
    }

    private final function searchAction(
        ServerRequestInterface $request,
        DelegateInterface $delegate,
        callable $next = null
    )
    {
        return new JsonResponse(['ack' => time()]);
    }

    private final function editAction(
        ServerRequestInterface $request,
        DelegateInterface $delegate,
        callable $next = null
    )
    {
        return new JsonResponse(['ack' => time()]);
    }

    private final function addAction(
        ServerRequestInterface $request,
        DelegateInterface $delegate,
        callable $next = null
    )
    {
        return new JsonResponse(['ack' => time()]);
    }
}
