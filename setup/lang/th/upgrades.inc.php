<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'เพิ่มฟิลด์ class_key เพื่อรองรับตรา สารอนุพันธ์ของ modUser';
$_lang['added_cachepwd'] = 'เพิ่มฟิลด์ cachepwd ที่ไม่มีในรุ่น Revolution ก่อนหน้านี้';
$_lang['added_content_ft_idx'] = 'เพิ่ม `content_ft_idx` ดัชนีข้อความเต็มบนฟิลด์ `pagetitle`, `longtitle`, `description`, `introtext`, `content`';
$_lang['allow_null_properties'] = 'แก้ไขให้ยินยอมใช้ค่า NULL ไปใน `[[+class]]`.`properties`';
$_lang['alter_activeuser_action'] = 'ดัดแปลงฟิลด์ modActiveUser `action` เพื่อให้ใช้ชื่อแอ็กชันแบบยาวๆได้';
$_lang['alter_usermessage_messageread'] = 'เปลี่ยนฟิลด์ modUserMessage `messageread` เป็น `read`';
$_lang['alter_usermessage_postdate'] = 'เปลี่ยนฟิลด์ modUserMessage `postdate` จาก INT เป็น DATETIME และชื่อว่า `date_sent`';
$_lang['alter_usermessage_subject'] = 'เปลี่ยนฟิลด์ modUserMessage `subject` จาก VARCHAR(60) เป็น VARCHAR(255)';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'ลบ ACLs ของตัวเชื่อมต่อบริบทออก';
$_lang['connector_acls_not_removed'] = 'ไม่สามารถลบ  ACLs ของตัวเชื่อมต่อบริบท';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'ไม่สามารถลบตัวเชื่อมต่อบริบท';
$_lang['data_remove_error'] = 'เกิดข้อผิดพลาดในการลบข้อมูลของคลาส `[[+class]]`';
$_lang['data_remove_success'] = 'ลบข้อมูลออกจากตารางของคลาส `[[+class]]` สำเร็จ';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'เปลี่ยนฟิลด์ modLexiconEntry `createdon` ให้รับค่า null ได้';
$_lang['lexiconentry_focus_alter'] = 'เปลี่ยนฟิลด์ modLexiconEntry `focus` จาก VARCHAR(100) เป็น INT(10)';
$_lang['lexiconentry_focus_alter_int'] = 'อัปเดตคอลัมน์ข้อมูล modLexiconEntry `focus` จากส string เป็น int จากคีย์ของ modLexiconTopic';
$_lang['lexiconfocus_add_id'] = 'เพิ่ม modLexiconFocus คอลัมน์ `id`';
$_lang['lexiconfocus_add_pk'] = 'เพิ่ม modLexiconFocus PRIMARY KEY ใส่คอลัมน์ `id`';
$_lang['lexiconfocus_alter_pk'] = 'เปลี่ยน modLexiconFocus `name` จาก PRIMARY KEY เป็น UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'ลด modLexiconFocus PRIMARY KEY';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'เปลี่ยนชื่อตาราง `[[+old]]` เป็น `[[+new]]`';
$_lang['remove_fulltext_index'] = 'ลบดัชนีข้อความเต็ม `[[+index]]`';
$_lang['systemsetting_xtype_fix'] = 'แก้ไข xtypes ใน modSystemSettings สำเร็จ';
$_lang['transportpackage_manifest_text'] = 'ดัดแปลงคอลัมน์ `manifest` เป็น TEXT จากเดิม MEDIUMTEXT ใน `[[+class]]`';
$_lang['update_closure_table'] = 'อัปเดตข้อมูลการปิดท้ายตารางสำหรับคลาส `[[+class]]`';
$_lang['update_table_column_data'] = 'อัปเดตข้อมูลในคอลัมน์ [[+column]] ของตาราง [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'Successfully converted user profile country names to ISO codes.';
$_lang['legacy_cleanup_complete'] = 'Legacy file clean up complete.';
$_lang['legacy_cleanup_count'] = 'Removed [[+files]] file(s) and [[+folders]] folder(s).';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'System Setting `[[+key]]` removed.';
$_lang['system_setting_cleanup_failed'] = 'System Setting `[[+key]]` could not be removed.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'System Setting `[[+key]]` updated.';
$_lang['system_setting_update_failed'] = 'System Setting `[[+key]]` could not be updated.';
$_lang['system_setting_rename_key_success'] = 'Successfully renamed the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Failed to rename the System Setting key from `[[+old_key]]` to `[[+new_key]]`.';
