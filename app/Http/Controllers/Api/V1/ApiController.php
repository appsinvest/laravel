<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\JsonResponse;
use OpenApi\Attributes as OA;
use SoftInvest\Http\Controllers\HttpResponseController;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends HttpResponseController
{
    #[OA\Get(
        path: '/api/v1/endpoint ',
        summary: 'Endpoint',
        tags: ['Endpoint'],
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Successfully response',
                content: new OA\JsonContent()
            ),
            new OA\Response(
                response: Response::HTTP_INTERNAL_SERVER_ERROR,
                description: 'Error: Internal Server Error'
            ),
        ]
    )]
    public function endpoint(): JsonResponse
    {
        return $this->response(function () {
            return [];
        });
    }
}
