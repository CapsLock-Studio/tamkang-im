<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    // ...
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        // And Second Factory uses 'admin'
        'admin' => array(
            // And finally, here is where we define our page hierarchy
            array(
                'id' => 'profile-manage',
                'label' => '個人資料',
                'route' => 'admin/default',
                'controller' => 'profile',
                'resource' => 'Admin\Controller\Profile',
            ),
            array(
                'id' => 'user-manage',
                'label' => '使用者管理',
                'route' => 'admin/default',
                'controller' => 'user',
                'resource' => 'Admin\Controller\User'
            ),
            array(
                'id' => 'teacher-manage',
                'label' => '教師管理',
                'route' => 'admin/default',
                'controller' => 'teacher',
                'resource' => 'Admin\Controller\Teacher',
                'pages' => array(
                    'sort' => array(
                        'label' => '設定順序',
                        'route' => 'admin/default',
                        'controller' => 'teacher'
                    ),
                    'book-type' => array(
                        'label' => '設定教師專刊種類',
                        'route' => 'admin/default',
                        'controller' => 'teacher',
                        'action' => 'booktype'
                    )
                )
            ),
            array(
                'id' => 'article-manage',
                'label' => '文章',
                'route' => 'admin/default',
                'controller' => 'article',
                'resource' => 'Admin\Controller\Article',
                'pages' => array(
                    'article' => array(
                        'label' => '文章管理',
                        'route' => 'admin/default',
                        'controller' => 'article'
                    ),
                    'type' => array(
                        'label' => '設定文章類別',
                        'route' => 'admin/default',
                        'controller' => 'article',
                        'action' => 'articletype'
                    )
                )
            ),
            array(
                'id' => 'slide-manage',
                'label' => 'slide管理',
                'route' => 'admin/default',
                'controller' => 'index-slide',
                'resource' => 'Admin\Controller\IndexSlide'
            ),
            array(
                'id' => 'collect-manage',
                'label' => '大學部管理',
                'route' => 'admin/default',
                'controller' => 'collect',
                'resource' => 'Admin\Controller\Collect',
                'pages' => array(
                    'introduce' => array(
                        'label' => '介紹管理',
                        'route' => 'admin/default',
                        'controller' => 'collect',
                    ),
                    'type' => array(
                        'label' => '設定介紹種類',
                        'route' => 'admin/default',
                        'controller' => 'collect',
                        'action' => 'type'
                    ),
                )
            ),
            array(
                'id' => 'institute-manage',
                'label' => '碩士班管理',
                'route' => 'admin/default',
                'controller' => 'institute',
                'resource' => 'Admin\Controller\Institute',
                'pages' => array(
                    'introduce' => array(
                        'label' => '介紹管理',
                        'route' => 'admin/default',
                        'controller' => 'institute'
                    ),
                    'type' => array(
                        'label' => '設定介紹種類',
                        'route' => 'admin/default',
                        'controller' => 'institute',
                        'action' => 'type'
                    ),
                )
            ),
            array(
                'id' => 'advance-manage',
                'label' => '碩士在職專班管理',
                'route' => 'admin/default',
                'controller' => 'advance',
                'resource' => 'Admin\Controller\Advance',
                'pages' => array(
                    'introduce' => array(
                        'label' => '介紹管理',
                        'route' => 'admin/default',
                        'controller' => 'advance'
                    ),
                    'type' => array(
                        'label' => '設定介紹種類',
                        'route' => 'admin/default',
                        'controller' => 'advance',
                        'action' => 'type'
                     ),
                )
            ),
            array(
                'id' => 'admission-manage',
                'label' => '招生資訊管理',
                'route' => 'admin/default',
                'controller' => 'admission',
                'action' => 'index',
                'resource' => 'Admin\Controller\Admission',
                'pages' => array(
                    'introduce' => array(
                            'label' => '介紹管理',
                            'route' => 'admin/default',
                            'controller' => 'admission'
                    ),
                    'type' => array(
                            'label' => '設定介紹種類',
                            'route' => 'admin/default',
                            'controller' => 'admission',
                            'action' => 'type'
                    ),
                )
            ),
            array(
                'id' => 'teacher-profile',
                'label' => '教師個人資料',
                'route' => 'admin/default',
                'controller' => 'teacher-profile',
                'action' => 'index',
                'resource' => 'Admin\Controller\TeacherProfile',
            ),
            array(
                'id' => 'teacher-book',
                'label' => '教師論文資料',
                'route' => 'admin/default',
                'controller' => 'teacher-profile',
                'action' => 'book',
                'resource' => 'Admin\Controller\TeacherProfile',
            ),
        ),
        'default' => array(
            // And finally, here is where we define our page hierarchy
            array(
                'id' => 'news',
                'label' => '消息公告',
                'route' => 'application/default',
                'controller' => 'news',
            ),
            array(
                'id' => 'faculty',
                'label' => '教師陣容',
                'route' => 'application/default',
                'controller' => 'faculty',
                'action' => 'index'
            ),
            array(
                'id' => 'collect',
                'label' => '大學部',
                'route' => 'application/default',
                'controller' => 'collect',
                'action' => 'index'
            ),
            array(
                'id' => 'institute',
                'label' => '碩士班',
                'route' => 'application/default',
                'controller' => 'institute',
                'action' => 'index'
            ),
            array(
                'id' => 'advance',
                'label' => '碩士在職專班',
                'route' => 'application/default',
                'controller' => 'advance',
                'action' => 'index'
            ),
            // array(
            //     'id' => 'download',
            //     'label' => '文件查找',
            //     'route' => 'application/default',
            //     'controller' => 'file',
            //     'action' => 'search'
            // ),
            array(
                'id' => 'admission',
                'label' => '招生簡介',
                'route' => 'application/default',
                'controller' => 'admission',
                'action' => 'index'
            ),
        ),
    ),

);
