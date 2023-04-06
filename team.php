<?php

use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
include('pages/common/head.php');
include('pages/common/header.php');
include('pages/team/team.php');
include('pages/common/footer.php');
include('pages/common/foot.php');
