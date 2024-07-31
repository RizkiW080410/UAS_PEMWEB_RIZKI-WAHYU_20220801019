<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'beasiswa' => [
        'title'          => 'Beasiswa',
        'title_singular' => 'Beasiswa',
    ],
    'sosialMedium' => [
        'title'          => 'Sosial Media',
        'title_singular' => 'Sosial Medium',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'url'               => 'URL / LINK',
            'url_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'beasiswa' => [
        'title'          => 'Beasiswa',
        'title_singular' => 'Beasiswa',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name_beasiswa'               => 'Name',
            'name_beasiswa_helper'        => ' ',
            'pembuat'           => 'Full Name',
            'pembuat_helper'    => ' ',
            'start_beasiswa'            => 'Start Beasiswa',
            'start_beasiswa_helper'     => ' ',
            'finish_beasiswa'              => 'Finish Beasiswa',
            'finish_beasiswa_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'pendaftaran' => [
        'title'          => 'Pendaftaran',
        'title_singular' => 'Pendaftaran',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'fullname'           => 'Full Name',
            'fullname_helper'    => ' ',
            'address'            => 'Address',
            'address_helper'     => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'tanggal_lahir'        => 'tanggal lahir',
            'tanggal_lahir_helper' => ' ',
            'tempat_lahir'           => 'tempat lahir',
            'tempat_lahir_helper'    => ' ',
            'NIK'           => 'NIK',
            'NIK_helper'    => ' ',
            'nilai'           => 'nilai rata-rata',
            'nilai_helper'    => ' ',
            'transkrip_nilai'    => 'transkrip nilai',
            'transkrip_nilai_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'gallery' => [
        'title'          => 'Gallery',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'fnB' => [
        'title'          => 'FnB',
        'title_singular' => 'FnB',
    ],

];
