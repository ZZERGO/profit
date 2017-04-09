<?php

return [


    '^login$' => ['controller' => 'User', 'action' => 'login'],
    '^contact$' => ['controller' => 'Page', 'action' => 'view'],
    '^register$' => ['controller' => 'User', 'action' => 'register'],

    '^profile$' => ['controller' => 'User', 'action' => 'userProfile'],
    '^user/(?<id>[0-9]+)$' => ['controller' => 'User', 'action' => 'profileById'],
    '^user/(?<login>[a-z0-9-]+)$' => ['controller' => 'User', 'action' => 'profileByLogin'],

//    '^page/(?P<alias>[a-z+])'
    '^news/add$' => ['controller' => 'News', 'action' => 'add'],
    '^news/([0-9]+)$' => ['controller' => 'News', 'action' => 'fullstory'],
 //   '^news/([a-z0-9-]+)$' => ['controller' => 'News', 'action' => 'viewCategoryNews'],

    '^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' => ['action' => 'default'],
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

