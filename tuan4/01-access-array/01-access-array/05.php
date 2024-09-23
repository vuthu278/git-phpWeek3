<?php
$arrMenu = [
    'index' => [
        "name"  => "Home",   "link"  => "index.php"
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
                    'training'  => ["name" => "Training", "link" => "training.php"]
                ]
            ],
            'company'   => [
                "name" => "Company",
                "link" => "company.php",
                "child" => [
                    'toyota' => ["name" => "Toyota", "link"   => "toyota.php"]
                ]
            ]
        ]
    ],
    'contact' => [
        "name" => "Contact",
        "link" => "contact.php",
        "child" => [
            'hotline'      => ["name" => "Hotline", "link" => "hotline.php"]
        ]
    ]
];
$result ='';
foreach($arrMenu as  $menuLevel1) {
    if(isset($menuLevel1['child'])) {
        foreach ($menuLevel1['child'] as $menuLevel2){
            $result .= $menuLevel2['name'] .' - ';
        }
    }
}
$result = substr($result, 0, -3);
echo '<h3 style="color:red;font-weight:bold">' . $result . '</h3>';
    // Yêu cầu: In ra tên của các menu cấp 2, 
    // Output: Service - Company - Hotline