./temp.log にログが出力されます。

<?php
  require("vendor/autoload.php");

  use \Monolog\Logger;
  use \Monolog\Handler\StreamHandler;

  // ロガー作成
  $logger = new Logger('sample');
  $logger->pushHandler(new StreamHandler('./temp.log', Logger::INFO));

  $logger->info('ログ出力');