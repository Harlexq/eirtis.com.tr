<?php
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
include('pages/common/head.php');
include('pages/common/header.php');
include('pages/home/about.php');
include('pages/home/eirtis.php');
include('pages/home/services.php');
include('pages/home/team.php');
include('pages/common/footer.php');
include('pages/common/foot.php');
