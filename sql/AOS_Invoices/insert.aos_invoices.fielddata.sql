INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoiceshaa_frameworks_id_c', 'haa_frameworks_id_c', 'LBL_FRAMEWORK_HAA_FRAMEWORKS_ID', '', '', 'AOS_Invoices', 'id', '36', '0', NULL, '2016-10-24 14:19:24', '0', '0', '0', '0', '0', 'true', '', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesframework_c', 'framework_c', 'LBL_FRAMEWORK', NULL, NULL, 'AOS_Invoices', 'relate', '255', '1', NULL, '2016-10-25 03:16:34', '0', '0', '0', '0', '1', 'true', NULL, 'HAA_Frameworks', 'haa_frameworks_id_c', NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicessource_reference_c', 'source_reference_c', 'LBL_SOURCE_REFERENCE', NULL, NULL, 'AOS_Invoices', 'varchar', '255', '0', NULL, '2016-10-25 03:19:08', '0', '0', '0', '0', '1', 'true', NULL, NULL, NULL, NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicessource_id_c', 'source_id_c', 'LBL_SOURCE_ID', '', '', 'AOS_Invoices', 'varchar', '255', '0', '', '2016-10-24 14:29:42', '0', '0', '0', '0', '1', 'true', '', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesevent_type_c', 'event_type_c', 'LBL_EVENT_TYPE', '', '', 'AOS_Invoices', 'relate', '255', '0', NULL, '2016-10-26 06:38:22', '0', '0', '0', '0', '1', 'true', '', 'HAT_EventType', 'hat_eventtype_id_c', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoiceshat_eventtype_id_c', 'hat_eventtype_id_c', 'LBL_EVENT_TYPE_HAT_EVENTTYPE_ID', '', '', 'AOS_Invoices', 'id', '36', '0', NULL, '2016-10-26 06:38:22', '0', '0', '0', '0', '0', 'true', '', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicessource_code_c', 'source_code_c', 'LBL_SOURCE_CODE', NULL, NULL, 'AOS_Invoices', 'enum', '100', '1', NULL, '2016-10-25 03:18:34', '0', '0', '0', '0', '1', 'true', 'haos_source_code_list', NULL, NULL, NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesclear_date_c', 'clear_date_c', 'LBL_CLEAR_DATE', NULL, NULL, 'AOS_Invoices', 'date', NULL, '0', NULL, '2016-10-25 03:20:42', '0', '0', '0', '0', '1', 'true', NULL, NULL, NULL, NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesclosed_date_c', 'closed_date_c', 'LBL_CLOSED_DATE', NULL, NULL, 'AOS_Invoices', 'date', NULL, '0', NULL, '2016-10-25 03:21:14', '0', '0', '0', '0', '1', 'true', NULL, NULL, NULL, NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoiceslate_days_c', 'late_days_c', 'LBL_LATE_DAYS', NULL, NULL, 'AOS_Invoices', 'int', '255', '0', NULL, '2016-10-25 03:21:42', '0', '0', '0', '0', '1', 'true', NULL, NULL, NULL, NULL);
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesparent_name', 'parent_name', 'LBL_FLEX_RELATE', '', '', 'AOS_Invoices', 'parent', '100', '0', NULL, '2016-10-26 15:02:17', '0', '0', '0', '0', '1', 'true', 'parent_type_display', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesparent_type', 'parent_type', 'LBL_PARENT_TYPE', '', '', 'AOS_Invoices', 'parent_type', '255', '0', NULL, '2016-10-26 15:02:17', '0', '0', '0', '0', '1', 'true', '', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Invoicesparent_id', 'parent_id', 'LBL_PARENT_ID', '', '', 'AOS_Invoices', 'id', '36', '0', NULL, '2016-10-26 15:02:17', '0', '0', '0', '0', '1', 'true', '', '', '', '');
INSERT INTO `suitecrm`.`fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES ('AOS_Products_Quotesline_item_type_c', 'line_item_type_c', 'LBL_LINE_ITEM_TYPE', '', '', 'AOS_Products_Quotes', 'enum', '100', '0', 'Product', '2016-10-24 13:41:48', '0', '0', '0', '0', '1', 'true', 'haos_line_item_type_list', '', '', '');
			