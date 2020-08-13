<?php

$connection = new AMQPConnection([
    'host' => '127.0.0.1',
    'vhost' => '/',
    'port' => 5672,
    'login' => 'root',
    'password' => '123'
]);

$connection->connect();

$channel = new AMQPChannel($connection);

$exchange = new AMQPException($channel);
$exchange->setName('message exchange');
$exchange->setType(AMQP_EX_TYPE_DIRECT);

$exchange->setFlags(AMQP_DURABLE);
$exchange->declarateExchange();