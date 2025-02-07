<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC <contact@vinades.vn>
* @Copyright (C) 2018 VINADES.,JSC. All rights reserved
* @Language Français
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
* @Createdate Jun 21, 2010, 12:30:00 PM
*/

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'Phạm Chí Quang';
$lang_translator['createdate'] = '21/6/2010, 19:30';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. Tous droits réservés.';
$lang_translator['info'] = 'Langue française pour NukeViet 4';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'Configuration générale';
$lang_module['site_config'] = 'Configuration du site';
$lang_module['lang_site_config'] = 'Configuration selon langue: %s';
$lang_module['bots_config'] = 'Moteurs de recherche';
$lang_module['ip_version'] = 'Version IP';
$lang_module['site_domain'] = 'Nom du domaine principal du site';
$lang_module['sitename'] = 'Nom du site';
$lang_module['theme'] = 'Interface par défaut du PC';
$lang_module['mobile_theme'] = 'Interface par défaut pour téléphone portable';
$lang_module['themeadmin'] = 'Thème de l\'Administration';
$lang_module['default_module'] = 'Module par défaut à l\'Accueil';
$lang_module['description'] = 'Description du site';
$lang_module['rewrite'] = 'Activer rewrite';
$lang_module['rewrite_optional'] = 'Filtrer les accents sur url';
$lang_module['rewrite_op_mod'] = 'Enlever le nom du module sur url';
$lang_module['disable_content'] = 'Notification de fermeture du site';
$lang_module['submit'] = 'Enregistrer cette configuration';
$lang_module['err_writable'] = 'Erreur: impossible d\'entregister le fichier: %s merci de vérifier les permissions (chmod) de ce fichier.';
$lang_module['err_supports_rewrite'] = 'Erreur: le serveur ne supporte pas le module rewrite';
$lang_module['err_save_sysconfig'] = 'Les modifications ont été enregistrées, mais le système est pas configuré pour enregistrer le fichier. Écrivons les autorisations pour le fichier% s puis refaisons';
$lang_module['security'] = 'Configuration de la sécurité';
$lang_module['flood_blocker'] = 'Capacité contre flood';
$lang_module['is_flood_blocker'] = 'Active la capacité contre flood';
$lang_module['max_requests_60'] = 'Le nombre de requests maximum pendant 1 minutes';
$lang_module['max_requests_300'] = 'Le nombre de requests maximum pendant 5 minutes';
$lang_module['max_requests_error'] = 'Erreur: Veuillez entrer un numéro de requête supérieur à 0';
$lang_module['nv_anti_iframe'] = 'Contre IFRAME';
$lang_module['nv_anti_agent'] = 'Vérifier et bloquer les ordinateurs qui n\'ont pas d\'agent';
$lang_module['nv_allowed_html_tags'] = 'Code HTML est accepté par le système';
$lang_module['nv_debug'] = 'Mode développeur';
$lang_module['nv_debug_help'] = 'Si cette option est activée, le système affichera des erreurs pour aider les développeurs à vérifier facilement le processus de programmation. Si votre site Web fonctionne dans un environnement réel, <strong>désactivez</strong> cette option.';
$lang_module['domains_restrict'] = 'Limitez les noms de domaine aux balises HTML dangereuses (iframe, object, embed...)';
$lang_module['domains_whitelist'] = 'Nom de domaine approuvé (un domaine par ligne). S\'il est activé, limitez le nom de domaine dans la section ci-dessus, le système autorisera l\'utilisation des ressources et des liens de ces domaines';
$lang_module['captcha_type'] = 'Type de captcha';
$lang_module['captcha_type_0'] = 'Défaut captcha';
$lang_module['captcha_type_1'] = 'Bon php captcha';
$lang_module['captcha_type_2'] = 'reCAPTCHA';
$lang_module['captcha_type_3'] = 'reCAPTCHA v3';
$lang_module['captcha'] = 'Configuration de captcha';
$lang_module['captcha_0'] = 'Masqué';
$lang_module['captcha_1'] = 'Lors de l\'identification de l\'admin';
$lang_module['captcha_2'] = 'Lors de l\'identification d\'utilisateur';
$lang_module['captcha_3'] = 'Lors de l\'inscription d\'utilisateur';
$lang_module['captcha_4'] = 'Lors de l\'identification d\'utilisateur ou à l\'inscription';
$lang_module['captcha_5'] = 'Lors de l\'identification de l\'admin ou de l\'utilisateur';
$lang_module['captcha_6'] = 'Lors de l\'identification de l\'admin ou l\'inscription de l\'utilisateur';
$lang_module['captcha_7'] = 'Toujours';
$lang_module['captcha_num'] = 'Le nombre de caractères de captcha';
$lang_module['captcha_size'] = 'Dimension du captcha';
$lang_module['recaptcha_sitekey'] = 'Clé du site';
$lang_module['recaptcha_secretkey'] = 'Clef secrète';
$lang_module['recaptcha_type'] = 'Exemple confirmé';
$lang_module['recaptcha_type_image'] = 'Images (recommandé)';
$lang_module['recaptcha_type_audio'] = 'son';
$lang_module['recaptcha_guide'] = 'Cliquez ici pour obtenir la clé des paramètres du site clé et secret.';
$lang_module['mail_sender_name'] = 'Nom de l\'expéditeur';
$lang_module['mail_sender_name_default'] = 'Laissant vide, le système prendra la valeur spécifiée (le cas échéant) ou le nom du site';
$lang_module['mail_sender_email'] = 'Adresse e-mail de l\'expéditeur';
$lang_module['mail_sender_email_default'] = 'Laissant vide, le système prendra à partir de la valeur spécifiée (le cas échéant), le courrier électronique du système ou le site Web en fonction de la méthode d\'envoi du courrier. Remarque: cette valeur peut ne pas fonctionner selon le serveur d\'envoi ou de réception';
$lang_module['mail_reply_name'] = 'Nom de la réponse';
$lang_module['mail_reply_name_default'] = 'Si aucun paramètre n\'est transmis au moment de l\'envoi du courrier, le système prendra cette valeur. Laissant vide, le système prendra du nom du site';
$lang_module['mail_reply_email'] = 'Courriel de réponse';
$lang_module['mail_reply_email_default'] = 'Si aucun paramètre n\'est transmis au moment de l\'envoi du courrier, le système prendra cette valeur. Laissant vide, le système prendra à partir du courrier électronique du site';
$lang_module['mail_force_sender'] = 'Expéditeur forcé. Utilisez pour forcer toutes les informations sur l\'expéditeur à être valides selon la configuration ici au lieu des informations dans chaque e-mail envoyé';
$lang_module['mail_force_reply'] = 'Réponse forcée. Utilisez pour forcer toutes les informations de réponse à être valides selon la configuration ici au lieu des informations dans chaque e-mail envoyé';
$lang_module['ftp_config'] = 'Configuration de FTP';
$lang_module['smtp_config'] = 'Configuration de la remise des e-mails';
$lang_module['server'] = 'Serveur ou Lien';
$lang_module['port'] = 'Porte';
$lang_module['username'] = 'Identifiant';
$lang_module['password'] = 'Mot de passe';
$lang_module['ftp_path'] = 'Chemin d\'accès';
$lang_module['mail_config'] = 'Méthode d\'envoie d\'e-mail';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Infos du serveur';
$lang_module['incoming_ssl'] = 'Connexion sécurisée';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Oui';
$lang_module['verify_peer_ssl_no'] = 'Non';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Ordinateur central SMTP) Courrier envoyé';
$lang_module['outgoing_port'] = 'Outgoing port(SMTP)';
$lang_module['smtp_username'] = 'Infos du compte';
$lang_module['smtp_login'] = 'Nom d\'utilisateur';
$lang_module['smtp_pass'] = 'Mot de passe';
$lang_module['smtp_error_openssl'] = 'Erreur: Voitre serveur ne supporte pas d\'envoyer les e mails par ssl';
$lang_module['smtp_test'] = 'Vérifiez la configuration';
$lang_module['smtp_test_subject'] = 'Test email';
$lang_module['smtp_test_message'] = 'Ceci est un courrier électronique de test pour vérifier la configuration du courrier. Supprimez-le simplement!';
$lang_module['smtp_test_success'] = 'Envoyer un email avec succès';
$lang_module['smtp_test_fail'] = 'Email échoué';
$lang_module['smtp_test_note'] = 'Remarque: Cliquez sur Enregistrer la configuration s\'il y a une modification dans le formulaire ci-dessus avant de vérifier la configuration.';
$lang_module['notify_email_error'] = 'Créer des notifications système en cas d\'échec de l\'e-mail';
$lang_module['bot_name'] = 'Moteurs de recherche';
$lang_module['bot_agent'] = 'Agent du serveur';
$lang_module['bot_ips'] = 'IP du serveur';
$lang_module['bot_allowed'] = 'Autoriser';
$lang_module['site_keywords'] = 'Mots clés pour les moteurs de recherche';
$lang_module['site_logo'] = 'Nom du fichier logo';
$lang_module['site_banner'] = 'Nom du fichier bannière';
$lang_module['site_favicon'] = 'Nom du fichier favicon';
$lang_module['site_email'] = 'E-mail du site';
$lang_module['error_set_logs'] = 'Sauvegarder l\'erreur du système';
$lang_module['error_send_email'] = 'E-mail recevant les notifications d\'erreurs';
$lang_module['lang_multi'] = 'Activer le multi-langage';
$lang_module['lang_geo'] = 'Activer la définition de langue selon pays';
$lang_module['lang_geo_config'] = 'Configuration de la fonctionnalité de définir la langue selon pays';
$lang_module['site_lang'] = 'Langue par défaut';
$lang_module['site_timezone'] = 'Fuseau horaire';
$lang_module['current_time'] = 'Heure: %s';
$lang_module['date_pattern'] = 'Format de la date';
$lang_module['time_pattern'] = 'Type d\'affichage: Heure Minute';
$lang_module['gzip_method'] = 'Activer gzip';
$lang_module['proxy_blocker'] = 'Contrôler et bloquer les ordiateurs utilisant le proxy';
$lang_module['proxy_blocker_0'] = 'Sans contrôle';
$lang_module['proxy_blocker_1'] = 'Contrôle léger';
$lang_module['proxy_blocker_2'] = 'Contrôle moyen';
$lang_module['proxy_blocker_3'] = 'Contrôle strict';
$lang_module['str_referer_blocker'] = 'Activer le contrôle des liens vers le site depuis l\'exterieur';
$lang_module['my_domains'] = 'Les domaines du site';
$lang_module['searchEngineUniqueID'] = 'ID de moteur de recherche Google<br />(forma 000329275761967753447:sr7yxqgv294 , <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">voir détails</a>)';
$lang_module['variables'] = 'Configuration du cookie session';
$lang_module['cookie_prefix'] = 'Préfixe de cookie';
$lang_module['session_prefix'] = 'Préfixe de session';
$lang_module['live_cookie_time'] = 'Le temps de vie du cookie';
$lang_module['live_session_time'] = 'Le temps de vie de la session';
$lang_module['live_session_time0'] = '=0 Vivre jusqu\'à ce que le navigateur soit fermé';
$lang_module['cookie_secure'] = 'cookie secure';
$lang_module['cookie_httponly'] = 'cookie http seul';
$lang_module['is_user_forum'] = 'Confier la gestion d\'utilisateurs au forum';
$lang_module['banip'] = 'IPs interdits';
$lang_module['banip_ip'] = 'IP';
$lang_module['banip_timeban'] = 'Commencer';
$lang_module['banip_timeendban'] = 'Terminer';
$lang_module['banip_funcs'] = 'Fonctions';
$lang_module['banip_checkall'] = 'Sélectionner tout';
$lang_module['banip_uncheckall'] = 'Desélectionner tout';
$lang_module['banip_title_add'] = 'Ajouter l\'adresse IP interdite';
$lang_module['banip_title_edit'] = 'Modifier les adresses IP interdites';
$lang_module['banip_address'] = 'Adresse IP';
$lang_module['banip_begintime'] = 'Commencer';
$lang_module['banip_endtime'] = 'Terminer';
$lang_module['banip_notice'] = 'Note';
$lang_module['banip_confirm'] = 'Confirmer';
$lang_module['banip_mask_select'] = 'Sélectionnez';
$lang_module['banip_area'] = 'Zone interdite';
$lang_module['banip_nolimit'] = 'Perpétuel';
$lang_module['banip_area_select'] = 'Séletionnez la zone';
$lang_module['banip_noarea'] = 'pas encore déterminé';
$lang_module['banip_del_success'] = 'Suppression avec succès!';
$lang_module['banip_area_front'] = 'Site';
$lang_module['banip_area_admin'] = 'Administration';
$lang_module['banip_area_both'] = 'Site et Administration';
$lang_module['banip_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer cette IP de la liste des IPs interdits?';
$lang_module['banip_mask'] = 'Masque IP';
$lang_module['banip_edit'] = 'Éditer';
$lang_module['banip_delete'] = 'Supprimer';
$lang_module['banip_error_ip'] = 'Saisissez IP à interdire';
$lang_module['banip_error_area'] = 'Merci de sélectionner la zone';
$lang_module['banip_error_validip'] = 'Erreur: Adresse IP invalide';
$lang_module['banip_error_write'] = 'Erreur: Vous n\'avez pas permis le système de pouvoir écrire les fichiers,faites chmod le dossier  <strong>%s</strong> en mode 0777 ou "Change permission" pour que le système puisse écrire les fichiers, sinon créez le fichier banip.php avec un contenu comme ce qui est au dessous et le mettez dans le dossier <strong>%s</strong>';
$lang_module['nv_admin_add'] = 'Ajouter une tâche';
$lang_module['nv_admin_edit'] = 'Modifier la tâche';
$lang_module['nv_admin_del'] = 'Supprimer la tâche';
$lang_module['cron_name_empty'] = 'Vous n\'avez pas encore donné le nom de la tâche';
$lang_module['file_not_exist'] = 'Fichier inexistant';
$lang_module['func_name_invalid'] = 'Vous n\'avez pas déclaré la fonction ou le nom de fonction est invalide';
$lang_module['func_name_not_exist'] = 'Cette fonction n\'existe pas';
$lang_module['nv_admin_add_title'] = 'Pour ajouter une tâche, remplissez les champs ci-dessous';
$lang_module['nv_admin_edit_title'] = 'Pour modifier la tâche, remplissez les champs ci-dessous';
$lang_module['cron_name'] = 'Nom de la tâche';
$lang_module['file_none'] = 'Pas d\'accès';
$lang_module['run_file'] = 'Accès au fichier d\'exécution';
$lang_module['run_file_info'] = 'Fichier d\'exécution est un des fichiers dans le répertoire &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Accès à la fonction';
$lang_module['run_func_info'] = 'Fonction doit être commencée par &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Paramètre';
$lang_module['params_info'] = 'Séparer par la virgule';
$lang_module['interval'] = 'Répêter la tâche après';
$lang_module['interval_info'] = 'Si vous entrez &ldquo;<strong>0</strong>&rdquo;, la tâche est faite une seule fois';
$lang_module['start_time'] = 'Commencer à';
$lang_module['min'] = 'minutes';
$lang_module['hour'] = 'heures';
$lang_module['day'] = 'jours';
$lang_module['month'] = 'mois';
$lang_module['year'] = 'an';
$lang_module['is_del'] = 'Supprimer après avoir terminé';
$lang_module['isdel'] = 'Supprimer';
$lang_module['notdel'] = 'Non';
$lang_module['is_sys'] = 'Tâche créée par';
$lang_module['system'] = 'Système';
$lang_module['client'] = 'Administrateur';
$lang_module['act'] = 'Etat';
$lang_module['act0'] = 'Inactif';
$lang_module['act1'] = 'Actif';
$lang_module['last_time'] = 'Dernière exécution';
$lang_module['next_time'] = 'Prochaine exécution';
$lang_module['last_time0'] = 'Jamais exécuté';
$lang_module['last_result'] = 'Résultat de la dernière exécution';
$lang_module['last_result_empty'] = 'non déterminé';
$lang_module['last_result0'] = 'Mauvais';
$lang_module['last_result1'] = 'Terminé';
$lang_module['closed_site'] = 'Mode de maintenance';
$lang_module['closed_site_0'] = 'Mode normal';
$lang_module['closed_site_1'] = 'Fermeture du site, seulement l\'administrateur suprême peut se connecter';
$lang_module['closed_site_2'] = 'Fermeture du site - les administrateurs générales peuvent se connecter';
$lang_module['closed_site_3'] = 'Fermeture du site - les administrateur peuvent se connecter';
$lang_module['ssl_https'] = 'Activez le mode d\'utilisation SSL';
$lang_module['ssl_https_module'] = 'Les modules activés avec SSL';
$lang_module['ssl_https_0'] = 'Eteindre SSL';
$lang_module['ssl_https_1'] = 'Activer le site global';
$lang_module['ssl_https_2'] = 'Activer le zone d\'admin';
$lang_module['note_ssl'] = 'Etes-vous certain que votre site soutien https? Sinon vous ne pouvez pas entrer dans le site après la sauvegarde.';
$lang_module['timezoneAuto'] = 'Selon l\'ordinateur du visiteur';
$lang_module['timezoneByCountry'] = 'Selon le pays du visiteur';
$lang_module['allow_switch_mobi_des'] = 'Échange possible de thème de mobile et de bureau';
$lang_module['allow_theme_type'] = 'Échange le type de thème';
$lang_module['ftp_auto_detect_root'] = 'Détection automatique';
$lang_module['ftp_error_full'] = 'Rentrer complètement les infos pour détecter automatiquement Remote path';
$lang_module['ftp_error_detect_root'] = 'Il est impossible de déterminer, merci de vérifier l\'identifiant et le mot de passe';
$lang_module['ftp_error_support'] = 'Votre hébergeur a bloqué FTP, veuillez leur contacter pour l\'activer';
$lang_module['static_url'] = 'Hosting de fichiers statiques';
$lang_module['cdn_url'] = 'Hosting CDN pour javascript, css';
$lang_module['remote_api_access'] = 'Activer l\'API à distance';
$lang_module['remote_api_access_help'] = 'La désactivation de tous les accès API de l\'extérieur sera bloquée. Les API internes sont toujours utilisées normalement';
$lang_module['remote_api_log'] = 'Activer la journalisation d\'API à distance';
$lang_module['plugin'] = 'Configuration du Plugin';
$lang_module['plugin_info'] = 'Plugin doit être un fichier php se situé dans le dossier &ldquo;<strong>includes/plugin/</strong>&rdquo;. Ces Plugin exécutent toujours avec le système en cas d\'activation';
$lang_module['plugin_file'] = 'Fichier Plugin';
$lang_module['plugin_area'] = 'Aréa';
$lang_module['plugin_area_1'] = 'Avant la connexion CSDL';
$lang_module['plugin_area_2'] = 'Avant l\'appel des modules (panneau d\'administration et zone utilisateur)';
$lang_module['plugin_area_3'] = 'Avant l\'envoie des données du site au navigateur';
$lang_module['plugin_area_4'] = 'Après l\'appel des modules';
$lang_module['plugin_area_5'] = 'Avant l\'appel des modules (uniquement zone utilisateur)';
$lang_module['plugin_number'] = 'Numero';
$lang_module['plugin_func'] = 'Fonctionnement';
$lang_module['plugin_add'] = 'Ajouter plugin';
$lang_module['plugin_file_delete'] = 'Supprimer du système';
$lang_module['notification_config'] = 'Configuration du fonctionnement d\'annoncer';
$lang_module['notification_active'] = 'Lever les annonces en cas de nouvelles activations';
$lang_module['notification_autodel'] = 'Supprimer automatiquement après un temps';
$lang_module['notification_autodel_note'] = 'Remplir <strong>0</strong> si vous ne voulez pas supprimer automatiquement';
$lang_module['notification_day'] = 'jour';
$lang_module['is_login_blocker'] = 'Activer journal bloc fonction incorrectement plusieurs fois';
$lang_module['login_number_tracking'] = 'Mauvaises connexions piste maximale période';
$lang_module['login_time_tracking'] = 'Time Tracking';
$lang_module['login_time_ban'] = 'Forclose Connexion';
$lang_module['two_step_verification'] = 'Nécessite deux étapes journal d\'authentification';
$lang_module['two_step_verification0'] = 'Ne demandez pas';
$lang_module['two_step_verification1'] = 'Admin Area';
$lang_module['two_step_verification2'] = 'Espace extérieur du site';
$lang_module['two_step_verification3'] = 'Toutes les zones';
$lang_module['two_step_verification_note'] = 'Remarque: Cette configuration s\'applique à tous les comptes des groupes, si vous devez configurer chaque groupe individuellement, sélectionnez cette valeur en tant que <strong>%s</strong> puis modifiez le <a href="%s">groupe</a> , puis sélectionnez le champ de déclenchement d\'authentification en deux étapes requis comme vous le souhaitez';
$lang_module['site_phone'] = 'Nom du fichier Téléphone';
$lang_module['noflood_ip_add'] = 'Ajouter une adresse IP pour ignorer le contrôle d\'inondation';
$lang_module['noflood_ip_edit'] = 'Correction du contournement de l\'inondation IP';
$lang_module['noflood_ip_list'] = 'L\'IP contourne le contrôle d\'inondation';
$lang_module['cron_interval_type'] = 'Répéter le type (si disponible)';
$lang_module['cron_interval_type0'] = 'Après l\'heure de lancement dans la base de données';
$lang_module['cron_interval_type1'] = 'Après l\'heure de lancement réelle';
$lang_module['cors'] = 'Cross-Site config';
$lang_module['cors_site_restrict'] = 'Protégez l\'espace utilisateur';
$lang_module['cors_site_restrict_help'] = 'Activez cette option pour bloquer toutes les demandes de publication externes dans la zone utilisateur';
$lang_module['cors_site_valid_domains'] = 'Domaine valide pour la zone utilisateur';
$lang_module['cors_site_valid_ips'] = 'IP valide pour la zone utilisateur';
$lang_module['cors_admin_restrict'] = 'Protéger la zone d\'administration';
$lang_module['cors_admin_restrict_help'] = 'Activez cette option pour bloquer toutes les demandes de publication externes dans la zone d\'administration';
$lang_module['cors_admin_valid_domains'] = 'Domaine valide pour la zone d\'administration';
$lang_module['cors_admin_valid_ips'] = 'IP valide pour la zone d\'administration';
$lang_module['cors_valid_domains_help'] = 'Entrez un domaine par ligne (veuillez entrer le formulaire complet http://votredomaine.com), les demandes de publication de ces domaines sont autorisées';
$lang_module['cors_valid_ips_help'] = 'Entrez une adresse IP par ligne, la demande de publication de ces adresses IP est autorisée';
$lang_module['allow_null_origin'] = 'Autoriser POST avec une origine NULL';
$lang_module['ip_allow_null_origin'] = 'Les adresses IP sont autorisées à POST avec une origine NULL';
$lang_module['ip_allow_null_origin_help'] = 'Entrez une adresse IP par ligne, si ce champ est laissé vide, toutes les adresses IP sont autorisées';
$lang_module['admin_2step_opt'] = 'Les méthodes de vérification en deux étapes sont autorisées dans l\'administration';
$lang_module['admin_2step_default'] = 'La méthode de vérification en deux étapes par défaut dans l\'administration';
$lang_module['admin_2step_appconfig'] = 'Configurez l\'application ici';
