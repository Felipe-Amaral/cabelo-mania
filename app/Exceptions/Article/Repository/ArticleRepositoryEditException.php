<?php

namespace App\Exceptions\Article\Repository;

use Exception;
use Fig\Http\Message\StatusCodeInterface as StatusCode;

class ArticleRepositoryEditException extends Exception
{
    public function report()
    {
    }

    public function render()
    {
        return response(
            'Falha no repositório ao atualizar artigo.',
            StatusCode::STATUS_BAD_REQUEST
        );
    }
}
