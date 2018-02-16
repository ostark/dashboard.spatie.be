<?php

namespace App\Console\Components\OhDear;

use Illuminate\Console\Command;
use OhDear\LaravelWebhooks\OhDearWebhookCall;

class FakeDowntime extends Command
{
    protected $signature = 'dashboard:fake-downtime {url=some-site.com} {--R|recover}';

    protected $description = 'Fakes a downtime event';

    public function handle()
    {
        $type = $this->option('recover') ? 'uptimeCheckRecovered' : 'uptimeCheckFailed';
        $fakePayLoad = [
            'type'     => $type,
            'dateTime' => date('Ymdhis'),
            'site'     => [
                'id'  => 1234,
                'url' => $this->argument('url')
            ],
            'run'      => []
        ];

        $ohDearWebhookCall = new OhDearWebhookCall($fakePayLoad);

        event("ohdear-webhooks::{$type}", $ohDearWebhookCall);

    }
}
