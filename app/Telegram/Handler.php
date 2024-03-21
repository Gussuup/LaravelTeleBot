<?php

namespace app\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler {

    public function hello(): void {
        $this->reply(message:"It's alive!!");
    }
}
