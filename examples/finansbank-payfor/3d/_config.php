<?php

require '../../_main_config.php';

$path = '/finansbank-payfor/3d/';
$baseUrl = $hostUrl.$path;

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$ip = $request->getClientIp();

$account = \Mews\Pos\Factory\AccountFactory::createPayForAccount('qnbfinansbank-payfor', '085300000009704', 'QNB_API_KULLANICI_3DPAY', 'UcBN0', '3d', '12345678');

try {
    $pos = \Mews\Pos\Factory\PosFactory::createPosGateway($account);
    $pos->setTestMode(true);
} catch (\Mews\Pos\Exceptions\BankNotFoundException $e) {
    dump($e->getCode(), $e->getMessage());
} catch (\Mews\Pos\Exceptions\BankClassNullException $e) {
    dump($e->getCode(), $e->getMessage());
}

$templateTitle = '3D Model Payment';
