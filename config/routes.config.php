<?php

return [
    '^login$' => ['controller' => 'Users', 'action' => 'login'],
    '^profile$' => ['controller' => 'Users', 'action' => 'userProfile'],
    '^about$' => ['controller' => 'Page', 'action' => 'view'],

    //'^(?P<alias>[a-z-]+)$' => ['controller' => 'Page', 'action' => 'static'],

    '^user/([0-9]+)$' => ['controller' => 'Users', 'action' => 'profileById'],
    '^user/([a-z0-9-]+)$' => ['controller' => 'Users', 'action' => 'profileByLogin'],
    '^page/(?<action>[a-z-]+)/(?<alias>[a-z-]+)$' => ['controller' => 'Page'],
    '^page/(?<alias>[a-z0-9-]+)$' => ['controller' => 'Page', 'action' => 'view'],


    '^news/add$' => ['controller' => 'News', 'action' => 'add'],
    '^news/([0-9]+)$' => ['controller' => 'News', 'action' => 'fullstory'],
//    '^news/([a-z0-9-]+)$' => ['controller' => 'News', 'action' => 'viewCategoryNews'],

//    '^(?<alias>[a-z-]+)$' => ['controller' => 'Page', 'action' => 'view'],
    '(^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?)$' => [],
    '^$' => ['controller' => 'Index', 'action' => 'default'],
];


//    [
//        '^about$'                   => 'Pages/About',
//        '^contacts$'                => 'Pages/Contact',
//        '^login$'                   => 'Users/Login',
//        '^profile$'                 => 'Users/MyProfile',
//
//        '^user/([0-9]+)$'           => 'Users/ProfileById/$1',
//        '^user/([a-z0-9-]+)$'       => 'Users/ProfileByLogin/$1',
//
//        '^news/add$'                => 'News/Add',
//        '^news/([0-9]+)$'           => 'News/ViewById/$1',
//        '^news/([a-z0-9-]+)$'       => 'News/ViewCategory/$1',
//
//
//        '^$'                        => 'Index/Default',
//	];

