<?php

// resources/lang/en/messages.php

return [
    'BUY_PROVIDER_PLAN' => 'خرید پلن فراهم کننده',
    'EXTEND_PROVIDER_PLAN' => 'تمدید پلن فراهم کننده',
    'BUY_PROVIDER_STAR' => 'خرید ستاره',
    'BUY_STORY' => 'خرید استوری',
    'BUY_PROMOTE_PRODUCT' => 'ارتقا محصول',
    'SUCCEED' => 'موفق',
    'INIT' => 'تراکنش اولیه',
    'FAILED' => 'ناموفق',
    'post' => 'مقاله',
    'posts' => 'مقالات',
    'media_path' => 'فایل',


    'story_type' => [
        'App\User' => 'فراهم کننده',
        'App\Models\User' => 'فراهم کننده',
        'App\Models\Service' => 'خدمات',
        'App\Service' => 'خدمات',
        'App\Models\Product' => 'محصول',
        'App\Product' => 'محصول',
    ],


    'story_statuses' => [
        0 => 'استوری تازه',
        1 => 'استوری تایید شده',
        2 => 'ثبت توسط ادمین',
        -1 => 'غیر فعال توسط ادمین',

    ],


    'payment_statuses' => [
        'INIT' => 'در حال پرداخت',
        'FAILED' => 'ناموفق / انصراف',
        'SUCCEED' => 'موفق',
    ],


    'models' => [
        'App\Models\Service' => 'خدمات',
        'App\Service' => 'خدمات',
        'App\Models\Product' => 'محصول',
        'App\Product' => 'محصول',
    ],
];
