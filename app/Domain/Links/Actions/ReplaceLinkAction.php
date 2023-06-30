<?php

namespace App\Domain\Links\Actions;

use App\Domain\Links\Models\Link;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class ReplaceLinkAction
{
    public function execute(int $id, array $fields) : Link
    {
        $link = Link::findOrFail($id);
        $link->update($fields);
        return $link;
    }
}
