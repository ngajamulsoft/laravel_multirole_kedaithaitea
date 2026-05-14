<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [

    'superadmin' => [
        'users'        => 'c,r,u,d',
        'roles'        => 'c,r,u,d',
        'permissions'  => 'c,r,u,d',
        'divisions'    => 'c,r,u,d',
        'branches'     => 'c,r,u,d',

        //KEDAI
        'kedai-pos'          => 'c,r,u,d',
        'kedai-stok'         => 'c,r,u,d',
        'kedai-pengeluaran'  => 'c,r,u,d',
        'kedai-laporan'      => 'c,r,u,d',

        //PERMEN KARET
        'permen-karet-pos' => 'c,r,u,d',
        'permen-karet-pengeluaran'  => 'c,r,u,d',
        'permen-karet-stok'         => 'c,r,u,d',
        'permen-karet-laporan'      => 'c,r,u,d',

        'profile' => 'c,r,u,d',
        'absensi' => 'c,r,u,d',
    ],

    'admin_kedai' => [
        'kedai-pos'          => 'c,r',
        'kedai-stok'         => 'c,r',
        'kedai-pengeluaran'  => 'c,r',
        'kedai-laporan'      => 'r',
        'profile'      => 'r,u',
        'absensi' => 'c,r',
    ],

    'admin_pk' => [
        'permen-karet-pos' => 'c,r',
        'permen-karet-pengeluaran'  => 'c,r',
        'permen-karet-stok'         => 'c,r',
        'permen-karet-laporan'      => 'r',
        'profile'      => 'r,u',
        'absensi' => 'c,r',

    ],

],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
