<?php

$client = new Aws\S3\S3Client(Configure::read('Aws'));
$client->registerStreamWrapperV2();
