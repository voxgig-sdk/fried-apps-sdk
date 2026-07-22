<?php
declare(strict_types=1);

// FriedApps SDK configuration

class FriedAppsConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "FriedApps",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://api.friedapps.com",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "temporary_email" => [],
                ],
            ],
            "entity" => [
        'temporary_email' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'domain',
              'req' => false,
              'type' => '`$ARRAY`',
              'index$' => 0,
            ],
          ],
          'name' => 'temporary_email',
          'op' => [
            'list' => [
              'input' => 'data',
              'name' => 'list',
              'points' => [
                [
                  'active' => true,
                  'args' => [],
                  'method' => 'GET',
                  'orig' => '/temp-mail/domains',
                  'parts' => [
                    'temp-mail',
                    'domains',
                  ],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'list',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return FriedAppsFeatures::make_feature($name);
    }
}
