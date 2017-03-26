<?php

return [

    '^about$' => ['controller' => 'Pages', 'action' => 'about'],
    '^login$' => ['controller' => 'Users', 'action' => 'login'],
    '^profile$' => ['controller' => 'Users', 'action' => 'myProfile'],

    '^user/([0-9]+)$' => ['controller' => 'Users', 'action' => 'profileById'],
    '^user/([a-z0-9-]+)$' => ['controller' => 'Users', 'action' => 'profileByLogin'],

    '^news/add$' => ['controller' => 'News', 'action' => 'addNews'],
    '^news/([0-9]+)$' => ['controller' => 'News', 'action' => 'viewById'],

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

