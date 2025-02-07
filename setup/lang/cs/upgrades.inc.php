<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Přidán nový sloupec `[[+column]]` do [[+table]].';
$_lang['add_index'] = 'Přidáno nový index na `[[+index]]` v tabulce [[+table]].';
$_lang['alter_column'] = 'Změněn sloupec `[[+column]]` v tabulce [[+table]].';
$_lang['add_moduser_classkey'] = 'Přidán sloupec class_key pro podporu odvozenin modUser.';
$_lang['added_cachepwd'] = 'Přidán sloupec cachepwd chybějící v předchozích vydání Revolution.';
$_lang['added_content_ft_idx'] = 'Přidán nový full-textový index `content_ft_idx` na sloupce `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Opraveno povolení použízí null pro `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Upraven modActiveUser sloupec `action` pro možnost delších názvů akcí.';
$_lang['alter_usermessage_messageread'] = 'Změněn modUserMessage sloupec `messageread` na `read`.';
$_lang['alter_usermessage_postdate'] = 'Změněn modUserMessage sloupec `postdate` z INT na DATETIME a název `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Změněn modUserMessage sloupec `subject` z VARCHAR(60) na VARCHAR(255).';
$_lang['authority_unique_index_error'] = 'Multiple modUserGroup records with the same authority were found. You will need to update these to have unique authority values and then re-run the upgrade.';
$_lang['change_column'] = 'Pole `[[+old]]` změněno na `[[+new]]` v tabulce [[+table]].';
$_lang['change_default_value'] = 'Změněna výchozí hodnota pro sloupec `[[+column]]` na "[[+value]]" v tabulce `[[+table]]`.';
$_lang['connector_acls_removed'] = 'Odestraněn konektor kontextu přístupů.';
$_lang['connector_acls_not_removed'] = 'Nepodařilo se odstranit konektor kontextu přístupů.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Nepodařilo se odstranit konektor kontextu.';
$_lang['data_remove_error'] = 'Nastala chyba při odstraňování dat ze třídy `[[+class]]`.';
$_lang['data_remove_success'] = 'Úspěšně odstraněna data z tabulky pro třídu `[[+class]]`.';
$_lang['drop_column'] = 'Odstraněn sloupec `[[+column]]` v tabulce `[[+table]]`.';
$_lang['drop_index'] = 'Odstraněn index `[[+index]]` v tabulce `[[+table]]`.';
$_lang['lexiconentry_createdon_null'] = 'Změněn sloupec modLexiconEntry `createdon` pro možnost NULL.';
$_lang['lexiconentry_focus_alter'] = 'Změněn sloupec modLexiconEntry `focus` z VARCHAR(100) na INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Aktualizován sloupec modLexiconEntry `focus` z datového typu STRING na nový INT cizý klíč k modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Přidán sloupec modLexiconFocus `id`.';
$_lang['lexiconfocus_add_pk'] = 'Přidán PRIMARY KEY modLexiconFocus na sloupec `id`.';
$_lang['lexiconfocus_alter_pk'] = 'Změněno pole modLexiconFocus `name` z PRIMARY KEY na UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Odstraněn PRIMARY KEY modLexiconFocus.';
$_lang['modify_column'] = 'V tabulce `[[+table]]` byl změněn sloupec `[[+column]]` z `[[+old]]` na `[[+new]]`';
$_lang['rename_column'] = 'Přejmenován sloupec `[[+old]]` na `[[+new]]` v tabulce `[[+table]]`.';
$_lang['rename_table'] = 'Přejmenována tabulka `[[+old]]` na `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Odstraněn full-textový index `[[+index]]`.';
$_lang['systemsetting_xtype_fix'] = 'Úspěšně opraven xtypes pro modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'Upraven sloupec `manifest` na TEXT z MEDIUMTEXT z tabulky `[[+class]]`.';
$_lang['update_closure_table'] = 'Měním uzavírací tabulková data pro třídu `[[+class]]`.';
$_lang['update_table_column_data'] = 'V tabulce [[+table]] ( [[+class]] ) byla aktualizována data ve sloupci [[+column]]';
$_lang['iso_country_code_converted'] = 'Úspěšně převedeny názvy zemí na ISO kódy.';
$_lang['legacy_cleanup_complete'] = 'Provedeno vyčištění starších souborů.';
$_lang['legacy_cleanup_count'] = 'Odstraněno [[+files]] soubor(ů) a [[+folders]] složek.';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'Systémové nastavení `[[+key]]` odstraněno.';
$_lang['system_setting_cleanup_failed'] = 'Systémové nastavení `[[+key]]` nelze odstranit.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'Systémové nastavení `[[+key]]` aktualizováno.';
$_lang['system_setting_update_failed'] = 'Systémové nastavení `[[+key]]` nelze aktualizovat.';
$_lang['system_setting_rename_key_success'] = 'Klíč systémového nastavení úspěšně přejmenován z `[[+old_key]]` na `[[+new_key]]`.';
$_lang['system_setting_rename_key_failure'] = 'Nepodařilo se přejmenovat klíč systémového nastavení z `[[+old_key]]` na `[[+new_key]]`.';
