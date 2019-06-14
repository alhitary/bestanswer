<?php
/**
 *
 * Best Answer extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kinerity, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://www.alhitary.net>
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERS'	=> 'الإجابات',

	'ENABLE_ANSWER'			=> 'تفعيل “أفضل إجابة”',
	'ENABLE_ANSWER_EXPLAIN'	=> 'عند اختيارك “نعم”, كاتب الموضوع (إذا لديه الترخيص) والمشرفين (بالمنتديات المسموح بها) يستطيعون إضافة علامة “أفضل إجابة” إلى أحد ردود الموضوع',

	'TO_POST'	=> 'الذهاب إلى المشاركة',

	'LOG_MARK_ANSWER'	=> '<strong>تحديد المشاركة كـ “أفضل إجابة”</strong><br />» %1$s بواسطة %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>إلغاء تحديد المشاركة كـ “أفضل إجابة”</strong><br />» %1$s بواسطة %2$s',

	'MARK_ANSWER'			=> 'تحديد الإجابة الأفضل',
	'MARK_ANSWER_CONFIRM'	=> 'متأكد أنك تريد تحديد هذه المشاركة كأفضل إجابة؟',

	'TOTAL_ANSWERS'	=> 'إجمالي الإجابات',

	'UNMARK_ANSWER'			=> 'إلغاء تحديد الإجابة الأفضل',
	'UNMARK_ANSWER_CONFIRM'	=> 'متأكد أنك تريد إلغاء تحديد هذه المشاركة كأفضل إجابة؟',

	'MARK_ANSWER_NOTIFICATION'			=> '%1$s حدد مشاركتك في الموضوع “%2$s” كأفضل إجابة.',
	'UNMARK_ANSWER_NOTIFICATION'		=> '%1$s ألغى تحديد مشاركتك في الموضوع “%2$s” كأفضل إجابة.',
	'NOTIFICATION_TYPE_MARK_ANSWER'		=> 'أحد الأعضاء يحدد مشاركتك بالموضوع كأفضل إجابة',
	'NOTIFICATION_TYPE_UNMARK_ANSWER'	=> 'أحد الأعضاء يلغي تحديد مشاركتك بالموضوع كأفضل إجابة',

	'BUTTON_MARK'	=> 'تحديد الإجابة الأفضل',
	'BUTTON_UNMARK'	=> 'إلغاء تحديد الإجابة الأفضل',
));
