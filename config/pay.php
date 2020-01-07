<?php

return [
    'alipay' => [
        'app_id'         => '2016102100731822',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuUizP1Qb2KP5iE7cLtt1ALBTn1xZG7+YwL1CqJHblc6gtnLfLxVPJajGhBy0mYRuncyVxQNWWW9036iBioXPS12MAE3XM81hIey3SbehVxtAuHJnO4Qxxk9CBzvoy1F1sb4o94X4x9VuXCwJ9ymyUAhtC8KA7laWBtVEM/iXjcry7Fw/Etlpr0r/v2+AFd47WqdTjiJriqgExm06lC2ohEC8jElyECUzWHZBn2j+xIeKlcSzVZROOvMgwIQa+NKpqgtJhX8svWhbcZ8FzQRYaD9tVoFYgsmSDlIfKZHmLZX36HDG8gZhKIgpv12MVqiCBGtGcijBx87RZHyO1UojxQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAo5ZvOXDcP52G1ej/xW12DHi37zhUqP60MDAJEHb0/N5BJqdDGCZ5glCHTGYH9YQ+ro5UIUT9cpkaazzx4B6fbPOgkqoMLDq1hQLsGU/4YvlwB0BhXyCzNdM9IZ0BdfddiUrXYUyOjfDbNx7RJORDWGg3/35HIuNS6ksbKMCOE+Y/A/FBYLJNq/E2KQJFQzQLL4d/QjWN/HHUKhI5IiREPqJGKqI7a7OA0KD1PQyLM7KBcbtK8kEM311qq1k2BXlaEijZ036o+n0x3fuCicT1D55v+MSO1jJH2db2HTsc4iKHzvhC8xhuDltBBmI66jt9P3NjPTFsnOa9ssDc/WxwiwIDAQABAoIBABpPG1w1lnZ0sza73ka2MAIZeBt1B8iWDgyh7RNEzmnMpNW+mL/NkEUxBlF3J1iJCDuykD05hzli/ii5CH1u71zqYay0xHhoiMD3k1kOz3e7fhTsebx+2dOSQYaiZZW/Tr/B1ZnEYjjZv6fBwQkZ3Ore+AKTIIWv4ankol2Pekogv2j6zg+PbNpx2emduDuqX5BP4TbLowufmglwFRKrxdWDtdwve7PzgBp7wckeiuzcjlZSN8e+/omUnLI3nDRPy2T5SgGfT2TUtsOj/HhRD709QL3rdjkuu6l+rZOePlT6mdaAJ9Fi8yvvvbRbO2qTTxWjE04bPNq1jR3gIzuz5WECgYEA4UOs9XqQJwjG0j2aNYHeOQ3jZD8KkMBl0Z80ubbK9yLZTEUvx5QSjaBj4VTOnaJ0iCd9O36OaMI8JO6rxNtrJIpngwbjD5MwAfpi/yyplidzebeWlOUID63lp+HGyozGpEE+RSFxroEmgsh/tLu5grYgP7j28XCrUpfKGhURbLcCgYEAuehvQwAibq4UCUnAbS71Xa0R8wRpBpRLmvOLoiIr6wyXcWXaBWRsfFI+6so2o/B3Hp/SRA/BpPll55+fASXgv5EpnBilrbSJPOYm8BJC6TKpHdD2TcUhjV6yeD54c60Q6jsAFIP1VQBDLd51CZYzoejGPjSAKmQJfFDBsEIMrs0CgYA5faIozGz56V2EzsAKo+hpO0grj4NMyi2yQCWeuC44wKYgtw+oqfvKNYMIQTKyPIHtNdbaVkRWLCxZaKhiB3Xiz4f3gsx0byYzewnFAksNzWfFSrudqI5UIheYryCjFSalSRlxX0W6Oa/wdOdS4w5Hc9/rI3OyzwSKgb7MxU+7JQKBgCE7VmAwrvb/8R7z6wzZXwz+uf2p5ShC6/zn2icCWr1qg8vGfCGIoQfcH9kSio/llTWJNinqcyANYNT1qJOo9LLpvPllQoB5jCqxrXYunX1YC/kDeHPQcD34Foj+CcQLxMFKCKqiKAGoyVlysZMkIVio5n8KHXr2ZOeu++CI/gFlAoGBAKyTeKaAKaMBX1BFi2aPPOFKzbZvY/DVRsyKYBHHuNODsdSDmVKaEWLFjkrEEy6NC9XF6ee1b0NBE6Pesm6kWva/dr2/2NVcrMOYTgCYoHodmpCLJ98mDq/D/U3rEAuBe+G/2qXtoYbvEN9GUdQTN+imVw7IQfF1onNoUQ1CAJKA',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
