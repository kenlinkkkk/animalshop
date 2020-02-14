<?php

return [
    'roles' => [
        'sadmin' => 0,
        'admin' => 1,
        'editor' => 2,
        'user' => 3,
    ],
    'bill_statuses' => [
        'not_confirm' => [
            'code' => 0,
            'message' => 'Chưa xác nhận',
        ],
        'confirmed' => [
            'code' => 1,
            'message' => 'Đã xác nhận',
        ]
    ],
    'product_status' => [
        'not_active' => [
            'code' => 0,
            'massage' => 'Ẩn'
        ],
        'active' => [
            'code' => 1,
            'massage' => 'Hiện',
        ],
        'out_stock' => [
            'code' => 2,
            'massage' => 'Hết hàng'
        ]
    ]
];
