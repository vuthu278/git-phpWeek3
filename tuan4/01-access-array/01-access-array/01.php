<?php
$arrMenu = [
    'index' => [
        "name"  => "Home", "link"  => "index.php"
    ],
    'about' => [
        "name"  => "About",
        "link"  => "data/about.php",
        "child" => [
            'service'   => [
                "name"  => "Service",
                "link"  => "service.php",
                "child" => [
                    'sale'      => ["name" => "Sale", "link" => "sale.php"],
                    'training'  => ["name" => "Training", "link" => "zdsdtraining.php"]
                ]
            ],
            'company'   => [
                "name"  => "Company",
                "link"  => "company.php",
                "child" => [
                    'toyota' => ["name" => "Toyota", "link"   => "toyota.php"]
                ]
            ]
        ]
    ],
    'contact' => ["name" => "Contact", "link" => "contact.php"]
];

    echo '<pre style="color:red">';
    print_r($arrMenu['about']['child']['service']['child']['training']['link']);
    echo '</pre>';
    // Đây là Array thể hiện menu cấp 3, có dạng
    // Home
    // About
    // ---Service
    // ------Sale
    // ------Training
    // ---Company
    // ------Toyata
    // Contact


    // Yêu cầu Hãy in ra link của menu Training