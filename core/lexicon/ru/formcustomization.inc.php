<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Действие';
$_lang['action_desc'] = 'Действие, к которому будет применяться это правило.';
$_lang['activate'] = 'Включить';
$_lang['constraint'] = 'Ограничивающее значение';
$_lang['constraint_class'] = 'Ограничивающий класс';
$_lang['constraint_class_desc'] = 'Необязательно. Если задано значение, то вместе с ограничивающим полем и настройками ограничения, сведёт это правило к применённым ограничениям.';
$_lang['constraint_desc'] = 'Необязательно. Значение ограничивающего поля, при наличие которого правило будет работать.';
$_lang['constraint_field'] = 'Ограничивающее поле';
$_lang['constraint_field_desc'] = 'Необязательно. Поле при наличии которого правило будет работать.';
$_lang['constraint_incomplete_constraint_err'] = 'To apply constraints, the Constraint must be specified for this rule to work properly.';
$_lang['constraint_incomplete_constraint_warn'] = 'Set #%d in the Form Customization profile named “%s” may not work as expected because a Constraint Field was set but the Constraint is missing.';
$_lang['constraint_incomplete_field_err'] = 'To apply constraints, the Constraint Field must be specified for this rule to work properly.';
$_lang['constraint_incomplete_field_warn'] = 'Set #%d in the Form Customization profile named “%s” may not work as expected because a Constraint was set but the Constraint Field is missing.';
$_lang['containing_panel'] = 'Родительская панель';
$_lang['containing_panel_desc'] = 'ID панели формы, в которой находится область. Необходим в некоторых правилах для того, чтобы система могла понять в какой форме или панели находится область.';
$_lang['deactivate'] = 'Выключить';
$_lang['default_value'] = 'Значение по умолчанию';
$_lang['fc.action_create'] = 'Создать ресурс';
$_lang['fc.action_update'] = 'Редактировать ресурс';
$_lang['fc.action_resource_wildcard'] = 'Создание и редактирование ресурса';
$_lang['field'] = 'Поле';
$_lang['field_desc'] = 'Это область, к которой применяется правило. Это может быть поле, вкладка или TV. Если это TV, то указывайте его в формате: &laquo;tv#&raquo;, где # это ID дополнительного поля.';
$_lang['field_default'] = 'Значение поля по умолчанию';
$_lang['field_label'] = 'Название поля';
$_lang['field_visible'] = 'Видимость поля';
$_lang['fields'] = 'Полей';
$_lang['file'] = 'Файл';
$_lang['filter_by_action'] = 'Фильтровать по действию...';
$_lang['filter_by_rule_type'] = 'Фильтровать по правилу...';
$_lang['for_parent'] = 'Для контейнера';
$_lang['for_parent_desc'] = 'Отметьте, если это правило должно использоваться для контейнера. Используется только для ресурсов или объектов с полем «parent». Удобно использовать для страницы создания ресурса.';
$_lang['form_customization_msg'] = 'Вот список применяемых в настоящий момент правил. Более подробную информацию о правилах и настройке форм можно найти <a href="https://docs.modx.com/3.x/en/building-sites/client-proofing/form-customization" target="_blank">здесь</a>. Пожалуйста, обратите внимание, что некорректные правила могут привести к проблемам с MODX Revolution. Неактивные правила помечены серым цветом.';
$_lang['form_rules'] = 'Правила настройки форм';
$_lang['label'] = 'Новое имя';
$_lang['original_value'] = 'Оригинальное значение';
$_lang['profile'] = 'Профиль';
$_lang['profile_err_nfs'] = 'Профиль настройки форм с ID [[+id]] не найден.';
$_lang['profile_err_ns'] = 'Профиль настройки форм не указан!';
$_lang['profile_err_remove'] = 'Произошла ошибка при попытке удалить профиль.';
$_lang['profile_err_save'] = 'Произошла ошибка при попытке сохранить профиль.';
$_lang['profile_msg'] = 'Здесь вы можете указать наборы правил для этого профиля. Наборы правил применяются к странице (создания или редактирования ресурса). Применение набора может быть ограничено конкретным шаблоном или любым другим полем ресурса. Ограничения для страницы создания нового ресурса используют значения полей родительского ресурса.';
$_lang['profile_remove_confirm'] = 'Вы уверены, что хотите удалить этот профиль? Это действие необратимо.';
$_lang['profile_remove_multiple_confirm'] = 'Вы уверены, что хотите удалить эти профили? Это действие необратимо.';
$_lang['profile_usergroup_err_ae'] = 'Эта группа пользователей уже назначена этому профилю!';
$_lang['profile_usergroups_msg'] = 'Здесь вы можете назначить группы пользователей, которые будут использовать этот профиль. Если группы пользователей не назначены, все пользователи будут использовать этот профиль.';
$_lang['profiles'] = 'Профили настройки форм';
$_lang['profiles_msg'] = 'Это список профилей с наборами правил для настройки форм. Профиль может содержать много наборов таких правил настройки, быть включен или выключен. Они также могут быть настроены для применения только к определенным группам пользователей.';
$_lang['rank'] = 'Сортировка';
$_lang['rank_desc'] = 'Порядок, в котором правила будут выполняться. Меньшее число означает, что правило будет выполнено раньше.';
$_lang['region'] = 'Область';
$_lang['regions'] = 'Области';
$_lang['rule'] = 'Правило';
$_lang['rule_create'] = 'Создать правило';
$_lang['rule_desc'] = 'Тип правила, которое будет применяться к области.';
$_lang['rule_description_desc'] = 'Необязательно. Описание правила.';
$_lang['rule_err_ae'] = 'Такое правило для этой области уже есть!';
$_lang['rule_err_duplicate'] = 'Произошла ошибка при попытке копирования правила.';
$_lang['rule_err_nf'] = 'Правило не найдено.';
$_lang['rule_err_ns'] = 'Правило не указано.';
$_lang['rule_err_remove'] = 'Произошла ошибка при попытке удалить правило.';
$_lang['rule_err_save'] = 'Произошла ошибка при попытке сохранить правило.';
$_lang['rule_remove'] = 'Удалить правило';
$_lang['rule_remove_confirm'] = 'Вы уверены, что хотите удалить это правило?';
$_lang['rule_remove_multiple'] = 'Удалить несколько правил';
$_lang['rule_remove_multiple_confirm'] = 'Вы уверены, что хотите удалить эти правила? Это действие необратимо.';
$_lang['rule_update'] = 'Редактировать правило';
$_lang['rule_value_desc'] = 'Значение, присваиваемое правилу.';
$_lang['rules'] = 'Правила';
$_lang['set'] = 'Набор правил';
$_lang['set_and_fields'] = 'Информация о наборе правил и поля ресурса';
$_lang['set_change_template'] = 'Изменить шаблон связанный с набором правил';
$_lang['set_change_template_confirm'] = 'Вы уверены, что хотите это сделать? Будет изменён шаблон, на который эти правила распространяются. Если это так, то MODX сначала сохранит изменения перед тем, как перезагрузить страницу, чтобы обновить TV для нового шаблона.';
$_lang['set_constraint_field_desc'] = 'Указывая ограничивающее поле вы ограничиваете применение этого правила ресурсами у которых значение этого поля равно значению указанному в поле «Ограничивающее значение».';
$_lang['set_constraint_desc'] = 'Укажите значение ограничивающего поля (указанного выше) для ограничения выполнения правил из этого набора.';
$_lang['set_err_nfs'] = 'Не найден набор с ID [[+id]]';
$_lang['set_err_ns'] = 'Набор правил не указан.';
$_lang['set_fields_msg'] = 'Здесь вы можете настроить поля для этой страницы, включая их видимость, метки и значения по умолчанию. Просто дважды нажмите на строке, чтобы изменить её значение, или оставьте поле пустым для использования значения по умолчанию. <br>Внимание: скрывая элемент внутри этого профиля, он будет также скрыт в перекрывающихся профилях (даже если параметр указан как «видимый»).';
$_lang['set_import_err_upload'] = 'Произошла ошибка при попытке найти XML-файл. Пожалуйста, укажите корректный файл.';
$_lang['set_import_err_xml'] = 'Произошла ошибка при импорте из XML файла. Пожалуйста, убедитесь, что вы правильно указали XML файл с набором правил для настройки форм.';
$_lang['set_import_msg'] = 'Выберите XML-файл для импорта из него набора правил настройки форм.  Файл должен быть корректным XML-файлом формата набора правил настройки форм.';
$_lang['set_import_template_err_nf'] = 'Шаблон не найден во время импорта настроек параметров форм.';
$_lang['set_msg'] = 'Здесь вы можете изменить настройки стандартных полей, вкладок и TV ресурса для этого набора правил, их видимость, названия и значения по умолчанию. Дважды нажмите по строке, чтобы изменить значение. Или оставьте поле пустым, чтобы использовать значение по умолчанию.';
$_lang['set_remove_confirm'] = 'Are you sure you want to permanently delete this set? This is irreversible.';
$_lang['set_remove_multiple_confirm'] = 'Are you sure you want to permanently delete these sets? This is irreversible.';
$_lang['set_tab_err_ae'] = 'Вкладка с таким ID уже есть. Пожалуйста, укажите другой.';
$_lang['set_tabs_msg'] = 'Здесь вы можете настроить области для этой страницы, включая их видимость и названия. Просто дважды щелкните на строке, чтобы изменить её значение, или оставьте поле пустым для использования значения по умолчанию. <br>Пожалуйста, учтите: скрывая элемент внутри этого профиля, он будет также скрыт в перекрывающихся профилях (даже если параметр указан как «видимый»).';
$_lang['set_template_desc'] = 'Выбирая шаблон вы ограничиваете выполнение правил из этого набора только ресурсами с указанным шаблоном.';
$_lang['set_tvs_msg'] = 'Здесь можно изменить настройки для <abbr title="Дополнительное поле">TV</abbr> ресурса, их видимость, название, значение по умолчанию и указать область, в которой они должны отображаться. Внимание: Если вы перемещаете TV в другую область, то порядок показа TV можно настроить с помощью поля «Сортировка».';
$_lang['sets'] = 'Наборы правил для настройки форм';
$_lang['simplexml_err_nf'] = 'MODX требует PHP-расширение «SimpleXML», чтобы использовать эту функцию. Пожалуйста, убедитесь, что расширение установлено, прежде чем продолжить.';
$_lang['tab'] = 'Вкладка';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'Название вкладки';
$_lang['tab_title'] = 'Заголовок';
$_lang['tab_rank'] = 'Сортировка';
$_lang['tab_remove_confirm'] = 'Вы уверены, что хотите удалить эту вкладку?';
$_lang['tab_visible'] = 'Видимость вкладки';
$_lang['tabs'] = 'Вкладки';
$_lang['tv'] = 'TV';
$_lang['tv_default'] = 'Значение TV по умолчанию';
$_lang['tv_label'] = 'Заголовок TV';
$_lang['tv_name'] = 'Название';
$_lang['tv_move'] = 'Переместить TV на вкладку';
$_lang['tv_visible'] = 'Видимость TV';
$_lang['tvs'] = 'Дополнительные поля (TV)';
$_lang['usergroup'] = 'Группа пользователей';
$_lang['usergroup_create'] = 'Создать группу пользователей';
$_lang['usergroup_desc'] = 'Не обязательно. Если указано, то профиль будет применяться только к пользователям из указанной группы пользователей.';
$_lang['usergroup_remove'] = 'Удалить группу пользователей из профиля';
$_lang['usergroup_remove_confirm'] = 'Вы уверены, что хотите чтобы этот профиль больше не был связан с этой группой пользователей?';
$_lang['usergroups'] = 'Группы пользователей';
$_lang['visible'] = 'Видимый';
$_lang['xmlwriter_err_nf'] = 'MODX требует PHP-расширение «XMLWriter», чтобы использовать эту функцию. Пожалуйста, убедитесь, что расширение установлено, прежде чем продолжить.';
