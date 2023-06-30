<?php

namespace App\Domain\Links\Actions;

use App\Domain\Links\Models\Link;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class CreateLinkAction
{

    public function execute(array $fields) : Link
    {
        $link = new Link($fields);
        $link->save();
        return $link;
    }

}
