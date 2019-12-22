﻿<?php

/*
 **************************************
 *
 * languages/nl/administration.lang.php
 * -------------
 *
 * last modified:	2005-07-10
 * -------------
 *
 * project:	chCounter
 * version:	3.1.1
 * copyright:	© 2005 Christoph Bachner
 * license:	GPL vs2.0 [ see docs/license.txt ]
 * contact:	www.christoph-bachner.net
 *
 **************************************
 *
 * Translation by: Marcel Morees
 *
 ************************************** 
*/


$_CHC_LANG = !isset( $_CHC_LANG ) ? array() : $_CHC_LANG;
$_CHC_LANG = array_merge( $_CHC_LANG, array(



	/* main (./administration/index.php) */
	'administration' => 'Administratie',
	'logs' => 'Log gegevens',
	'news' => 'Nieuws',
	'help' => 'Help &amp; Contact',
	'logout' => 'Uitloggen',
	'statistics' => 'Statistieken',
	'settings' => 'Instellingen',
	'login' => 'Inloggen',
	'logout_successful' => 'Succesvol uitgelogd.',
	'logout_not_successful' => 'Uitloggen is mislukt.',
	'logout_affirmation' => 'Klik op de knop om uit te loggen.<br />Indien gekozen is voor een cookie bij voortaan automatisch inloggen, wordt deze nu gewist.',
	'security_alert_install_directory' => '<span style="color: #FF0000">Belangrijk:</span><br />Verwijder de "install" map onmiddellijk na de installatie, dit in verband met veiligheidsredenen.',
	'welcome_message' => 'Welkom bij de chCounter Administratie!',


	/* News (./administration/new.inc.php) */
	'error_contacting_news_file' => 'Fout: Kon het nieuwsbestand van christoph-bachner.net niet vinden/bereiken.',
	'no_news_available_at_present' => 'Er is momenteel geen nieuws.',


	/* Logs (./administration/logs.inc.php) */
	'date_time' => 'Datum, tijd',
	'visitor_details' => 'Bezoeker details (Admininistratie)',
	'no_visitors_logged_yet' => 'Nog geen bezoekers opgeslagen.',


	/* detailed user information (./administration/visitor_details.php) */
	'browser\'s_language_settings' => 'Browser\'s taalinstellingen',
	'not_available' => 'niet beschikbaar',
	'preferred:' => 'Bij voorkeur:',
	'javascript' => 'JavaScript',
	'js_available_and_activated' => 'beschikbaar en geactiveerd',
	'js_not_available_or_deactivated' => 'niet geactiveerd of niet beschikbaar',
	'visited_pages' => 'Bekeken pagina\'s',
	'close_window' => 'Venster sluiten',

	/* Settings */
	'general_settings' => 'Algemeen',
	'global_settings' => 'Globale instellingen',
	'user_management' => 'Gebruikersbeheer',
	'counter' => 'Teller',
	'counter_settings' => 'Instellingen',
	'edit_counter_records' => 'Tellerwaarden veranderen',
	'general' => 'Algemeen',
	'(de)activate_statistics' => 'Statistieken (de)aktiveren',
	'database_operations:' => 'Database handelingen:',
	'reset_statistics' => 'Statistieken resetten',
	'data_cleanup' => 'Data schonen',
	'lists:' => 'Lijsten:',
	'blacklists' => '"Zwarte lijsten"',
	'exclusion_lists' => '"Negeer lijsten"',
	'hideout_lists' => '"Verberg lijsten"',
	'statistics_display' => 'Statistieken weergave:',
	'access_authorisations' => 'Toegang autorisaties',
	'top/latest' => 'De top/laatste &hellip;',
	'referrers,_search_engines_and_keywords' => 'Verwijzers, zoekmachines en zoekwoorden',
	'visitors_details' => 'Bezoekers details',
	'all_lists' => 'Alle lijsten',
	'pages_and_currently_online' => 'Pagina\'s &amp; momenteel online',
	'wrong_password' => 'Het wachtwoord is fout!',
	'configuration_updated' => 'De instellingen zijn bijgewerkt.',
	'please_fill_out_each_required_field' => 'Vul elk verplicht veld in!',
	'settings_description_guest_login' => 'Met deze toegang kunnen buiten de administrateur ook andere gebruikers de statistieken bekijken, tenzij zij uitgeschakeld zijn als "normale" gebruikers. Indien de velden blanco worden gelaten wordt het gastenaccount gedeactiveerd.',
	'settings_description_admin_login' => 'Hier kan je je gebruikersnaam en wachtwoord wijzigen. Als je het wachtwoord niet wilt wijzigen, laat elk wachtwoordveld blanco.',
	'save_settings' => 'Bewaar instellingen',
	'administrator' => 'Administrateur',
	'guest_login' => 'Gastenaccount',
	'name:' => 'Naam:',
	'old_password:' => 'Oud wachtwoord:',
	'new_password:' => 'Nieuw wachtwoord:',
	'new_password_(repetition):' => 'Nieuw wachtwoord:<br />(Herhaling)',
	'general_counter_settings' => 'Algemene teller instellingen',
	'URLs' => 'URL\'s',
	'hp_url' => 'URL van de website:',
	'url_of_counter_directory' => 'URL van de chCounter map:',
	'charset' => 'Tekenset',
	'homepage_charset:' => 'Tekenset van de website:',
	'default_counter_visibility:' => 'Zichtbaarheid van de teller (indien niet anders is opgegeven):',
	'counter_status_statistic_pages:' => 'Tellerstatus van de statistieken pagina\'s:',
	'counting_settings' => 'Telinstellingen',
	'description_blocking_mode' => 'Bezoeker niet opnieuw tellen:',
	'for_x_seconds' => 'binnen %s seconden',
	'until_the_end_of_day' => 'tot het einde van de dag',
	'description_user_online_timespan' => 'De tijd dat een bezoeker als "online" wordt getoond zonder actie:<br />(in sec.)',
	'time_settings' => 'Tijdinstellingen',
	'time_zone' => 'Tijdzone:',
	'enable_daylight_saving_time:' => 'Zomertijd aktief:',
	'use_admin_blocking_cookie' => 'Administrateur niet meetellen (middels een cookie):',
	'do_not_count_robots' => 'Tel geen robots (bijv. speurders van zoekmachines):',
	'language_settings' => 'Taalinstellingen',
	'default_language' => 'Standaardtaal van teller en statistieken:',
	'administration_language' => 'Taal van de administratie:',
	'yyyy-mm-dd' => 'jjjj-mm-dd', // d=day, m=month, Y=Year  | please do not change the positions, only translate the abbreviations, if necessary
	'simultaneously_online' => 'Gelijktijdig online',
	'delete_log_entries_after:' => 'Wis de <a href="index.php?cat=logs">log records</a> na:',
	'delete_log_entries_after:unit:hours' => 'uren',
	'delete_log_entries_after:unit:days' => 'dagen',
	'ignore_strings_with_a_length_less_than:' => 'Negeer woorden met minder dan:',
	'pages_statistic_page_titles' => 'Statistieken pagina\'s: Paginatitel',
	'description_(de)activate_search_for_page_titles' => 'De teller zoekt standaard naar de HTML paginatitel in het bestand waarin de PHP-code is geïntegreerd (zie <i>install/readme_en.txt</i> voor meer details). Maar aangezien dit een niet te onderschatte belasting voor de server kan veroorzaken, kan het zoeken naar de paginatitel worden gedeaktiveerd.',
	'search_for_page_titles:' => 'Zoeken naar een paginatitel:',
	'pages_statistic_query_string_cleanup' => 'Statistieken pagina\'s: schoning van de query string',
	'description_page_query_string_cleanup' => 'De zogehete "query string" (bijv. "<i>?variablename1=value1&<br />variablename2=value&&hellip;</i>") kan voor het bewaren geheel of gedeeltelijk worden verwijderd, om overbodige records te verhinderen en de statistieken overzichtelig te houden.<br /><br />Voorbeeld: van de pagina "<i>index.php?category=downloads&sort=ascending</i>" kan de variabel "<i>sort</i>" verwijderd worden, resultaat: "<i>index.php?category=downloads</i>".<br />De installatie configuratie van de teller plaatst hier standaard onbelangrijke variabelen aan de statistieken pagina\'s.',
	'keep_the_complete_query_string' => 'Behoud de gehele query string',
	'remove_the_complete_query_string' => 'Verwijder de gehele query string',
	'only_keep_the_following_variables:' => 'Behoud alleen de volgende variabelen:',
	'remove_the_following_variables:' => 'Verwijder de volgende variabelen:',
	'query_string_variables:' => 'Query string variabelen (gescheiden door \'; \'):',
	'purge_page_entries_now' => 'Schoon nu ook de in de database bewaarde pagina\'s op grond van bovenstaande instellingen.<br /><b>Let op:</b> Deze actie is onherroepelijk!',
	'referrers_statistic_query_string_cleanup' => 'Verwijzersstatistieken: schoning van de query string',
	'description_remove_referrer_query_string' => 'Ook bij de verwijzers kan de query string voor het bewaren verwijderd worden. De <i>gehele</i> query string zal verwijderd worden, gewoonlijk is dit niet nodig of aanbevolen.',
	'remove_query_string:' => 'Query string verwijderen:',
	'description_blacklists' => 'Bezoekers met de eigenschappen die voorkomen op één van deze lijsten worden niet geteld. De teller wordt gedeaktiveerd.<br />Elke registratie moet op een nieuwe regel beginnen, het % teken werkt als een joker.',
	'IPs:' => 'IP\'s:',
	'hosts:' => 'Hosts:',
	'user_agents:' => 'User agents:',
	'referrers:' => 'Verwijzers:',
	'description_exclusion_lists' => 'Bezoekers met de eigenschappen die voorkomen op één van deze lijsten zullen niet in de database worden bewaard. <br />Elke registratie moet op een nieuwe regel beginnen, het % teken werkt als een joker.',
	'pages_(relative_from_hp_root):' => 'Pagina\'s (het pad van een betreffende website URL):',
	'search_engines:' => 'Zoekmachines',
	'search_keywords:' => 'Zoekwoorden:',
	'search_phrases:' => 'Zoekfrases:',	
	'screen_resolutions:' => 'Beeldschermresoluties:',
	'description_hideout_lists' => 'Bezoekers met de eigenschappen die voorkomen op één van deze lijsten zullen niet worden weergegeven. Aangezien zij niet worden verwijderd uit de database, kunnen zij te allen tijde weer worden weergegeven.<br />Elke registratie moet op een nieuwe regel beginnen, het % teken werkt als een joker.',
	'browsers:' => 'Browsers:',
	'operating_systems:' => 'Operatief systemen:',
	'robots:' => 'Robots:',
	'referring_domains:' => 'Verwijzende domeinen:',
	'description_(de)activate_statistics' => 'Enkele statistieken kunnen gedeactiveerd worden, om bijv. de benodigde ruimte van de database terug te dringen (er worden geen nieuwe waarden meer bewaard).<br /><b>Belangrijk:</b> Gedeactiveerde statistieken kunnen nog steeds worden weergegeven. Om deze ook zichtbaar te verwijderen, moet je de desbetreffende regels verwijderen in de Templates bestanden.<br /><br />De volgende statistieken zijn <b>actief</b>:',
	'log_data' => 'Log gegevens',
	'user_agents,browsers,os,robots' => 'User agents/Browsers/Operatief systemen/Robots',
	'pages_statistic' => 'Pagina\'s statistieken',
	'countries_languages_hosts_statistic' => 'Landen/Talen/Host-TLD\'s',
	'search_engines_and_keywords' => 'Zoekmachines &amp; zoekwoorden',
	'reset_stats' => 'Statistieken resetten',
	'description_reset_stats' => 'De volgende statistieken kunnen gereset worden:',
	'reset_statistics_now' => 'Statistieken nu resetten',
	'access_statistics' => 'Toegangsstatistieken',
	'search_keywords_phrases' => 'Zoekwoorden/zoekfrases',
	'visitors,page_views_per_day' => 'Bezoekers/Bekeken pagina\'s per dag',
	'page_views_per_visitor' => 'Bekeken pagina\'s per bezoeker',
	'reset_confirmation' => 'Moeten de geselecteerde statistieken werkelijk gereset worden?',
	'statistics_were_reset' => 'De geselecteerde statistieken zijn gereset.',
	'countries_statistic' => 'Landenstatistieken',
	'languages_statistic' => 'Taalstatistieken',
	'hosts_statistic' => 'Hosts TLD\'s statistieken',
	'check_all' => 'alles selecteren',
	'uncheck_all' => 'alles deselecteren',
	'general_cleanup' => 'Algemene database schoonmaak',
	'description_general_cleanup' => 'Om het aantal database queries te verminderen, worden verouderde gegevens (log records en tijdelijke gegevens van eerdere bezoekers) niet direct gewist, maar met bepaalde tussenpozen.<br />Hier kun je het wissen onafhankelijk van de intervaltijd uitvoeren - gewoonlijk is dit <u>niet</u> nodig.',
	'perform_cleanup' => 'Schoonmaak datagegevens uitvoeren',
	'user_agents,referrers_cleanup' => 'Wis de user agents en verwijzers',
	'description_user_agents,referrers_cleanup' => 'Na een tijdje kunnen in de database erg veel records zich vastzetten met weinig of slechts één treffer die waardevolle plaats in beslag nemen. Zulke records kunnen gewist worden, waarvan de waarde wel verder samengevat wordt - De totale statistieken worden hierdoor niet vertekend.',
	'regular_cleanup' => 'Regelmatig wissen van records met weinig treffers:',
	'immediate_cleanup' => 'Eénmalig & onmiddelijk wissen:',
	'type:' => 'Type:',
	'max_incidences:' => 'Max. treffers:',
	'days_passed_since_last_incidence:' => 'Voorbijgegane dagen sinds de laatste treffer:',
	'cleanup:type_and_number_of_entries' => "%1\$s (%2\$s records totaal)",
	'cleanup_performed' => 'Schoonmaak datagegevens is uitgevoerd.',
	'cleanup_performed_(x_rows_deleted)' => 'Schoonmaak datagegevens is uitgevoerd (%s records zijn gewist).',
	'description_access_authorisations' => 'De volgende pagina\'s zijn alleen toegankelijk voor de administrateur of het gastenaccount:',
	'referrers/referring_domains:common_settings' => 'Verwijzers/verwijzende domeinen: algemene instellingen',
	'hyperlink_URLs:' => 'Link URL\'s:',
	'number_of_displayed_entries:' => 'Aantal getoonde records:',
	'abbreviate_referrers_after:' => 'Verwijzers afkorten na',
	'x_signs_(0_=_never)' => '%s tekens (0 = nooit)',
	'(0_=_never)' => '(0 = nooit)',
	'abbreviation_sign:' => 'Afkortingsteken:',
	'force_wordwrap_after:' => 'Nieuwe regel afdwingen na',
	'settings_description_referrers,_search_engines_and_keywords' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?cat=referrers">Verwijzers</a>" van de statistieken.</i>',
	'settings_description_latest_top' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php">Hoofdpagina</a>" van de statistieken.</i>',
	'top_...' => 'De top &hellip;',
	'latest_...' => 'De laatste &hellip;',
	'settings_description_visitors_details' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?cat=visitors_details">Bezoekers details</a>" van de statistieken.</i>',
	'settings_description_pages' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?cat=pages">Pagina\'s</a>" van de statistieken.</i>',
	'show_page_title:' => 'Toon de paginatitel (indien aanwezig):',
	'currently_online' => 'Momenteel online',
	'online_users_ip_format:' => "IP weergave:",
	'do_not_show_IPs' => 'Toon geen IP\'s',
	'force_wordwrap_of_page_name_after:' => 'Nieuwe regel van de paginatitel afdwingen na',
	'settings_description_logs' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="./index.php?cat=logs">Log gegevens</a>" van de Administratie.</i>',
	'entries_per_log_page:' => 'Aantal records per pagina:',
	'display_the_entries_on_each_log_page:' => 'Toon de records op elke pagina:',
	'settings_description_all_lists' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?list_all">Alle lijsten</a>" van de statistieken.</i>',
	'settings_description_access_statistics' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?cat=access_statistics">Toegangsstatistieken</a>".</i>',
	'vertical-bar_diagramm_representation:' => 'Presentatie diagrammen:',
	'description_vertical-bar_diagramm_representation:absolute' => 'op basis van het geheel',
	'description_vertical-bar_diagramm_representation:relative' => 'op basis van de hoogst enkele waarde',
	'pages_statistic_data_source' => 'Pages statistic: data source',
	'description_pages_statistic_data_source' => 'Here you can define which sources should be used to detect the path of the requested pages (only when including the counter with PHP). Explanations of the possibilities can be found in the <a href="http://www.php.net/manual/en/reserved.variables.php#reserved.variables.server" target="_blank">PHP Manual</a>.',
	'use_PHP_SELF_or_REQUEST_URI:' => 'Use for the pages statistic:',
	'exclude_robots_from_the_javascript_statistic' => 'Exclude robots from the javascript statistic.',
	'entry_and_exit_pages' => 'Entry and exit pages',
	'the_requested_visitor_does_not_exist' => 'The requested visitor does not exist in the log data.',	
	'settings_description_downloads_and_hyperlinks' => '<i>De volgende instellingen zijn van toepassing op de rubriek "<a href="../stats/index.php?cat=downloads_and_hyperlinks">Downloads &amp; hyperlinks</a>" van de statistieken.</i>',


	// help
	'contact' => 'Contact',
	'obtain_inclusion_code:' => 'Integratie code:',
	'PHP' => 'PHP',
	'JavaScript' => 'JavaScript',
	'description_support' => 'Mocht je hulp nodig hebben of je hebt suggesties/kritiek, bezoek het <a href="http://forum.christoph-bachner.net/" target="_blank"><b>forum</b></a>. Als alternatief ben ik ook via het e-mailadres webmaster@christoph-bachner.net te bereiken.<br />Als er een probleem is met de chCounter, lees <b>eerst</b> in de <b>installatie handleiding</b>, <b>het readme bestand</b> en <b>de FAQs</b> voor een oplossing.',
	'counter_inclusion_via_PHP' => 'Teller integratie via PHP',
	'description_php_include_code' => 'Hier kan je de PHP-code genereren, die je nodig hebt om de teller te integreren.',
	'important:' => 'Belangrijk:',
	'notice_file_extension' => 'Zorg ervoor dat doorgaans het bestand de extensie ".php" heeft om de PHP-code te kunnen uitvoeren. In de installatie handleiding is beschreven hoe je een PHP-code in een ".html" bestand uitvoert.',
	'notice_individual_template_and_indentation' => 'Wanneer een individuele template vermeld wordt, mag er nooit witruimte zijn voor de PHP-code!',
	'visible' => 'zichtbaar',
	'invisible' => 'onzichtbaar',
	'active' => 'actief',
	'inactive' => 'inactief',
	'optional_page_title:' => 'Paginatitel (optioneel):',
	'optional_individual_template:' => 'Individuele template (optioneel):',
	'generate_php_code' => 'genereer PHP-code',
	'counter_inclusion_via_JavaScript' => 'Teller integratie via JavaScript',
	'description_js_include_code' => 'Hier kan je de JavaScript-code genereren, die je nodig hebt om de teller te integreren.',
	'notice_advantages_of_including_with_php' => '<b>Indien</b> mogelijk, zou de teller met PHP geïntegreerd moeten worden. Als JavaScript gebruikt is, kunnen bezoekers die JavaScript gedeactiveerd hebben en alle robots/speurders niet geteld worden.',
	'generate_JavaScript_code' => 'genereer JavaScript-code',
	'generated_code' => 'gegenereerde code:',
	
	
	// Downloads & Hyperlinks
	'download_feature_is_deactivated' => 'The download counting feature is deactivated!',
	'new_download' => 'Add a new download.',
	'upload_date' => 'Upload date',
	'name' => 'Name',
	'ID' => 'ID',
	'URL' => 'URL',
	'upload' => 'Upload',
	'last_download' => 'Last download',
	'edit' => 'edit',
	'delete' => 'delete',
	'to_the_overall_view' => '-&gt; To the overall_view.',
	'back_to_the_overall_view' => 'Back to the overall_view.',
	'download_successfully_inserted' => 'The Download was inserted successfully.',
	'download_could_not_be_inserted' => 'The Download could not be inserted.',
	'insert_a_new_download' => 'Insert a new download:',
	'please_fill_out_every_field' => 'Please fill out each field!',
	'insert_download' => 'Insert the download',
	'entry_successfully_updated' => 'The entry was updated successfully.',
	'entry_could_not_be_updated' => 'The entry could not be updated.',
	'could_not_find_the_requested_entry' => 'The requested entry could not be found.',
	'edit_a_download_entry' => 'Edit a download entry:',
	'number_of_downloads' => 'Number of downloads',
	'time_of_upload' => 'Time of uploads',
	'save_entry' => 'Save entry',
	'entry_successfully_deleted' => 'The entry was deleted successfully.',
	'entry_could_not_be_deleted' => 'The entry could not be deleted.',
	'entries_successfully_deleted' => 'The entries were deleted successfully.',
	'entries_could_not_be_deleted' => 'The entries could be deleted.',
	'delete_entry?' => 'Delete entry?',
	'delete_entry_now' => 'Delete entry now',
	'delete_the_selected_entries' => 'Delete the selected entries',
	'delete_entries' => 'Delete entries',
	'delete_many_entries_confirmation' => 'Do you want to finally delete the following entries?',
	'delete_all_displayed_entries_now' => 'Yes, delete now all the listed entries.',
	'HTML_Code' => 'HTML code',
	'general_URL_for_download_counting:' => 'General URL for linking to a download file:',
	'general_URL_for_hyperlink_counting:' => 'General URL of a hyperlink entry:',
	
	'hyperlink_feature_is_deactivated' => 'The hyperlink counting feature ist deactivated!',
	'new_hyperlink' => 'Insert a new download.',
	'added' => 'added',
	'last_click' => 'Last click',
	'insert_a_new_hyperlink' => 'Insert a new hyperlink:',
	'insert_hyperlink' => 'Insert the hyperlink',
	'hyperlink_successfully_inserted' => 'The hyperlink was inserted successfully.',
	'hyperlink_could_not_be_inserted' => 'The hyperlink could not be inserted.',
	'edit_a_hyperlink_entry' => 'Edit hyperlink entry:',
	'number_of_clicks' => 'Number of clicks',
	'number_of_clicks' => 'Total clicks',	

) );

?>