<?php

namespace Xact;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Xact\Models\CreateNFTDto;
use Xact\Models\PaymentDto;
use Xact\Models\ScopeEnum;
use Xact\Models\TokenAssociateDto;
use Xact\Models\TokenTransferDto;
use Xact\Models\SellNFTDto;
use Xact\Models\DeleteNFTDto;
use Xact\Models\BuyNFTDto;
use Xact\Models\RefreshAccountDTO;

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

    public function generateQRCode(array $scope = [ScopeEnum::PROFILE], string $uniqId, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $scope;
        $payload['uniqId'] = $uniqId;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/getQRCode', ['json' => $payload]);
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

    public function sellNFT(SellNFTDto $sellNFTDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $sellNFTDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post('/xact/sell-nft', ['json' => $payload]);
    }

    public function deleteNFTFromSale(DeleteNFTDto $deleteNFTDto, string $webhookUrl): ResponseInterface
    {
        $payload = (array) $deleteNFTDto;
        $payload['webhook'] = $webhookUrl;

        return $this->api->post("/xact/delete-sell-nft/${$deleteNFTDto['tokenId']}", ['json' => $payload]);
    }

    public function buyNFT(BuyNFTDto $buyNFTDto, string $webhookUrl): ResponseInterface
    {
       $payload = (array) $buyNFTDto;
       $payload['webhook'] = $webhookUrl;

       return $this->api->post("/xact/buy-nft${$buyNFTDto['tokenId']}", ['json' => $payload]);
    }

    public function refreshAccount(RefreshAccountDTO $refreshAccount): ResponseInterface
    {
       $payload = (array) $refreshAccount;
       $payload['scope'] = $payload['scope'] ? $payload['scope'] : [ScopeEnum::PROFILE];

       return $this->api->post('/xact/sdk/refresh', ['json' => $payload]);
    }

    public function getNFTForSaleByTokenId(string $tokenId): ResponseInterface
    {
        return $this->api->get("/xact/sdk/nft-for-sale?tokenId=${tokenId}");
    }

}
