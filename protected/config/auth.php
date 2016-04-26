<?php
/**
 * Created by PhpStorm.
 * User: Smart
 * Date: 25.04.2016
 * Time: 10:35
 */
return array(
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'data' => null
    ),
    'user' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'User',
        'children' => array(
            'guest', // ������������ �� �����
        ),
        'bizRule' => null,
        'data' => null
    ),
    '0' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'admin',
        'children' => array(
            'user',         // �������� ������ ��, ��� ��������� ����������
        ),
        'bizRule' => null,
        'data' => null
    ),
);