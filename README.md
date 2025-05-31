# CakePHP2 AWS Plugin

## Config

`Config/core.php`

```php
    Configure::write('Session', [
        'defaults' => 'php',
        'handler' => [
            'engine' => 'Aws.DynamoDbSession',
            'table_name' => 'DYNAMODB_TABLE_NAME'
        ],
        'timeout' => 1440,
        'ini' => [
            'session.cookie_lifetime' => 0,
            'session.gc_maxlifetime' => 2580000,
            'session.gc_probability' => 1,
            'session.gc_divisor' => 100,
        ],
    ]);
```

```php
/*
 * Aws
 */
    Configure::write('Aws', [
        'region' => 'ap-northeast-1',
        'version' => 'latest',
    ]);
```

`Config/email.php`

```php
class EmailConfig
{
    /**
     * Default email profile values.
     *
     * @var array
     */
    public $default = [
        'transport' => 'Aws.AmazonSesApi',
        'from' =>['example@example.com',
        'charset' => 'utf-8',
        'headerCharset' => 'utf-8',
    ];
}
```
