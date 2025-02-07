<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Добавлен новый столбец `[[+column]]` в таблицу `[[+table]]`.';
$_lang['add_index'] = 'Добавлен новый индекс `[[+index]]` для таблицы `[[+table]]`.';
$_lang['alter_column'] = 'Изменен столбец `[[+column]]` в таблице `[[+table]]`.';
$_lang['add_moduser_classkey'] = 'Добавлено поле `class_key` для поддержки производных от `modUser`';
$_lang['added_cachepwd'] = 'Добавлено поле `cachepwd`, потерянное в предыдущих релизах MODX.';
$_lang['added_content_ft_idx'] = 'Добавлен новый полнотекстовый индекс `content_ft_idx` в следующие поля: `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Исправлено возможное значение NULL у `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Увеличена возможная длина значения поля `action` в `modActiveUser`.';
$_lang['alter_usermessage_messageread'] = 'В таблице `modUserMessage` поле `messageread` заменено на `read`.';
$_lang['alter_usermessage_postdate'] = 'В таблице `modUserMessage` у поля `postdate` изменен тип с INT на DATETIME и переименовано в `date_sent`.';
$_lang['alter_usermessage_subject'] = 'В таблице `modUserMessage` у поля `subject` изменен тип с VARCHAR(60) на VARCHAR(255).';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Изменено поле `[[+old]]` на `[[+new]]` в таблице `[[+table]]`.';
$_lang['change_default_value'] = 'Изменено значение по умолчанию в поле `[[+column]]` на «[[+value]]» в таблице `[[+table]]`.';
$_lang['connector_acls_removed'] = 'Убраны списки доступа (ACL) у контекстного коннектора.';
$_lang['connector_acls_not_removed'] = 'Убрать списки доступа (ACL) у контекстного коннектора не удалось.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Убрать контекстный коннектор не удалось.';
$_lang['data_remove_error'] = 'Ошибка удаления данных для класса `[[+class]]`.';
$_lang['data_remove_success'] = 'Данные для класса `[[+class]]` из таблицы успешно удалены.';
$_lang['drop_column'] = 'Удалён столбец `[[+column]]` в таблице `[[+table]]`.';
$_lang['drop_index'] = 'Удалён индекс `[[+index]]` в таблице `[[+table]]`.';
$_lang['lexiconentry_createdon_null'] = 'Добавлена возможность принимать значение NULL для поля `createdon` в `modLexiconEntry`.';
$_lang['lexiconentry_focus_alter'] = 'Изменен тип поля `focus` в `modLexiconEntry` с VARCHAR(100) на INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Обновлены данные в поле `focus` в `modLexiconEntry` со строковых на новое целое значение ключа из `modLexiconTopic`.';
$_lang['lexiconfocus_add_id'] = 'Добавлено поле `id` в `modLexiconFocus`.';
$_lang['lexiconfocus_add_pk'] = 'Добавлен PRIMARY KEY к полю `id` в `modLexiconFocus`.';
$_lang['lexiconfocus_alter_pk'] = 'Ключ поля `name` в таблице `modLexiconFocus` изменен с PRIMARY KEY на UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Удален PRIMARY KEY у таблицы `modLexiconFocus`.';
$_lang['modify_column'] = 'Изменен столбец `[[+column]]` с `[[+old]]` на `[[+new]]` в таблице `[[+table]]`';
$_lang['rename_column'] = 'Переименован столбец `[[+old]]` на `[[+new]]` в таблице `[[+table]]`.';
$_lang['rename_table'] = 'Таблица `[[+old]]` переименована в `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Удален полнотекстовый индекс `[[+index]]`.';
$_lang['systemsetting_xtype_fix'] = 'Успешно исправлены xtype в `modSystemSettings`.';
$_lang['transportpackage_manifest_text'] = 'Изменен столбец `manifest` на TEXT с MEDIUMTEXT в `[[+class]]`.';
$_lang['update_closure_table'] = 'Обновление закрытой таблицы данных для класса `[[+class]]`.';
$_lang['update_table_column_data'] = 'Обновлены данные в столбце `[[+column]]` в таблице `[[+table]]` (`[[+class]]`)';
$_lang['iso_country_code_converted'] = 'Названия стран в профиле пользователя успешно преобразованы в коды ISO.';
$_lang['legacy_cleanup_complete'] = 'Очистка устаревших файлов завершена.';
$_lang['legacy_cleanup_count'] = 'Удалены [[+files]] файл(ы) и [[+folders]] каталог(и).';
$_lang['clipboard_flash_file_unlink_success'] = 'Успешно удалена копия флэш-файлов в буфере обмена.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Ошибка удаления копии флэш-файлов в буфере обмена.';
$_lang['clipboard_flash_file_missing'] = 'Копия флэш-файлов в буфере обмена уже удалена.';
$_lang['system_setting_cleanup_success'] = 'Системная настройка `[[+key]]` удалена.';
$_lang['system_setting_cleanup_failed'] = 'Системная настройка `[[+key]]` не может быть удалена.';
$_lang['system_setting_update_xtype_success'] = 'Значение xtype для системной настройки `[[+key]]` изменено с `[[+old_type]]` на `[[+new_type]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Не удалось изменить значение xtype для системной настройки `[[+key]]` с `[[+old_type]]` на `[[+new_type]]`.';
$_lang['system_setting_update_success'] = 'Системная настройка `[[+key]]` обновлена.';
$_lang['system_setting_update_failed'] = 'Системная настройка `[[+key]]` не может быть обновлена.';
$_lang['system_setting_rename_key_success'] = 'Ключ системной настройки успешно изменен с `[[+old_key]]` на `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Ключ системной настройки не удалось изменить с `[[+old_key]]` на `[[+new_key]]`.';
