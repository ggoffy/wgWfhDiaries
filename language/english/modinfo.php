<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgDiaries module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        wgdiaries
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         wedega - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */

include_once 'common.php';

// ---------------- Admin Main ----------------
\define('_MI_WGDIARIES_NAME', 'wgDiaries');
\define('_MI_WGDIARIES_DESC', 'Simple module for a diary for work from home');
// ---------------- Admin Menu ----------------
\define('_MI_WGDIARIES_ADMENU1', 'Dashboard');
\define('_MI_WGDIARIES_ADMENU2', 'Items');
\define('_MI_WGDIARIES_ADMENU3', 'Files');
\define('_MI_WGDIARIES_ADMENU4', 'Groups');
\define('_MI_WGDIARIES_ADMENU5', 'Groupusers');
\define('_MI_WGDIARIES_ADMENU6', 'Permissions');
\define('_MI_WGDIARIES_ADMENU7', 'Feedback');
\define('_MI_WGDIARIES_ABOUT', 'About');
// ---------------- Admin Nav ----------------
\define('_MI_WGDIARIES_ADMIN_PAGER', 'Admin pager');
\define('_MI_WGDIARIES_ADMIN_PAGER_DESC', 'Admin per page list');
// User
\define('_MI_WGDIARIES_USER_PAGER', 'User pager');
\define('_MI_WGDIARIES_USER_PAGER_DESC', 'User per page list');
// Submenu
\define('_MI_WGDIARIES_SMNAME1', 'Index page');
\define('_MI_WGDIARIES_SMNAME2', 'Items');
\define('_MI_WGDIARIES_SMNAME3', 'Submit Items');
\define('_MI_WGDIARIES_SMNAME5', 'Submit Files');
\define('_MI_WGDIARIES_SMNAME6', 'Groups');
\define('_MI_WGDIARIES_SMNAME7', 'Submit Groups');
\define('_MI_WGDIARIES_SMNAME8', 'Groupusers');
\define('_MI_WGDIARIES_SMNAME9', 'Submit Groupusers');
// Config
\define('_MI_WGDIARIES_EDITOR_ADMIN', 'Editor admin');
\define('_MI_WGDIARIES_EDITOR_ADMIN_DESC', 'Select the editor which should be used in admin area for text area fields');
\define('_MI_WGDIARIES_EDITOR_USER', 'Editor user');
\define('_MI_WGDIARIES_EDITOR_USER_DESC', 'Select the editor which should be used in user area for text area fields');
\define('_MI_WGDIARIES_EDITOR_MAXCHAR', 'Text max characters');
\define('_MI_WGDIARIES_EDITOR_MAXCHAR_DESC', 'Max characters for showing text of a textarea or editor field in admin area');
\define('_MI_WGDIARIES_KEYWORDS', 'Keywords');
\define('_MI_WGDIARIES_KEYWORDS_DESC', 'Insert here the keywords (separate by comma)');
\define('_MI_WGDIARIES_SIZE_MB', 'MB');
\define('_MI_WGDIARIES_MAXSIZE_IMAGE', 'Max size image');
\define('_MI_WGDIARIES_MAXSIZE_IMAGE_DESC', 'Define the max size for uploading images');
\define('_MI_WGDIARIES_MIMETYPES_IMAGE', 'Mime types image');
\define('_MI_WGDIARIES_MIMETYPES_IMAGE_DESC', 'Define the allowed mime types for uploading images');
\define('_MI_WGDIARIES_MAXWIDTH_IMAGE', 'Max width image');
\define('_MI_WGDIARIES_MAXWIDTH_IMAGE_DESC', 'Set the max width to which uploaded images should be scaled (in pixel)<br>0 means, that images keeps the original size. <br>If an image is smaller than maximum value then the image will be not enlarge, it will be save in original width.');
\define('_MI_WGDIARIES_MAXHEIGHT_IMAGE', 'Max height image');
\define('_MI_WGDIARIES_MAXHEIGHT_IMAGE_DESC', 'Set the max height to which uploaded images should be scaled (in pixel)<br>0 means, that images keeps the original size. <br>If an image is smaller than maximum value then the image will be not enlarge, it will be save in original height');
\define('_MI_WGDIARIES_MAXSIZE_FILE', 'Max size file');
\define('_MI_WGDIARIES_MAXSIZE_FILE_DESC', 'Define the max size for uploading files');
\define('_MI_WGDIARIES_MIMETYPES_FILE', 'Mime types file');
\define('_MI_WGDIARIES_MIMETYPES_FILE_DESC', 'Define the allowed mime types for uploading files');
\define('_MI_WGDIARIES_USE_GROUPS', 'Use groups');
\define('_MI_WGDIARIES_USE_GROUPS_DESC', 'Use group system in order to group user items to specific groups/projects');
\define('_MI_WGDIARIES_NUMB_COL', 'Number Columns');
\define('_MI_WGDIARIES_NUMB_COL_DESC', 'Number Columns to View');
\define('_MI_WGDIARIES_DIVIDEBY', 'Divide By');
\define('_MI_WGDIARIES_DIVIDEBY_DESC', 'Divide by columns number');
\define('_MI_WGDIARIES_TABLE_TYPE', 'Table Type');
\define('_MI_WGDIARIES_TABLE_TYPE_DESC', 'Table Type is the bootstrap html table');
\define('_MI_WGDIARIES_PANEL_TYPE', 'Panel Type');
\define('_MI_WGDIARIES_PANEL_TYPE_DESC', 'Panel Type is the bootstrap html div');
\define('_MI_WGDIARIES_IDPAYPAL', 'Paypal ID');
\define('_MI_WGDIARIES_IDPAYPAL_DESC', 'Insert here your PayPal ID for donations');
\define('_MI_WGDIARIES_SHOW_BREADCRUMBS', 'Show breadcrumb navigation');
\define('_MI_WGDIARIES_SHOW_BREADCRUMBS_DESC', 'Show breadcrumb navigation which displays the current page in context within the site structure');
\define('_MI_WGDIARIES_ADVERTISE', 'Advertisement Code');
\define('_MI_WGDIARIES_ADVERTISE_DESC', 'Insert here the advertisement code');
\define('_MI_WGDIARIES_MAINTAINEDBY', 'Maintained By');
\define('_MI_WGDIARIES_MAINTAINEDBY_DESC', 'Allow url of support site or community');
\define('_MI_WGDIARIES_BOOKMARKS', 'Social Bookmarks');
\define('_MI_WGDIARIES_BOOKMARKS_DESC', 'Show Social Bookmarks in the single page');
// ---------------- End ----------------