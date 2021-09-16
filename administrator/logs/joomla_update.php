#
#<?php die('Forbidden.'); ?>
#Date: 2021-09-08 12:31:17 UTC
#Software: Joomla! 4.0.0-beta8-dev Development [ Mañana ] 2-February-2021 20:02 GMT

#Fields: datetime	priority clientip	category	message
2021-09-08T12:31:17+00:00	INFO 127.0.0.1	update	Update started by user admin (159). Old version is &#x200E;4.0.0-beta8-dev.
2021-09-08T12:31:18+00:00	INFO 127.0.0.1	update	Downloading update file from https://downloads.joomla.org/cms/joomla4/4-0-2/Joomla_4.0.2-Stable-Update_Package.zip.
2021-09-08T12:31:34+00:00	INFO 127.0.0.1	update	File Joomla_4.0.2-Stable-Update_Package.zip downloaded.
2021-09-08T12:31:34+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2021-09-08T12:31:47+00:00	INFO 127.0.0.1	update	Finalising installation.
2021-09-08T12:31:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: DELETE FROM `#__postinstall_messages`  WHERE `title_key`     IN ('COM_CPANEL_MSG.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: ALTER TABLE `#__fields` ADD COLUMN `only_use_in_subform` tinyint NOT NULL DEFAUL.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__extensions` SET `name` = 'plg_fields_subform', `element` = 'subform' .
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__fields` SET `type` = 'subform' WHERE `type` = 'subfields';.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: ALTER TABLE `#__mail_templates` ADD COLUMN `extension` varchar(127) NOT NULL DEF.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__mail_templates` SET `extension` = SUBSTRING(`template_id`, 1, POSITIO.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"bootstrap_size":"6"','".
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"bootstrap_size": "6"','.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"header_tag":"h3"','"hea.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__template_styles`    SET `params` = '{"hue":"hsl(214, 63%, 20%)","bg-l.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: DELETE FROM `#__extensions` WHERE `name` = 'com_csp' and `type` = 'component' an.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: DROP TABLE IF EXISTS `#__csp`;.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__mail_templates`    SET `subject` = 'COM_PRIVACY_EMAIL_DATA_EXPORT_COM.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: ALTER TABLE `#__finder_taxonomy` ADD INDEX `idx_level` (`level`);.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"layout":"cassiopeia:dro.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__update_sites`    SET `location` = 'https://update.joomla.org/language.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-06-04. Query text: UPDATE `#__template_styles`    SET `title` = 'Atum - Default'  WHERE `title` = '.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-06-04. Query text: UPDATE `#__template_styles`    SET `title` = 'Cassiopeia - Default'  WHERE `titl.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets`    SET `name` = 'com_content.stage.1'  WHERE `name` = 'com_co.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Unpublish' WHERE `name` = 'com_content.transit.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Publish'   WHERE `name` = 'com_content.transit.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Trash'     WHERE `name` = 'com_content.transit.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Archive'   WHERE `name` = 'com_content.transit.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__workflow_stages` s  INNER JOIN (SELECT `name`, MAX(`id`) AS `id` FROM.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: UPDATE `#__extensions` a  CROSS JOIN (SELECT `extension_id` FROM `#__extensions`.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__update_sites` (`name`, `type`, `location`, `enabled`) VALUES ('S.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__update_sites_extensions` (`update_site_id`, `extension_id`) VALU.
2021-09-08T12:31:49+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2021-09-08T12:31:51+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2021-09-08T12:31:51+00:00	INFO 127.0.0.1	update	Update to version 4.0.2 is complete.
2021-09-16T09:26:27+00:00	INFO 127.0.0.1	update	Update started by user admin (159). Old version is &#x200E;4.0.2.
2021-09-16T09:26:29+00:00	INFO 127.0.0.1	update	Downloading update file from https://downloads.joomla.org/cms/joomla4/4-0-3/Joomla_4.0.3-Stable-Update_Package.zip.
2021-09-16T09:26:38+00:00	INFO 127.0.0.1	update	File Joomla_4.0.3-Stable-Update_Package.zip downloaded.
2021-09-16T09:26:38+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Finalising installation.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__update_sites_extensions`  WHERE `update_site_id` IN (SELECT `upd.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__update_sites`  WHERE `location` = 'https://raw.githubusercontent.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__extensions`  WHERE `type` = 'package' AND `element` = 'pkg_searc.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'PUBLISH' WHERE `title`= 'Publish.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'UNPUBLISH' WHERE `title`= 'Unpub.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'TRASH' WHERE `title`= 'Trash';.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'ARCHIVE' WHERE `title`= 'Archive.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'FEATURE' WHERE `title`= 'Feature.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'UNFEATURE' WHERE `title`= 'Unfea.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'PUBLISH_AND_FEATURE' WHERE `titl.
2021-09-16T09:26:48+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2021-09-16T09:26:50+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2021-09-16T09:26:50+00:00	INFO 127.0.0.1	update	Update to version 4.0.3 is complete.
