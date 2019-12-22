﻿<?php

/*
 **************************************
 *
 * languages/en/main.lang.php
 * -------------
 *
 * last modified:	2005-07-13
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
*/


$_CHC_LANG = !isset( $_CHC_LANG ) ? array() : $_CHC_LANG;
$_CHC_LANG = array_merge( $_CHC_LANG, array(



	/* common variables */
	'Yes' => 'Yes',
	'No' => 'No',
	'yes' => 'yes',
	'no' => 'no',
	'hour' => 'Hour',
	'time_zone' => 'Time zone: %s.',
	'IP' => 'IP',
	'Host' => 'Host',
	'please_choose' => 'Please choose...',
	'total:' => 'Total:',
	'percentage' => 'Percentage',
	'no_entry_in_database' => 'No entry stored in the database.',
	'more' => 'more',
	'OK' => 'OK',
	'quantity' => 'Quantity',
	'page' => 'Page',
	'page_views' => 'Page views',
	'last_activity' => 'Last activity',
	'unknown' => 'unknown',
	'others' => 'others',
	'no_date_available' => 'No date available.',
	'ascending' => 'ascending',
	'descending' => 'descending',
	'show_all_entries' => 'Show all entries!',
	'go_to_top' => 'To Top',

	'date' => array(
		'Sunday' => 'Sunday',
		'Monday' => 'Monday',
		'Tuesday' => 'Tuesday',
		'Wednesday' => 'Wednesday',
		'Thursday' => 'Thursday',
		'Thursday' => 'Thursday',
		'Thursday' => 'Thursday',
		'Sun' => 'Sun',
		'Mon' => 'Mon',
		'Tue' => 'Tue',
		'Wed' => 'Wed',
		'Thu' => 'Thu',
		'Fri' => 'Fri',
		'Sat' => 'Sat',
		'January' => 'January',
		'February' => 'February',
		'March' => 'March',
		'April' => 'April',
		'May' => 'May',
		'June' => 'June',
		'July' => 'July',
		'August' => 'August',
		'September' => 'September',
		'October' => 'October',
		'November' => 'November',
		'December' => 'December',
		'Jan' => 'Jan',
		'Feb' => 'Feb',
		'Mar' => 'Mar',
		'Apr' => 'Apr',
		'May' => 'May',
		'Jun' => 'Jun',
		'Jul' => 'Jul',
		'Aug' => 'Aug',
		'Sep' => 'Sep',
		'Oct' => 'Oct',
		'Nov' => 'Nov',
		'Dec' => 'Dec'
	),
	'time_zones' => array(
		'-13'	=> 'UTC -13:00',
		'-12'	=> 'UTC -12:00',
		'-11'	=> 'UTC -11:00',
		'-10'	=> 'UTC -10:00 (HST - Hawaii-Aleutian Standard Time)',
		'-9.5'	=> 'UTC -09:30',
		'-9'	=> 'UTC -09:00 (AKST - Alaska Standard Time)',
		'-8'	=> 'UTC -08:00 (PST - Pacific Standard Time)',
		'-7'	=> 'UTC -07:00 (MST - Mountain Standard Time)',
		'-6'	=> 'UTC -06:00 (CST - Central Standard Time)',
		'-5'	=> 'UTC -05:00 (EST - Eastern Standard Time)',
		'-4'	=> 'UTC -04:00 (AST - Atlantic Standard Time)',
		'-3.5'	=> 'UTC -03:30 (NST - Newfoundland Standard Time)',
		'-3'	=> 'UTC -03:00',
		'-2.5'	=> 'UTC -02:30',
		'-2'	=> 'UTC -02:00',
		'-1'	=> 'UTC -01:00',
		'0'		=> 'UTC (GMT)',
		'1'		=> 'UTC +01:00 (CET - Central European Time)',
		'2'		=> 'UTC +02:00',
		'3'		=> 'UTC +03:00 (MSK - Moscow Time)',
		'3.5'	=> 'UTC +03:30',
		'4'		=> 'UTC +04:00',
		'4.5'	=> 'UTC +04:30',
		'5'		=> 'UTC +05:00',
		'5.5'	=> 'UTC +05:30 (IST - Indian Standard Time)',
		'5.75'	=> 'UTC +05:45',
		'6'		=> 'UTC +06:00',
		'6.5'	=> 'UTC +06:30',
		'7'		=> 'UTC +07:00',
		'8'		=> 'UTC +08:00 (AWST - Australian Western Standard Time)',
		'8.75'	=> 'UTC +08:45',
		'9'		=> 'UTC +09:00',
		'9.5'	=> 'UTC +09:30 (ACST - Australian Central Standard Time)',
		'10'	=> 'UTC +10:00 (AEST - Australian Eastern Standard Time)',
		'10.5'	=> 'UTC +10:30',
		'11'	=> 'UTC +11:00',
		'12'	=> 'UTC +12:00',
		'12.75'	=> 'UTC +12:45',
		'13'	=> 'UTC +13:00',
		'14'	=> 'UTC +14:00'
	),
	'time_zone_dst'	=> '[DST, +01:00]',



	/* ./counter.php */
	'total_visitors:' => 'Total visitors:',
	'visitors_today:' => 'Visitors today:',
	'visitors_yesterday:' => 'Visitors yesterday:',
	'visitors_per_day:' => 'Visitors per day:',
	'max_visitors_per_day:' => 'Max. visitors per day:',
	'max_visitors_per_day_date:' => 'Max. visitors per day (date):',
	'visitors_currently_online:' => 'Currently online:',
	'max_visitors_online:' => 'Max. online:',
	'max_visitors_online_date:' => 'Max. online (date):',
	'total_page_views:' => 'Total page views:',
	'page_views_today:' => 'Page views today:',
	'page_views_yesterday:' => 'Page views yesterday:',
	'max_page_views_per_day:' => 'Max. page views per day:',
	'max_page_views_per_day_date:' => 'Max page views per day (date):',
	'page_views_per_day:' => 'Page views per day:',
	'page_views_per_visitor:' => 'Page views per visitor',
	'page_views_this_page:' => 'Page views of this page:',
	'page_views_of_current_visitor:' => 'Your own page views:',
	'javascript_activated:' => 'JavaScript activated',
	'deactivated' => '<i>deactivated</i>',	
	'counter_start:' => 'Counter started:',
	'statistics' => 'Statistics',
	'error:outdated_jscode' => 'The JavaScript that is used to integrate the chCounter is outdated - please generate a new code in the Admin Control Panel!',




	/* ./stats/online_users.php */
	'online_users_page_title' => 'Currently online', // this is the page title that is presented to the counter
	'total_visitors_online' => 'Total: <b>%s</b> visitor(s) online',
	'no_visitors_online' => 'No visitors online.',
	'close_window' => 'close window',


	/* ./stats/versions.php */
	'versions_page_title' => 'Browser/OS/Robot versions', // this is the page title that is presented to the counter
	'versions_info' => 'Browser/OS/Robot versions',
	'version' => 'version',


	/* ./stats/index.php */
	'translation_by:' => "Translation (%1\$s) by: %2\$s",  // %1\$s -> name of the language, lang_name.txt        %2\$s -> creator of the translation, see lang_config.inc.php
	'released_under_the_GNU_GPL' => 'Freely available under the <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.',
	'top_browsers' => 'Top browsers:',
	'browser' => 'Browser',
	'browsers' => 'Browsers',
	'top_operating_systems' => 'Top operating systems:',
	'os' => 'OS',
	'operating_system' => 'Operating system',
	'operating_systems' => 'Operating systems',
	'robot' => 'Robot',
	'robots' => 'Robots',
	'unknown_browser' => 'unknown browser',
	'unknown_operating_system' => 'unknown operating system',
	'unknown_robot' => 'unknown robot',
	'top_user_agents' => 'Top user agents:',
	'user_agent' => 'User agent',
	'user_agents' => 'User agents',
	'top_countries_languages_hosts' => 'Top countries/languages/host-TLDs:',
	'country' => 'Country',
	'Language' => 'Language:',
	'host_tld' => 'Host TLD',
	'unresolved' => '[unresolved]',
	'top_screen_resolutions' => 'Top screen resolutions:',
	'resolution' => 'Resolution',
	'show:' => 'Show:',
	'No.' => 'No.',
	'Currently_online:' => 'Currently online:',
	'top_pages' => 'Top pages:',
	'referrers' => 'Referrer',
	'pages' => 'Pages',
	'search_keywords' => 'Search keywords',
	'search_phrases' => 'Search phrases',
	'search_engines' => 'Search engines',
	'screen_resolutions' => 'Screen resolutions',
	'statistic_running_since:' => '(since %s)',
	'access_statistic_running_since:' => 'The access statistics are running since %s.',
	'statistics_downloads_and_hyperlinks' => 'Downloads &amp; hyperlinks',
	'download' => 'Download',
	'downloads' => 'Downloads',
	'top_downloads' => 'The top downloads',
	'hyperlink' => 'Hyperlink',
	'hyperlinks' => 'Hyperlinks',
	'top_hyperlinks' => 'The top hyperlinks',
	'first_activity' => 'First activity',
	'entry_page' => 'Entry page',
	'exit_page' => 'Exit page',
	'since_statistics_start' => 'since statistics start',
	'time_frame:' => 'Zeitrahmen:',
	'complete_list' => 'complete list',
	'entry_pages' => 'Entry pages',
	'exit_pages' => 'Exit pages',

	// statistic pages: page titles, used by the counter itself and in the HTML title tag
	'statistics_page_title_main' => 'Statistics (Main Page)',
	'statistics_page_title_pages' => 'Pages statistics',
	'statistics_page_title_referrers' => 'Referrers statistics',
	'statistics_page_title_visitors_details' => 'Visitors details',
	'statistics_page_title_access_stats' => 'Access statistics',
	'statistics_page_title_all_lists' => 'List all: %s',
	'statistics_page_title_downloads_and_hyperlinks' => 'Downloads & hyperlinks',

	// Navigation statistics pages
	'statistics_main_page' => 'Main page',
	'statistics_pages' => 'Pages',
	'statistics_referrers' => 'Referrers',
	'statistics_visitors_details' => 'Visitors details',
	'statistics_access_stats' => 'Access statistics',

	// statistics: main page
	'statistics_for_' => 'Visitors statistics for %s.',
	'data_and_records' => 'Data &amp; Records',
	'counter_running_since:' => 'The counter is running since %s.',
	'today:' => 'Today:',
	'yesterday:' => 'Yesterday:',
	'per_day:' => 'Per day:',
	'max_per_day:' => 'Max. per day:',
	'max_per_day_date:' => 'Max. per day (date):',
	'currently_online:' => 'Currently online:',
	'max_online:' => 'Max. online:',
	'max_online_date:' => 'Max. online (date):',
	'per_visitor:' => 'Per visitor:',
	'this_page:' => 'This page:',
	'latest_x' => 'The latest:',
	'last' => 'Last:',
	'top_x' => 'The most frequent:',
	'countries' => 'Countries',
	'languages' => 'Languages',
	'referrer' => 'Referrer',
	'referring_domain' => 'Referring domain',
	'search_keyword' => 'Search keyword',
	'search_phrase' => 'Search phrase',
	'search_engine' => 'Search engine',
	'screen_resolution' => 'Screen resolution',

	// statistics: access statistics
	'daily_weekly_distribution' => 'Daily/weekly distribution',
	'time_of_day' => 'Time of day',
	'weekdays' => 'Weekdays',
	'weekday' => 'Weekday',
	'visitors' => 'Visitors',
	'day_statistic' => 'Day statistic',
	'calendar_week_statistic' => 'Calendar week statistic',
	'week' => 'Week',
	'month_statistic' => 'Month statistic',
	'day' => 'Day',
	'year_statistic' => 'Year statistic',
	'month' => 'Month',
	'year' => 'Year',
	'day_of_week' => 'Day of the week',
	'..._visitors_on_the_average' => '%s visitors on the average',
	'..._page_views_on_the_average' => '%s page views on the average',
	'...-..._o_clock' => "%1\$s-%2\$s o'clock",
	'..._visitors' => '%s visitors',
	'..._page_views' => '%s age views',
	'calendar_week_long' => "Calendar week %1\$s (%2\$s - %3\$s)",
	'calendar_week_short' => "%1\$s. CW",
	'calendar_week_records' => "Week %1\$s,<br />%2\$s - %3\$s",
	'..._on_the_average' => '%s on the average',
	'The_last:' => 'The last:',
	'28_days' => '28 days',
	'12_months' => '12 months',
	'years' => 'Years',
	'records' => 'Records',
	'max_a_day' => 'Max. a day:',
	'min_a_day' => 'Min. a day:',
	'max_a_calendar_week' => 'Max. a calendar week:',
	'min_a_calendar_week' => 'Min. a calendar week:',
	'max_a_month' => 'Max. a month:',
	'min_a_month' => 'Min. a month:',
	'max_a_year' => 'Max. a year:',
	'min_a_year' => 'Min. a year:',


	// statistics: referrers
	'top_referrers' => 'Top referrers:',
	'top_referring_domains' => 'Top referring domains:',
	'domain' => 'Domain',
	'top_search_keywords_phrases' => 'Top search keywords/phrases',
	'top_search_engines' => 'Top search engines the visitors came from:',


	// statistics: users details
	'top_robots' => 'Top robots:',
	'hosts_tlds' => 'Hosts\' Top Level Domains',
	'language' => 'Language',


	// statistics: All lists
	'referrers' => 'Referrers',
	'referring_domains' => 'Referring domains',
	'by_last_occurrence' => 'by last occurrence',
	'by_alphabet' => 'by alphabet',
	'by_quantity' => 'by quantity',
	'list_all:' => 'List all:',
	'sort:' => 'Sort:',
	'go_back_to_cat' => '[ go back to category "%s" ]',
	'other' => 'other',


	// login
	'login_required' => 'Authorisation required - please log in:',
	'login_invalid_input' => 'Invalid input - login not allowed.',
	'your_user_name:' => 'Your user name:',
	'your_password:' => 'Your password:',
	'set_login_cookie' => 'Log in automatically in future:<br />(via cookie)',
	'login_now' => 'Log in now',



	// country code -> country
	// http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Current_elements
	'lib_countries' => array(
		'ac' => 'Ascension',
		'ad' => 'Andorra',
		'ae' => 'United Arab Emirates',
		'af' => 'Afghanistan',
		'ag' => 'Antigua and Barbuda',
		'ai' => 'Anguilla',
		'al' => 'Albania',
		'am' => 'Armenia',
		'an' => 'Netherlands Antilles',
		'ao' => 'Angola',
		'aq' => 'Antarctica',
		'ar' => 'Argentina',
		'as' => 'American Samoa',
		'at' => 'Austria',
		'au' => 'Australia',
		'aw' => 'Aruba',
		'ax' => 'Ã…land Islands',
		'az' => 'Azerbaijan',
		'ba' => 'Bosnia and Herzegovina',
		'bb' => 'Barbados',
		'bd' => 'Bangladesh',
		'be' => 'Belgium',
		'bf' => 'Burkina Faso',
		'bg' => 'Bulgaria',
		'bh' => 'Bahrain',
		'bi' => 'Burundi',
		'bj' => 'Benin',
		'bm' => 'Bermuda',
		'bn' => 'Brunei Darussalam',
		'bo' => 'Bolivia',
		'br' => 'Brazil',
		'bs' => 'Bahamas',
		'bt' => 'Bhutan',
		'bv' => 'Bouvet Island',
		'bw' => 'Botswana',
		'by' => 'Belarus',
		'bz' => 'Belize',
		'ca' => 'Canada',
		'cc' => 'Cocos (Keeling) Islands',
		'cd' => 'Democratic Republic of the Congo (formerly Zaire)',
		'cf' => 'Central African Republic',
		'cg' => 'Congo (Republic of the Congo)',
		'ch' => 'Switzerland',
		'ci' => 'CÃ´te d\'Ivoire',
		'ck' => 'Cook Islands',
		'cl' => 'Chile',
		'cm' => 'Cameroon',
		'cn' => 'China (People\'s Republic of China)',
		'co' => 'Colombia',
		'cr' => 'Costa Rica',
		'cs' => 'Serbia and Montenegro',
		'cu' => 'Cuba',
		'cv' => 'Cape Verde',
		'cx' => 'Christmas Island',
		'cy' => 'Cyprus',
		'cz' => 'Czech Republic',
		'de' => 'Germany',
		'dj' => 'Djibouti',
		'dk' => 'Denmark',
		'dm' => 'Dominica',
		'do' => 'Dominican Republic',
		'dz' => 'Algeria',
		'ea' => 'Ceuta and Melilla',
		'ec' => 'Ecuador',
		'ee' => 'Estonia',
		'eg' => 'Egypt',
		'eh' => 'Western Sahara',
		'er' => 'Eritrea',
		'es' => 'Spain',
		'et' => 'Ethiopia',
		'fi' => 'Finland',
		'fj' => 'Fiji',
		'fk' => 'Falkland Islands',
		'fm' => 'Federated States of Micronesia',
		'fo' => 'Faroe Islands',
		'fr' => 'France',
		'ga' => 'Gabon',
		'gb' => 'Great Britain',
		'uk' => 'United Kingdom',
		'en' => 'England',
		'wl' => 'Wales',
		'sf' => 'Scotland',
		'gd' => 'Grenada',
		'ge' => 'Georgia',
		'gf' => 'French Guiana',
		'gh' => 'Ghana',
		'gi' => 'Gibraltar',
		'gl' => 'Greenland',
		'gm' => 'Gambia',
		'gn' => 'Guinea',
		'gp' => 'Guadeloupe',
		'gq' => 'Equatorial Guinea',
		'gr' => 'Greece',
		'gs' => 'South Georgia and the South Sandwich Islands',
		'gt' => 'Guatemala',
		'gu' => 'Guam',
		'gw' => 'Guinea-Bissau',
		'gy' => 'Guyana',
		'hk' => 'Hong Kong',
		'hm' => 'Heard Island and McDonald Islands',
		'hn' => 'Honduras',
		'hr' => 'Croatia (Hrvatska)',
		'ht' => 'Haiti',
		'hu' => 'Hungary',
		'id' => 'Indonesia',
		'ie' => 'Ireland',
		'il' => 'Israel',
		'in' => 'India',
		'io' => 'British Indian Ocean Territory',
		'iq' => 'Iraq',
		'ir' => 'Iran',
		'is' => 'Iceland',
		'it' => 'Italy',
		'jm' => 'Jamaica',
		'jo' => 'Jordan',
		'jp' => 'Japan',
		'ke' => 'Kenya',
		'kg' => 'Kyrgyzstan',
		'kh' => 'Cambodia',
		'ki' => 'Kiribati',
		'km' => 'Comoros',
		'kn' => 'Saint Kitts and Nevis',
		'kp' => 'North Korea',
		'kr' => 'Republic of Korea (South Korea)',
		'kw' => 'Kuwait',
		'ky' => 'Cayman Islands',
		'kz' => 'Kazakhstan',
		'la' => 'Lao People\'s Democratic Republic (Laos)',
		'lb' => 'Lebanon',
		'lc' => 'Saint Lucia',
		'li' => 'Liechtenstein',
		'lk' => 'Sri Lanka',
		'lr' => 'Liberia',
		'ls' => 'Lesotho',
		'lt' => 'Lithuania',
		'lu' => 'Luxembourg',
		'lv' => 'Latvia',
		'ly' => 'Libyan Arab Jamahiriya (Libya)',
		'ma' => 'Morocco',
		'mc' => 'Monaco',
		'md' => 'Moldova',
		'mg' => 'Madagascar',
		'mh' => 'Marshall Islands',
		'mk' => 'Macedonia',
		'ml' => 'Mali',
		'mm' => 'Myanmar (Burma)',
		'mn' => 'Mongolia',
		'mo' => 'Macao (Macau)',
		'mp' => 'Northern Mariana Islands',
		'mq' => 'Martinique',
		'mr' => 'Mauritania',
		'ms' => 'Montserrat',
		'mt' => 'Malta',
		'mu' => 'Mauritius',
		'mv' => 'Maldives',
		'mw' => 'Malawi',
		'mx' => 'Mexico',
		'my' => 'Malaysia',
		'mz' => 'Mozambique',
		'na' => 'Namibia',
		'nc' => 'New Caledonia',
		'ne' => 'Niger',
		'nf' => 'Norfolk Island',
		'ng' => 'Nigeria',
		'ni' => 'Nicaragua',
		'nl' => 'Netherlands',
		'no' => 'Norway',
		'np' => 'Nepal',
		'nr' => 'Nauru',
		'nu' => 'Niue',
		'nz' => 'New Zealand',
		'om' => 'Oman',
		'pa' => 'Panama',
		'pe' => 'Peru',
		'pf' => 'French Polynesia (including Clipperton Island)',
		'pg' => 'Papua New Guinea',
		'ph' => 'Philippines',
		'pk' => 'Pakistan',
		'pl' => 'Poland',
		'pm' => 'Saint Pierre and Miquelon',
		'pn' => 'Pitcairn Islands',
		'pr' => 'Puerto Rico',
		'ps' => 'Occupied Palestinian Territories',
		'pt' => 'Portugal',
		'pw' => 'Palau',
		'py' => 'Paraguay',
		'qa' => 'Qatar',
		're' => 'RÃ©union',
		'ro' => 'Romania',
		'ru' => 'Russia',
		'rw' => 'Rwanda',
		'sa' => 'Saudi Arabia',
		'sb' => 'Solomon Islands',
		'sc' => 'Seychelles',
		'sd' => 'Sudan',
		'se' => 'Sweden',
		'sg' => 'Singapore',
		'sh' => 'Saint Helena (including Ascension Island and other dependencies)',
		'si' => 'Slovenia',
		'sj' => 'Svalbard and Jan Mayen Islands',
		'sk' => 'Slovakia',
		'sl' => 'Sierra Leone',
		'sm' => 'San Marino',
		'sn' => 'Senegal',
		'so' => 'Somalia',
		'sr' => 'Suriname',
		'st' => 'Sao Tome and Principe',
		'sv' => 'El Salvador',
		'sy' => 'Syrian Arab Republic (Syria)',
		'sz' => 'Swaziland',
		'tc' => 'Turks and Caicos Islands',
		'td' => 'Chad (Tchad)',
		'tf' => 'French Southern Territories',
		'tg' => 'Togo',
		'th' => 'Thailand',
		'tj' => 'Tajikistan',
		'tk' => 'Tokelau',
		'tl' => 'Timor-Leste (East Timor)',
		'tm' => 'Turkmenistan',
		'tn' => 'Tunisia',
		'to' => 'Tonga',
		'tr' => 'Turkey',
		'tt' => 'Trinidad and Tobago',
		'tv' => 'Tuvalu',
		'tw' => 'Taiwan',
		'tz' => 'United Republic of Tanzania',
		'ua' => 'Ukraine',
		'ug' => 'Uganda',
		'um' => 'United States Minor Outlying Islands',
		'us' => 'United States',
		'uy' => 'Uruguay',
		'uz' => 'Uzbekistan',
		'va' => 'Holy See (Vatican City State)',
		'vc' => 'Saint Vincent and the Grenadines',
		've' => 'Venezuela',
		'vg' => 'British Virgin Islands',
		'vi' => 'U.S. Virgin Islands',
		'vn' => 'Viet Nam (Vietnam)',
		'vu' => 'Vanuatu',
		'wf' => 'Wallis and Futuna',
		'ws' => 'Samoa',
		'ye' => 'Yemen',
		'yt' => 'Mayotte',
		'za' => 'South Africa',
		'zm' => 'Zambia',
		'zw' => 'Zimbabwe'
	),




	// special top level domains
	// hhttp://en.wikipedia.org/wiki/Top_Level_Domain
	'lib_TLDs' => array(
		'eu' => 'European Union',
		'arpa' => '"Address and Routing Parameter Area"',
		'net' => 'network infrastructure',
		'gov' => 'U.S. government',
		'mil' => 'U.S. military',
		'edu' => 'educational establishments (primarily U.S.)',
		'museum' => 'museums (world-wide)',
		'com' => 'commercial',
		'pro' => 'professions',
		'coop' => 'cooperatives',
		'name' => 'individuals',
		'int' => 'international organisations established by treaty',
		'biz' => 'businesses',
		'aero' => 'air transport industry',
		'org' => 'non-commercial organizations',
		'info' => 'information (unrestricted use)'
	),



	// http://alis.isoc.org/langues/iso639.de.htm
	'lib_languages' => array(
		'aa' => 'Afar',
		'ab' => 'Abkhazian',
		'af' => 'Afrikaans',
		'am' => 'Amharic',
		'ar' => 'Arabic',
		'as' => 'Assamese',
		'ay' => 'Aymara',
		'az' => 'Azerbaijani',
		'ba' => 'Bashkir',
		'be' => 'Byelorussian',
		'bg' => 'Bulgarian',
		'bh' => 'Bihari',
		'bi' => 'Bislama',
		'bn' => 'Bengali; Bangla',
		'bo' => 'Tibetan',
		'br' => 'Breton',
		'ca' => 'Catalan',
		'co' => 'Corsican',
		'cs' => 'Czech',
		'cy' => 'Welsh',
		'da' => 'Danish',
		'de' => 'German',
		'dz' => 'Bhutani',
		'el' => 'Greek',
		'en' => 'English',
		'eo' => 'Esperanto',
		'es' => 'Spanish',
		'et' => 'Estonian',
		'eu' => 'Basque',
		'fa' => 'Persian',
		'fi' => 'Finnish',
		'fj' => 'Fiji',
		'fo' => 'Faroese',
		'fr' => 'French',
		'fy' => 'Frisian',
		'ga' => 'Irish',
		'gd' => 'Scots Gaelic',
		'gl' => 'Galician',
		'gn' => 'Guarani',
		'gu' => 'Gujarati',
		'ha' => 'Hausa',
		'he' => 'Hebrew',
		'hi' => 'Hindi',
		'hr' => 'Croatian',
		'hu' => 'Hungarian',
		'hy' => 'Armenian',
		'ia' => 'Interlingua',
		'id' => 'Indonesian',
		'ie' => 'Interlingue',
		'ik' => 'Inupiak',
		'is' => 'Icelandic',
		'it' => 'Italian',
		'iu' => 'Inuktitut',
		'ja' => 'Japanese',
		'jw' => 'Javanese',
		'ka' => 'Georgian',
		'kk' => 'Kazakh',
		'kl' => 'Greenlandic',
		'km' => 'Cambodian',
		'kn' => 'Kannada',
		'ko' => 'Korean',
		'ks' => 'Kashmiri',
		'ku' => 'Kurdish',
		'ky' => 'Kirghiz',
		'la' => 'Latin',
		'ln' => 'Lingala',
		'lo' => 'Laothian',
		'lt' => 'Lithuanian',
		'lv' => 'Latvian',
		'mg' => 'Malagasy',
		'mi' => 'Maori',
		'mk' => 'Macedonian',
		'ml' => 'Malayalam',
		'mn' => 'Mongolian',
		'mo' => 'Moldavian',
		'mr' => 'Marathi',
		'ms' => 'Malay',
		'mt' => 'Maltese',
		'my' => 'Burmese',
		'na' => 'Nauru',
		'ne' => 'Nepali',
		'nl' => 'Dutch',
		'no' => 'Norwegian',
		'oc' => 'Occitan',
		'om' => '(Afan) Oromo',
		'or' => 'Oriya',
		'pa' => 'Punjabi',
		'pl' => 'Polish',
		'ps' => 'Pashto, Pushto',
		'pt' => 'Portuguese',
		'qu' => 'Quechua',
		'rm' => 'Rhaeto-Romance',
		'rn' => 'Kirundi',
		'ro' => 'Romanian',
		'ru' => 'Russian',
		'rw' => 'Kinyarwanda',
		'sa' => 'Sanskrit',
		'sd' => 'Sindhi',
		'sg' => 'Sangho',
		'sh' => 'Serbo-Croatian',
		'si' => 'Sinhalese',
		'sk' => 'Slovak',
		'sl' => 'Slovenian',
		'sm' => 'Samoan',
		'sn' => 'Shona',
		'so' => 'Somali',
		'sq' => 'Albanian',
		'sr' => 'Serbian',
		'ss' => 'Siswati',
		'st' => 'Sesotho',
		'su' => 'Sundanese',
		'sv' => 'Swedish',
		'sw' => 'Swahili',
		'ta' => 'Tamil',
		'te' => 'Telugu',
		'tg' => 'Tajik',
		'th' => 'Thai',
		'ti' => 'Tigrinya',
		'tk' => 'Turkmen',
		'tl' => 'Tagalog',
		'tn' => 'Setswana',
		'to' => 'Tonga',
		'tr' => 'Turkish',
		'ts' => 'Tsonga',
		'tt' => 'Tatar',
		'tw' => 'Twi',
		'ug' => 'Uighur',
		'uk' => 'Ukrainian',
		'ur' => 'Urdu',
		'uz' => 'Uzbek',
		'vi' => 'Vietnamese',
		'vo' => 'Volapuk',
		'wo' => 'Wolof',
		'xh' => 'Xhosa',
		'yi' => 'Yiddish',
		'yo' => 'Yoruba',
		'za' => 'Zhuang',
		'zh' => 'Chinese',
		'zu' => 'Zulu'
	)
) );

?>