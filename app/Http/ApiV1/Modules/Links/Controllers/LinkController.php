<?php

namespace App\Http\ApiV1\Modules\Links\Controllers;

use App\Domain\Links\Actions\CreateLinkAction;
use App\Domain\Links\Actions\DeleteLinkAction;
use App\Domain\Links\Actions\GetLinkAction;
use App\Domain\Links\Actions\PatchLinkAction;
use App\Domain\Links\Actions\ReplaceLinkAction;
use App\Http\ApiV1\Modules\Links\Requests\LinkRequest;
use App\Http\ApiV1\Modules\Links\Requests\PatchRequest;
use App\Http\ApiV1\Modules\Links\Resources\LinkResource;


class LinkController
{

    public function get(int $id,
                        GetLinkAction $action
    ) {
        return new LinkResource($action->execute($id));
    }

    public function create(LinkRequest $request,
                           CreateLinkAction $action
    ) {
        return new LinkResource($action->execute($request->validated()));
    }

    public function patch(int $id,
                          PatchRequest $url,
                          PatchLinkAction $action
    ) {
        return new LinkResource($action->execute($id, $url->validated()));
    }

    public function replace(int $id,
                            LinkRequest $request,
                            ReplaceLinkAction $action
    ) {
        return new LinkResource($action->execute($id, $request->validated()));
    }

    public function delete(int $id,
                           DeleteLinkAction $action
    ) {
        return new LinkResource($action->execute($id));
    }

}
