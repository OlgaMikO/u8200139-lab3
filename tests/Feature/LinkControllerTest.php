<?php

test('get_link_correct', function () {
    $mock = mock(\App\Domain\Links\Actions\GetLinkAction::class)
        ->shouldReceive('execute')
        ->with(1)
        ->andReturn([
        'id' => 1,
        'chat_id' => 5,
        'url' => 'http://u8200139-lab3.local/docs/swagger'
    ]);
    $response = $this->get('api/v1/link/1', [], $mock);
    $response->assertOk();
});

//test('get_link_incorrect', function () {
//    $response = $this->get('api/v1/link/0');
//
//    $response->assertStatus(404);
//});

it('create_link_correct', function ($chat_id, $url) {
    $mock = mock(\App\Domain\Links\Actions\CreateLinkAction::class)
        ->shouldReceive('execute')
        ->with([
            'id' => 1,
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ])->andReturn([
            'id' => 1,
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ]);
    $response = $this->post('api/v1/link', ['chat_id' => $chat_id, 'url' => $url], [], $mock);

    $response->assertStatus(201);
})->with([
    [5, 'http://u8200139-lab3.local/docs/swagger']
]);

//it('create_link_incorrect', function ($chat_id, $url) {
//    $response = $this->post('api/v1/link', ['chat_id' => $chat_id, 'url' => $url]);
//
//    $response->assertStatus(302);
//})->with([
//    [-1, 'http://u8200139-lab3.local'],
//    [10, 'string']
//]);

it('patch_link_correct', function ($url) {
    $mock = mock(\App\Domain\Links\Actions\PatchLinkAction::class)
        ->shouldReceive('execute')
        ->with(1, [
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ])->andReturn([
            'id' => 1,
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ]);
    $response = $this->patch('api/v1/link/1', [$url], [], $mock);

    $response->assertOk();
})->with([
    ['http://u8200139-lab3.local/docs/swagger']
]);

//it('patch_link_incorrect', function ($url) {
//    $response = $this->patch('api/v1/link/2', [$url]);
//
//    $response->assertStatus(302);
//})->with([
//    ['string']
//]);

it('put_link_correct', function ($chat_id, $url) {
    $mock = mock(\App\Domain\Links\Actions\ReplaceLinkAction::class)
        ->shouldReceive('execute')
        ->with(1, [
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ])->andReturn([
            'id' => 1,
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ]);
    $response = $this->put('api/v1/link/1', ['chat_id' => $chat_id, 'url' => $url], [], $mock);

    $response->assertOk();
})->with([
    [1, 'http://u8200139-lab3.local/docs/swagger']
]);

//it('put_link_incorrect', function ($chat_id, $url) {
//    $response = $this->put('api/v1/link/2', ['chat_id' => $chat_id, 'url' => $url]);
//
//    $response->assertStatus(302);
//})->with([
//    [1, 'string'],
//    [-1, 'http://u8200139-lab3.local/docs/swagger']
//]);

test('delete_link_correct', function () {
    $mock = mock(\App\Domain\Links\Actions\DeleteLinkAction::class)
        ->shouldReceive('execute')
        ->with(1, [
        ])->andReturn([
            'id' => 1,
            'chat_id' => 5,
            'url' => 'http://u8200139-lab3.local/docs/swagger'
        ]);

    $response = $this->delete('api/v1/link/1', [], [], $mock);

    $response->assertOk();
});

//test('delete_link_incorrect', function () {
//    $response = $this->delete('api/v1/link/0');
//
//    $response->assertStatus(404);
//});
