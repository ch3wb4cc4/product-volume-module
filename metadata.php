<?php
/**
 * This file is part of MS Product Volume module.
 * MS Product Volume module is free software:
 * you can redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 *
 * MS Product Volume module is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
 * for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MS Product Volume module.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @category      module
 * @package       msproductvolume
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/en/
 * @copyright (C) MS, 2022-2032
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'msproductvolume',
    'title'       => [
        'de' => 'MS Product Volume',
        'en' => 'MS Product Volume',
    ],
    'description' => [
        'de' => 'MS Product Volume Module',
        'en' => 'MS Product Volume Module',
    ],
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.0.0a',
    'author'      => 'MS',
    'url'         => '',
    'email'       => '',
    'extend'      => [
    ],
	'blocks'      => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_shortdesc',
            'file'     => '/views/blocks/details_productmain_shortdesc.tpl',
        ]
    ]
);
