<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

use function info;
use function strval;

final class HeaderDumper
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function handle(Request $request, Closure $next)
    {
        $this->logger->info(
            'request',
            [
                'header' => strval($request->headers)
            ]
        );

        $response = $next($request);

        $this->logger->info(
            'response',
            [
                'header' => strval($response->header)
            ]
        );

        return $response;
    }
}