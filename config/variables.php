<?php

return [
    'roles' => [
        0 => 'Super Admin',
        1 => 'Admin',
        2 => 'Editor',
        3 => 'User',
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
    ],
    'upload' => [
        1 => 'one_file',
        2 => 'multiple'
    ]
];
