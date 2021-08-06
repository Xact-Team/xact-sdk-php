<?php

namespace Xact;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Xact\Models\CreateNFTDto;
use Xact\Models\PaymentDto;
use Xact\Models\ScopeEnum;
use Xact\Models\TokenAssociateDto;
use Xact\Models\TokenTransferDto;

class Client
{
    private $api;

    public function __construct(string $apiKey)
    {
        $this->api = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.xact.ac/v1',
            RequestOptions::HEADERS => [
                'Authorization' => "X-API-KEY: ${apiKey}",
            ],
        ]);
    }

    public function generateQRCode(array $scope = [ScopeEnum::PROFILE], string $webhookUrl): ResponseInterface
    {
        $payload = (array) $paymentDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/getQRCode', ['json' => ['scope' => $payload]]);
    }

    public function getXactFeesPayment(float $hbarAmount, bool $supportXact = false): ResponseInterface
    {
        return $this->api->get("/xact/fees/payment?amount=${hbarAmount}&support=${supportXact}");
    }

    public function pay(PaymentDto $paymentDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $paymentDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/pay', ['json' => $payload]);
    }

    public function associate(TokenAssociateDto $tokenAssociationDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $tokenAssociationDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/associate-token', ['json' => $payload]);
    }

    public function getXactFeesTransfer(): ResponseInterface
    {
        return $this->api->get('/xact/fees/transfer-token');
    }

    public function transfer(TokenTransferDto $tokenTransferDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $tokenTransferDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/transfer-token', ['json' => $payload]);
    }

    public function getXactFeesCreateNFT(): ResponseInterface
    {
        return $this->api->get('/xact/fees/create-token');
    }

    public function createNFT(CreateNFTDto $createNFTDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $createNFTDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/create-nft', ['json' => $payload]);
    }
}
