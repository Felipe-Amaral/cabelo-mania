<?php

namespace App\Exceptions;

use Exception;
use Fig\Http\Message\StatusCodeInterface as StatusCode;

class ArticleRepositoryGetAllException extends Exception
{
    public function report()
    {
    }

    public function render()
    {
        return response(
            'Falha no repositório ao obter artigos.',
            StatusCode::STATUS_BAD_REQUEST
        );
    }
}
