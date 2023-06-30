<?php

namespace App\Domain\Links\Actions;

use App\Domain\Links\Models\Link;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class DeleteLinkAction
{
    public function execute(int $id) : Link
    {
        $link = Link::findOrFail($id);
        $link->delete();
        return $link;
    }
}
