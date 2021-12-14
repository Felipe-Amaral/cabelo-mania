<?php

namespace App\Exceptions\Article\Repository;

use Exception;
use Fig\Http\Message\StatusCodeInterface as StatusCode;

class ArticleRepositoryGetByIdException extends Exception
{
    public function report()
    {
    }

    public function render()
    {
        return response(
            'Falha no repositório ao obter artigo por id.',
            StatusCode::STATUS_BAD_REQUEST
        );
    }
}
