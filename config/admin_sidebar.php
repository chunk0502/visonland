<?php

return [
    [
        'title' => 'Dashboard',
        'routeName' => 'admin.dashboard',
        'icon' => '<i class="ti ti-home"></i>',
        'roles' => [],
        'permissions' => ['mevivuDev'],
        'sub' => []
    ],
//    [
//        'title' => 'Bảng khách hàng',
//        'routeName' => null,
//        'icon' => '<i class="ti ti-user"></i>',
//        'roles' => [],
//        'permissions' => ['createCustomers', 'viewCustomers', 'updateCustomers', 'deleteCustomers'],
//        'sub' => [
//            [
//                'title' => 'Thêm Customers',
//                'routeName' => 'admin.customers.create',
//                'icon' => '<i class="ti ti-user"></i>',
//                'roles' => [],
//                'permissions' => ['createCustomers'],
//            ],
//            [
//                'title' => 'DS Customers',
//                'routeName' => 'admin.customers.index',
//                'icon' => '<i class="ti ti-user"></i>',
//                'roles' => [],
//                'permissions' => ['viewCustomers'],
//            ]
//        ]
//    ],
    [
        'title' => 'QL đăng ký khách hàng',
        'routeName' => null,
        'icon' => '<i class="ti ti-users"></i>',
        'roles' => [],
        'permissions' => ['createCustomerRegistrations', 'viewCustomerRegistrations', 'updateCustomerRegistrations', 'deleteCustomerRegistrations'],
        'sub' => [
            [
                'title' => 'Thêm',
                'routeName' => 'admin.customerRegistration.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createCustomerRegistrations'],
            ],
            [
                'title' => 'DS đăng ký',
                'routeName' => 'admin.customerRegistration.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewCustomerRegistrations'],
            ]
        ]
    ],
    // [
    //     'title' => 'Quản lý admin tổng',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-fingerprint"></i>',
    //     'roles' => [],
    //     'permissions' => ['createSupperAdmin_settings', 'viewSupperAdmin_settings', 'updateSupperAdmin_settings', 'deleteSupperAdmin_settings'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm admin tổng',
    //             'routeName' => 'admin.supperAdmin_settings.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createSupperAdmin_settings'],
    //         ],
    //         [
    //             'title' => 'DS admin tổng',
    //             'routeName' => 'admin.supperAdmin_settings.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewSupperAdmin_settings'],
    //         ]
    //     ]
    // ],
    [
        'title' => 'Quản lý thông báo',
        'routeName' => null,
        'icon' => '<i class="ti ti-bell"></i>',
        'roles' => [],
        'permissions' => ['createNotification', 'viewNotification', 'updateNotification', 'deleteNotification'],
        'sub' => [
            [
                'title' => 'Thêm thông báo',
                'routeName' => 'admin.notification.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createNotification'],
            ],
            [
                'title' => 'DS thông báo',
                'routeName' => 'admin.notification.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewNotification'],
            ]
        ]
    ],
    // [
    //     'title' => 'Admin Liên hệ',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-address-book"></i>',
    //     'roles' => [],
    //     'permissions' => ['createContact_admin', 'viewContact_admin', 'updateContact_admin', 'deleteContact_admin'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm Contact_admin',
    //             'routeName' => 'admin.contact_admin.create',
    //             'icon' => '<i class="ti ti-address-book"></i>',
    //             'roles' => [],
    //             'permissions' => ['createContact_admin'],
    //         ],
    //         [
    //             'title' => 'DS Contact_admin',
    //             'routeName' => 'admin.contact_admin.index',
    //             'icon' => '<i class="ti ti-address-book"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewContact_admin'],
    //         ]
    //     ]
    // ],
    [
        'title' => 'Bài đăng',
        'routeName' => null,
        'icon' => '<i class="ti ti-article"></i>',
        'roles' => [],
        'permissions' => ['createArticles', 'viewArticles', 'updateArticles', 'deleteArticles'],
        'sub' => [
            [
                'title' => 'Thêm bài đăng',
                'routeName' => 'admin.articles.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createArticles'],
            ],
            [
                'title' => 'DS bài đăng',
                'routeName' => 'admin.articles.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewArticles'],
            ]
        ]
    ],
    [
        'title' => 'Thông tin kèm bài đăng',
        'routeName' => null,
        'icon' => '<i class="ti ti-article"></i>',
        'roles' => [],
        'permissions' => ['createArticles', 'viewArticles', 'updateArticles', 'deleteArticles'],
        'sub' => [
            [
                'title' => 'Thêm loại hình',
                'routeName' => 'admin.houses-type.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createArticles'],
            ],
            [
                'title' => 'DS loại hình',
                'routeName' => 'admin.houses-type.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewArticles'],
            ],
            [
                'title' => 'Thêm khu vực',
                'routeName' => 'admin.areas.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['viewArticles'],
            ],
            [
                'title' => 'DS khu vực',
                'routeName' => 'admin.areas.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewArticles'],
            ]
        ]
    ],
    [
        'title' => 'Hoa hồng',
        'routeName' => null,
        'icon' => '<i class="ti ti-brand-cashapp"></i>',
        'roles' => [],
        'permissions' => ['createCommission', 'viewCommission', 'updateCommission', 'deleteCommission'],
        'sub' => [
            [
                'title' => 'Thêm Hoa hồng',
                'routeName' => 'admin.commission.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createCommission'],
            ],
            [
                'title' => 'DS Hoa hồng',
                'routeName' => 'admin.commission.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewCommission'],
            ]
        ]
    ],
    [
        'title' => 'DS TV nhận hoa hồng',
        'routeName' => 'admin.commission_detail.index',
        'icon' => '<i class="ti ti-article"></i>',
        'roles' => [],
        'permissions' => ['createCommission_detail', 'viewCommission_detail', 'updateCommission_detail', 'deleteCommission_detail'],
        'sub' => []
    ],

    // [
    //     'title' => 'Bài viết',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-article"></i>',
    //     'roles' => [],
    //     'permissions' => ['createPost', 'viewPost', 'updatePost', 'deletePost'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm bài viết',
    //             'routeName' => 'admin.post.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createPost'],
    //         ],
    //         [
    //             'title' => 'DS bài viết',
    //             'routeName' => 'admin.post.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewPost'],
    //         ]
    //     ]
    // ],
    // [
    //     'title' => 'Chuyên mục',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-category-2"></i>',
    //     'roles' => [],
    //     'permissions' => ['createPostCategory', 'viewPostCategory', 'updatePostCategory', 'deletePostCategory'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm chuyên mục',
    //             'routeName' => 'admin.post_category.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createPostCategory'],
    //         ],
    //         [
    //             'title' => 'DS chuyên mục',
    //             'routeName' => 'admin.post_category.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewPostCategory'],
    //         ]
    //     ]
    // ],
    // [
    //     'title' => 'Đơn hàng',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-box"></i>',
    //     'roles' => [],
    //     'permissions' => ['createOrder', 'viewOrder', 'updateOrder', 'deleteOrder'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm đơn hàng',
    //             'routeName' => 'admin.order.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createOrder'],
    //         ],
    //         [
    //             'title' => 'DS đơn hàng',
    //             'routeName' => 'admin.order.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewOrder'],
    //         ]
    //     ]
    // ],
    // [
    //     'title' => 'Sản phẩm',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-brand-producthunt"></i>',
    //     'roles' => [],
    //     'permissions' => ['createProduct', 'viewProduct', 'updateProduct', 'deleteProduct'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm sản phẩm',
    //             'routeName' => 'admin.product.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createProduct'],
    //         ],
    //         [
    //             'title' => 'DS sản phẩm',
    //             'routeName' => 'admin.product.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewProduct'],
    //         ],
    //         [
    //             'title' => 'Các thuộc tính',
    //             'routeName' => 'admin.attribute.index',
    //             'icon' => '<i class="ti ti-clipboard-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewProductAttribute'],
    //         ],
    //     ]
    // ],
    // [
    //     'title' => 'Danh mục',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-category"></i>',
    //     'roles' => [],
    //     'permissions' => ['createProductCategory', 'viewProductCategory', 'updateProductCategory', 'deleteProductCategory'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm danh mục',
    //             'routeName' => 'admin.category.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createProductCategory'],
    //         ],
    //         [
    //             'title' => 'DS danh mục',
    //             'routeName' => 'admin.category.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewProductCategory'],
    //         ],
    //     ]
    // ],
    [
        'title' => 'Thành viên',
        'routeName' => null,
        'icon' => '<i class="ti ti-users"></i>',
        'roles' => [],
        'permissions' => ['createUser', 'viewUser', 'updateUser', 'deleteUser'],
        'sub' => [
            [
                'title' => 'Thêm thành viên',
                'routeName' => 'admin.user.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createUser'],
            ],
            [
                'title' => 'DS thành viên',
                'routeName' => 'admin.user.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewUser'],
            ],
        ]
    ],
    // [
    //     'title' => 'Sliders',
    //     'routeName' => null,
    //     'icon' => '<i class="ti ti-slideshow"></i>',
    //     'roles' => [],
    //     'permissions' => ['createSlider', 'viewSlider', 'updateSlider', 'deleteSlider'],
    //     'sub' => [
    //         [
    //             'title' => 'Thêm Sliders',
    //             'routeName' => 'admin.slider.create',
    //             'icon' => '<i class="ti ti-plus"></i>',
    //             'roles' => [],
    //             'permissions' => ['createSlider'],
    //         ],
    //         [
    //             'title' => 'DS Sliders',
    //             'routeName' => 'admin.slider.index',
    //             'icon' => '<i class="ti ti-list"></i>',
    //             'roles' => [],
    //             'permissions' => ['viewSlider'],
    //         ],
    //     ]
    // ],
    [
        'title' => 'Vai trò',
        'routeName' => null,
        'icon' => '<i class="ti ti-user-check"></i>',
        'roles' => [],
        'permissions' => ['createRole', 'viewRole', 'updateRole', 'deleteRole'],
        'sub' => [
            [
                'title' => 'Thêm Vai trò',
                'routeName' => 'admin.role.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createRole'],
            ],
            [
                'title' => 'DS Vai trò',
                'routeName' => 'admin.role.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewRole'],
            ]
        ]
    ],
    [
        'title' => 'Admin',
        'routeName' => null,
        'icon' => '<i class="ti ti-user-shield"></i>',
        'roles' => [],
        'permissions' => ['createAdmin', 'viewAdmin', 'updateAdmin', 'deleteAdmin'],
        'sub' => [
            [
                'title' => 'Thêm admin',
                'routeName' => 'admin.admin.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['createAdmin'],
            ],
            [
                'title' => 'DS admin',
                'routeName' => 'admin.admin.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['viewAdmin'],
            ],
        ]
    ],
    [
        'title' => 'Cài đặt',
        'routeName' => null,
        'icon' => '<i class="ti ti-settings"></i>',
        'roles' => [],
        'permissions' => ['settingGeneral'],
        'sub' => [
            [
                'title' => 'Chung',
                'routeName' => 'admin.setting.general',
                'icon' => '<i class="ti ti-tool"></i>',
                'roles' => [],
                'permissions' => ['settingGeneral'],
            ],
            [
                'title' => 'Thông tin tài khoản',
                'routeName' => 'admin.setting.account',
                'icon' => '<i class="ti ti-users"></i>',
                'roles' => [],
                'permissions' => ['settingGeneral'],
            ],
            [
                'title' => 'Thông tin hoa hồng',
                'routeName' => 'admin.setting.commission',
                'icon' => '<i class="ti ti-brand-cashapp"></i>',
                'roles' => [],
                'permissions' => ['settingGeneral'],
            ],

//            [
//                'title' => 'Thành viên mua hàng',
//                'routeName' => 'admin.setting.user_shopping',
//                'icon' => '<i class="ti ti-user-cog"></i>',
//                'roles' => [],
//                'permissions' => [],
//            ],
        ]
    ],
    [
        'title' => 'Dev: Quyền',
        'routeName' => null,
        'icon' => '<i class="ti ti-code"></i>',
        'roles' => [],
        'permissions' => ['mevivuDev'],
        'sub' => [
            [
                'title' => 'Thêm Quyền',
                'routeName' => 'admin.permission.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['mevivuDev'],
            ],
            [
                'title' => 'DS Quyền',
                'routeName' => 'admin.permission.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['mevivuDev'],
            ]
        ]
    ],
    [
        'title' => 'Dev: Module',
        'routeName' => null,
        'icon' => '<i class="ti ti-code"></i>',
        'roles' => [],
        'permissions' => ['mevivuDev'],
        'sub' => [
            [
                'title' => 'Thêm Module',
                'routeName' => 'admin.module.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
                'permissions' => ['mevivuDev'],
            ],
            [
                'title' => 'DS Module',
                'routeName' => 'admin.module.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
                'permissions' => ['mevivuDev'],
            ]
        ]
    ],
    [
        'title' => 'Dev: Nghiệm thu',
        'routeName' => 'admin.module.summary',
        'icon' => '<i class="ti ti-code"></i>',
        'roles' => [],
        'permissions' => ['mevivuDev'],
        'sub' => []
    ]
];
