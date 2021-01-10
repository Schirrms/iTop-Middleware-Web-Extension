<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2020 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:ZoneType' => 'Zone opérationelle',
	'Class:ZoneType+' => 'Definit des zones opérationnelles de fonctionnement pour les éléments (Intranet, Internet...)',
	'Class:ZoneType/Attribute:name' => 'Nom de la zone',
	'Class:ZoneType/Attribute:org_id' => 'Organisation',
	'Class:ZoneType/Attribute:org_name' => 'Nom de l\'organisation',
	'Class:ZoneType/Attribute:comment' => 'Commentaire',
	'Class:ZoneType/Attribute:functional_cis_list' => 'CIs dans cette zone',
	'Class:ZoneType/Attribute:org_id_friendlyname' => 'Nom complet de l\'organisation',
	'Class:ZoneType/Attribute:org_id_obsolescence_flag' => 'Statut d\'obsolescence de l\'organisation',
	'Class:FunctionalCI/Attribute:zonetype_id' => 'Zone opérationelle',
	'Class:MiddlewareInstance/Attribute:portno' => 'N° de port',
	'Class:MiddlewareInstance/Attribute:localaccount' => 'Compte local',
	'Class:MiddlewareInstance/Attribute:localaccount+' => 'Le compte local utiliser pour exécuter l\'instance',
	'Class:MiddlewareInstance/Attribute:homecontainer' => 'Racine du conteneur',
	'Class:MiddlewareInstance/Attribute:uri' => 'URI',
	'Class:MiddlewareInstance/Attribute:url' => 'URL complète',
	'Class:WebServer/Attribute:webproxy_list' => 'Proxys Web',
	'Class:WebServer/Attribute:webproxy_list+' => '',
	'Class:WebProxy' => 'Proxy Web',
	'Class:WebProxy+' => 'Service de proxyfication pour d\'autres services Web',
	'Class:WebProxy/Attribute:webserver_id' => 'Serveur Web',
	'Class:WebProxy/Attribute:webserver_id+' => '',
	'Class:WebProxy/Attribute:webserver_name' => 'Nom du serveur Web',
	'Class:WebProxy/Attribute:webserver_name+' => '',
	'Class:WebProxy/Attribute:srcurl' => 'URL Source',
	'Class:WebProxy/Attribute:srcurl+' => 'L\'URL de connexion à ce serveur Proxy',
	'Class:WebProxy/Attribute:dsturl' => 'URL de destination',
	'Class:WebProxy/Attribute:dsturl+' => 'l\'URL hébergeant effectivement le service',
	'Class:WebProxy/Attribute:sso' => 'SSO utilisé',
	'Class:WebProxy/Attribute:sso+' => 'Type de SSO, si besoin',
	'Class:WebProxy/Attribute:mode' => 'Mode Proxy',
	'Class:WebProxy/Attribute:dsturl+' => 'Mode Proxy, si spécifique',
));
?>
