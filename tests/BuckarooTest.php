<?php

declare(strict_types=1);

namespace Finalbytes\Buckaroo\Tests;

use Buckaroo\BuckarooClient;
use Buckaroo\PaymentMethods\PaymentFacade;
use Buckaroo\Services\TransactionService;

class BuckarooTest extends TestCase
{
    /** @test */
    public function itWorksWithAnAppInstance(): void
    {
        $this->assertInstanceOf(BuckarooClient::class, $this->app['Buckaroo']);

        $this->assertInstanceOf(BuckarooClient::class, app('Buckaroo'));
    }

    /** @test */
    public function wrapsTransactionService(): void
    {
        $service = app('Buckaroo');
        $this->assertInstanceOf(TransactionService::class, $service->transaction('abc'));
    }

    /** @test */
    public function wrapsPaymentMethod(): void
    {
        $service = app('Buckaroo');
        $this->assertInstanceOf(PaymentFacade::class, $service->method('iDeal'));
    }
}
