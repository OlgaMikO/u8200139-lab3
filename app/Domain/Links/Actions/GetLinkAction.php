<?php

namespace App\Domain\Links\Actions;

use App\Domain\Links\Models\Link;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class GetLinkAction
{

    public function execute(int $id) : Link
    {
        return Link::findOrFail($id);
    }

}
