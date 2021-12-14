<?php

namespace App\Exceptions\Article\Repository;

use Exception;
use Fig\Http\Message\StatusCodeInterface as StatusCode;

class ArticleRepositoryCreateException extends Exception
{
    public function report()
    {
    }

    public function render()
    {
        return response(
            'Falha no repositório ao tentar criar o artigo.',
            StatusCode::STATUS_BAD_REQUEST
        );
    }
}
