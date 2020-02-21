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
        0 => [
            'name' => 'not_active',
            'massage' => 'Ẩn'
        ],
        1 => [
            'name' => 'active',
            'massage' => 'Còn hàng',
        ],
        2 => [
            'name' => 'out_of_stock',
            'massage' => 'Hết hàng'
        ]
    ],
    'upload' => [
        1 => 'one_file',
        2 => 'multiple'
    ]
];
