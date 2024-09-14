<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    #[OA\Get(
        path: '/',
        summary: 'Main page',
        tags: ['Main'],
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Successfully response',
                content: new OA\XmlContent()
            ),
            new OA\Response(
                response: Response::HTTP_INTERNAL_SERVER_ERROR,
                description: 'Error: Internal Server Error'
            ),
        ]
    )]
    public function __invoke()
    {
        return view('welcome');
    }
}
