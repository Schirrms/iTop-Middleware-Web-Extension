<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2020 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:Zone' => 'Operational zone',
	'Class:Zone+' => 'Define an operational zone for the elements (Intranet, Internet...)',
	'Class:Zone/Attribute:name' => 'Zone name',
	'Class:Zone/Attribute:org_id' => 'Organization',
	'Class:Zone/Attribute:org_name' => 'Organization name',
	'Class:Zone/Attribute:comment' => 'Comment',
	'Class:Zone/Attribute:functional_cis_list' => 'CI in that zone',
	'Class:Zone/Attribute:org_id_friendlyname' => 'Organization Full Name',
	'Class:Zone/Attribute:org_id_obsolescence_flag' => 'Organization obsolescence status',
	'Class:FunctionalCI/Attribute:zone_id' => 'Operational zone',
	'Class:MiddlewareInstance/Attribute:portno' => 'Port Number',
	'Class:MiddlewareInstance/Attribute:uri' => 'URI',
	'Class:MiddlewareInstance/Attribute:url' => 'Complete URL',
	'Class:WebServer/Attribute:webproxy_list' => 'Web Proxies',
	'Class:WebServer/Attribute:webproxy_list+' => '',
	'Class:WebProxy' => 'Web Proxy',
	'Class:WebProxy+' => 'Web Server acting as a proxy for another Web application',
	'Class:WebProxy/Attribute:webserver_id' => 'Web server',
	'Class:WebProxy/Attribute:webserver_id+' => '',
	'Class:WebProxy/Attribute:webserver_name' => 'Web server name',
	'Class:WebProxy/Attribute:webserver_name+' => '',
	'Class:WebProxy/Attribute:srcurl' => 'Source URL',
	'Class:WebProxy/Attribute:srcurl+' => 'The local URL on the proxy server',
	'Class:WebProxy/Attribute:dsturl' => 'Destination URL',
	'Class:WebProxy/Attribute:dsturl+' => 'The actual URL hosting the service',
	'Class:WebProxy/Attribute:sso' => 'SSO used',
	'Class:WebProxy/Attribute:sso+' => 'Type of SSO, if any',
	'Class:WebProxy/Attribute:mode' => 'Proxy Mode',
	'Class:WebProxy/Attribute:dsturl+' => 'Proxy Mode, if specific',
));
?>
