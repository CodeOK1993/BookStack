<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Iestatījumi',
    'settings_save' => 'Saglabāt iestatījumus',
    'settings_save_success' => 'Iestatījumi saglabāti',

    // App Settings
    'app_customization' => 'Pielāgojumi',
    'app_features_security' => 'Funkcijas un drošība',
    'app_name' => 'Lietotnes nosaukums',
    'app_name_desc' => 'Šis vārds tiks rādīts navigācijas joslā un sistēmas sūtītajis e-pastos.',
    'app_name_header' => 'Rādīt vārdu navigācijas joslā',
    'app_public_access' => 'Publiska piekļuve',
    'app_public_access_desc' => 'Šīs opcijas ieslēgšana ļaus neautorizētiem apmeklētājiem piekļūt jūsu BookStack saturam.',
    'app_public_access_desc_guest' => 'Publisku apmeklētāju piekļuvi var kontrolēt "Guest" (Viesa) lietotāja uzstādījumos.',
    'app_public_access_toggle' => 'Atļaut publisku piekļuvi',
    'app_public_viewing' => 'Atļaut publisku piekļuvi?',
    'app_secure_images' => 'Paaugstinātas drošības attēlu ielāde',
    'app_secure_images_toggle' => 'Ieslēgt paaugstinātas drošības attēlu ielādi',
    'app_secure_images_desc' => 'Ātrdarbības nolūkos attēli ir publiski pieejami. Šī opcija pievieno nejaušu grūti uzminamu teksta virkni attēlu adresēs. Pārliecinieties kā ir izslēgta direktoriju pārlūkošana, lai nepieļautu vieglu piekļuvi šiem failiem.',
    'app_editor' => 'Lapas redaktors',
    'app_editor_desc' => 'Izvēlēties kurš redaktors tiks izmatots lapu rediģēšanai visiem lietotājiem.',
    'app_custom_html' => 'Pielāgot HTML head saturu',
    'app_custom_html_desc' => 'Šis saturs tiks pievienots <head> sadaļas apakšā visām lapām. Tas ir noderīgi papildinot CSS stilus vai pievienojot analītikas kodu.',
    'app_custom_html_disabled_notice' => 'Pielāgots HTML head saturs ir izslēgts šajā uzstādījumu lapā, lai nodrošinātu, ka iespējams atcelt jebkādas kritiskas izmaiņas.',
    'app_logo' => 'Lietotnes logo',
    'app_logo_desc' => 'Attēlam jābūt 43px augstam. <br>Lielāki attēli tiks samazināti.',
    'app_primary_color' => 'Galvenā aplikācijas krāsa',
    'app_primary_color_desc' => 'Uzstāda primāro krāsu aplikācijai, ieskaitot banneri, pogas un saites.',
    'app_homepage' => 'Aplikācijas sākumlapa',
    'app_homepage_desc' => 'Izvēlēties skatu, ko rādīt sākumlapā noklusētā skata vietā. Lapas piekļuves tiesības izvēlētajai lapai netiks ņemtas vērā.',
    'app_homepage_select' => 'Izvēlēties lapu',
    'app_footer_links' => 'Kājenes saites',
    'app_footer_links_desc' => 'Pievienot saites, ko attēlot lapas kājenē. Tās tiks attēlotas lielākās daļas lapu apakšā, ieskaitot tās, kas pieejamas bez reģistrācijas. Jūs varat izmantot nosaukumu "trans::<key>", lai izmantotu sistēmā definētus tulkojumus. Piemēram, "trans::common.privacy_policy" tiks aizvietots ar tulkoto tekstu "Privātuma politika" un "trans::common.terms_of_service" kļūs par "Lietošanas noteikumi".',
    'app_footer_links_label' => 'Saites nosaukums',
    'app_footer_links_url' => 'Saites URL',
    'app_footer_links_add' => 'Pievienot kājenes saiti',
    'app_disable_comments' => 'Izslēgt komentārus',
    'app_disable_comments_toggle' => 'Izslēgt komentārus',
    'app_disable_comments_desc' => 'Atslēdz komentārus visās aplikācijas lapās.<br> Jau eksistējoši komentāri netiks attēloti.',

    // Color settings
    'content_colors' => 'Satura krāsas',
    'content_colors_desc' => 'Norādīt krāsas visiem lapas hierarhijas elementiem. Lasāmības labad ieteicams izvēlēties krāsas ar līdzīgu spilgtumu kā noklusētajām.',
    'bookshelf_color' => 'Plaukta krāsa',
    'book_color' => 'Grāmatas krāsa',
    'chapter_color' => 'Nodaļas krāsa',
    'page_color' => 'Lapas krāsa',
    'page_draft_color' => 'Lapas uzmetuma krāsa',

    // Registration Settings
    'reg_settings' => 'Reģistrācija',
    'reg_enable' => 'Iespējot reģistrāciju',
    'reg_enable_toggle' => 'Iespējot reģistrāciju',
    'reg_enable_desc' => 'Kad reģistrācija ir ieslēgta, lietotāji varēs paši reģistrēties kā aplikācijas lietotāji. Pēc reģistrācijas tiem tiks piešķirta noklusētā lietotāja loma.',
    'reg_default_role' => 'Noklusētā lietotāja loma pēc reģistrācijas',
    'reg_enable_external_warning' => 'Šis uzstādījums tiek ignorēts kamēr tiek izmantota ārēja LDAP vai SAML autentifikācija. Tiks izveidoti lietotāju konti neeksistējošiem leitotājiem, ja autentifikācija pret ārējo sistēmu būs veiksmīga.',
    'reg_email_confirmation' => 'E-pasta apstiprinājums',
    'reg_email_confirmation_toggle' => 'Pieprasīt epasta apstiprināšanu',
    'reg_confirm_email_desc' => 'Ja ieslēgts domēnu ierobežojums, tad būs nepieciešama epasta apstiprināšana un šis uzstādījums tiks ignorēts.',
    'reg_confirm_restrict_domain' => 'Domēnu ierobežojums',
    'reg_confirm_restrict_domain_desc' => 'Ievadiet ar komatiem atdalītu sarakstu ar epasta domēniem, kam jūs gribētu atļaut reģistrāciju. Lietotājiem tiks nosūtīts epasts, lai apstiprinātu tā adresi pirms tiks ļauts darboties ar aplikāciju. <br> Ņemiet vērā, ka lietotāji varēs nomainīt savu epasta adresi pēc veiksmīgas reģistrācijas.',
    'reg_confirm_restrict_domain_placeholder' => 'Nav ierobežojumu',

    // Maintenance settings
    'maint' => 'Apkope',
    'maint_image_cleanup' => 'Tīrīt neizmantotās bildes',
    'maint_image_cleanup_desc' => 'Pārbauda lapu un lapu versiju saturu, lai noteiktu, kuri attēli pašlaik tiek izmantoti, un kuri nav nepieciešami. Pārliecinieties, ka ir veikta pilna datubāzes un attēlu rezerves kopija pirms šīs darbības.',
    'maint_delete_images_only_in_revisions' => 'Dzēst arī attēlus, kas izmantoti tikai vecās lapu satura versijās',
    'maint_image_cleanup_run' => 'Veikt tīrīšanu',
    'maint_image_cleanup_warning' => ':count iespējami neizmantoti attēli atrasti. Vai tiešām vēlaties izdzēst šos attēlus?',
    'maint_image_cleanup_success' => ':count iespējami neizmantoti attēli atrasti un izdzēsti!',
    'maint_image_cleanup_nothing_found' => 'Nav atrasti neizmantoti attēli, nekas netika izdzēsts!',
    'maint_send_test_email' => 'Nosūtīt testa epastu',
    'maint_send_test_email_desc' => 'Nosūtīt testa epastu uz jūsu profilā norādīto epasta adresi.',
    'maint_send_test_email_run' => 'Nosūtīt testa epastu',
    'maint_send_test_email_success' => 'Epasts nosūtīts uz :address',
    'maint_send_test_email_mail_subject' => 'Testa epasts',
    'maint_send_test_email_mail_greeting' => 'Izskatās, ka epasta piegāde strādā!',
    'maint_send_test_email_mail_text' => 'Apsveicam! Tā kā jūs saņēmāt šo epasta paziņojumu, jūsu epasta uzstādījumi šķiet pareizi.',
    'maint_recycle_bin_desc' => 'Dzēstie plaukti, grāmatas, nodaļas un lapas ir pārceltas uz miskasti, lai tos varētu atjaunot vai izdzēst pilnībā. Vecākas vienības miskastē var tikt automātiski dzēstas pēc kāda laika atkarībā no sistēmas uzstādījumiem.',
    'maint_recycle_bin_open' => 'Atvērt miskasti',

    // Recycle Bin
    'recycle_bin' => 'Miskaste',
    'recycle_bin_desc' => 'Te jūs varat atjaunot dzēstās vienības vai arī izdzēst tās no sistēmas pilnībā. Šis saraksts nav filtrēts atšķirībā no līdzīgiem darbību sarakstiem sistēmā, kur ir piemēroti piekļuves tiesību filtri.',
    'recycle_bin_deleted_item' => 'Dzēsta vienība',
    'recycle_bin_deleted_parent' => 'Augstāks līmenis',
    'recycle_bin_deleted_by' => 'Izdzēsa',
    'recycle_bin_deleted_at' => 'Dzēšanas laiks',
    'recycle_bin_permanently_delete' => 'Neatgriezeniski izdzēst',
    'recycle_bin_restore' => 'Atjaunot',
    'recycle_bin_contents_empty' => 'Miskaste ir tukša',
    'recycle_bin_empty' => 'Iztīrīt miskasti',
    'recycle_bin_empty_confirm' => 'Šī darbība pilnībā dzēsīs visas vienības miskastē, ieskaitot saturu, kas ievietots katrā no šīm vienībām. Vai tiešām vēlaties dzēst visu miskastes saturu?',
    'recycle_bin_destroy_confirm' => 'Šī darbība pilnībā izdzēsis šo vienību kopā ar tai pakārtotajiem elementiem no sistēmas, un jūs nevarēsiet šo saturu atjaunot. Vai tiešām vēlaties pilnībā izdzēst šo vienību?',
    'recycle_bin_destroy_list' => 'Dzēšamās vienības',
    'recycle_bin_restore_list' => 'Atjaunojamās vienības',
    'recycle_bin_restore_confirm' => 'Šī darbība atjaunos dzēsto vienību, tai skaitā visus tai pakārtotos elementus, uz tās sākotnējo atrašanās vietu. Ja sākotnējā atrašanās vieta ir izdzēsta un atrodas miskastē, būs nepieciešams atjaunot arī to.',
    'recycle_bin_restore_deleted_parent' => 'Šo elementu saturošā vienība arī ir dzēsta. Tas paliks dzēsts līdz šī saturošā vienība arī ir atjaunota.',
    'recycle_bin_restore_parent' => 'Atjaunot augstāku līmeni',
    'recycle_bin_destroy_notification' => 'Dzēstas kopā :count vienības no miskastes.',
    'recycle_bin_restore_notification' => 'Atjaunotas kopā :count vienības no miskastes.',

    // Audit Log
    'audit' => 'Auditācijas pieraksti',
    'audit_desc' => 'Šie auditācijas pieraksti attēlo sarakstu ar sistēmā reģistrētajām aktivitātēm. Šis saraksts nav filtrēts atšķirībā no līdzīgiem aktivitāšu sarakstiem sistēmā, kur ir piemēroti atļauto darbību filtri.',
    'audit_event_filter' => 'Notikumu filtrs',
    'audit_event_filter_no_filter' => 'Bez filtra',
    'audit_deleted_item' => 'Dzēsta vienība',
    'audit_deleted_item_name' => 'Vārds: :name',
    'audit_table_user' => 'Lietotājs',
    'audit_table_event' => 'Notikums',
    'audit_table_related' => 'Saistīta vienība vai detaļa',
    'audit_table_ip' => 'IP adrese',
    'audit_table_date' => 'Notikuma datums',
    'audit_date_from' => 'Datums no',
    'audit_date_to' => 'Datums līdz',

    // Role Settings
    'roles' => 'Grupas',
    'role_user_roles' => 'Lietotāju grupas',
    'role_create' => 'Izveidot jaunu grupu',
    'role_create_success' => 'Grupa veiksmīgi izveidota',
    'role_delete' => 'Dzēst grupu',
    'role_delete_confirm' => 'Loma \':roleName\' tiks dzēsta.',
    'role_delete_users_assigned' => 'Šajā grupā ir pievienoti :userCount lietotāji. Ja vēlaties pārvietot lietotājus no šīs grupas, tad izvēlaties kādu no zemāk redzamajām grupām.',
    'role_delete_no_migration' => "Nepārvietot lietotājus",
    'role_delete_sure' => 'Vai tiešām vēlaties dzēst grupu?',
    'role_delete_success' => 'Grupa veiksmīgi dzēsta',
    'role_edit' => 'Rediģēt grupu',
    'role_details' => 'Informācija par grupu',
    'role_name' => 'Grupas nosaukums',
    'role_desc' => 'Īss grupas apaksts',
    'role_mfa_enforced' => 'Nepieciešama vairākfaktoru autentifikācija',
    'role_external_auth_id' => 'Ārējais autentifikācijas ID',
    'role_system' => 'Sistēmas atļaujas',
    'role_manage_users' => 'Pārvaldīt lietotājus',
    'role_manage_roles' => 'Pārvaldīt grupas un grupu atļaujas',
    'role_manage_entity_permissions' => 'Pārvaldīt visu grāmatu, nodaļu un lapu atļaujas',
    'role_manage_own_entity_permissions' => 'Pārvaldīt atļaujas savām grāmatām, nodaļām un lapām',
    'role_manage_page_templates' => 'Pārvaldīt lapas veidnes',
    'role_access_api' => 'Piekļūt sistēmas API',
    'role_manage_settings' => 'Pārvaldīt iestatījumus',
    'role_export_content' => 'Eksportēt saturu',
    'role_asset' => 'Resursa piekļuves tiesības',
    'roles_system_warning' => 'Jebkuras no trīs augstāk redzamajām atļaujām dod iespēju lietotājam mainīt savas un citu lietotāju sistēmas atļaujas. Pievieno šīs grupu atļaujas tikai tiem lietotājiem, kuriem uzticies.',
    'role_asset_desc' => 'Šīs piekļuves tiesības kontrolē noklusēto piekļuvi sistēmas resursiem. Grāmatām, nodaļām un lapām norādītās tiesības būs pārākas par šīm.',
    'role_asset_admins' => 'Administratoriem automātiski ir piekļuve visam saturam, bet šie uzstādījumi var noslēpt vai parādīt lietotāja saskarnes iespējas.',
    'role_all' => 'Visi',
    'role_own' => 'Savi',
    'role_controlled_by_asset' => 'Kontrolē resurss, uz ko tie ir augšupielādēti',
    'role_save' => 'Saglabāt grupu',
    'role_update_success' => 'Grupa veiksmīgi atjaunināta',
    'role_users' => 'Lietotāji šajā grupā',
    'role_users_none' => 'Pagaidām neviens lietotājs nav pievienots šai grupai',

    // Users
    'users' => 'Lietotāji',
    'user_profile' => 'Lietotāja profils',
    'users_add_new' => 'Pievienot jaunu lietotāju',
    'users_search' => 'Meklēt lietotājus',
    'users_latest_activity' => 'Pēdējās aktivitātes',
    'users_details' => 'Lietotāja informācija',
    'users_details_desc' => 'Uzstādīt attēlojamo vārdu un epast adresi šim lietotājam. Epasta adresi varēs izmantot, lai piekļūtu aplikācijai.',
    'users_details_desc_no_email' => 'Uzstādiet attēlojamu vārdu šim lietotājam, lai citi varētu viņu atpazīt.',
    'users_role' => 'Lietotāju grupas',
    'users_role_desc' => 'Izvēlēties kurām grupām pievienot lietotāju. Ja lietotājs ir pievienots vairākām grupām, tad lietotājam būs pieejamas visu grupu atļaujas.',
    'users_password' => 'Lietotāja parole',
    'users_password_desc' => 'Uzstādiet paroli, ar ko piekļūt aplikācijai. Tai jābūt vismaz 8 simbolus garai.',
    'users_send_invite_text' => 'Jūs varat izvēlētes vai nosūtīt šim lietotājam uzaicinājuma epastu, kas ļauj tam uzstādīt savu paroli pašam, vai arī varat uzstādīt paroli tagad.',
    'users_send_invite_option' => 'Nosūtīt lietotāja uzaicinājuma epastu',
    'users_external_auth_id' => 'Ārējais autentifikācijas ID',
    'users_external_auth_id_desc' => 'Šis ir identifikators, kas tiks izmantots, lai atpazītu lietotāju, sazinoaties ar jūsu ārējo autentifikācijas sistēmu.',
    'users_password_warning' => 'Aizpildiet tikai tad, ja vēlaties mainīt savu paroli.',
    'users_system_public' => 'Šis lietotājs apzīmē visus viesus, kas apmeklēs jūsu lapu. To nevar izmantot lapas piekļuvei un tas tiek norādīts automātiski.',
    'users_delete' => 'Dzēst lietotāju',
    'users_delete_named' => 'Dzēst lietotāju :userName',
    'users_delete_warning' => 'Šī darbība pilnībā izdzēsīs lietotāju \':userName\' no sistēmas.',
    'users_delete_confirm' => 'Vai tiešām vēlaties dzēst šo lietotāju?',
    'users_migrate_ownership' => 'Pārcelt īpašumtiesības',
    'users_migrate_ownership_desc' => 'Izvēlieties lietotāju, ja vēlaties citam lietotājam pārcelt pašlaik šim lietotājam piederošās vienības.',
    'users_none_selected' => 'Nav izvēlēts lietotājs',
    'users_delete_success' => 'Lietotājs veiksmīgi dzēsts',
    'users_edit' => 'Rediģēt lietotāju',
    'users_edit_profile' => 'Rediģēt profilu',
    'users_edit_success' => 'Lietotājs veiksmīgi atjaunināts',
    'users_avatar' => 'Lietotāja attēls',
    'users_avatar_desc' => 'Izvēlieties attēlu šim lietotājam. Tam vajadzētu būt apmēram 256px kvadrātam.',
    'users_preferred_language' => 'Vēlamā valoda',
    'users_preferred_language_desc' => 'Šis uzstādījums nomainīs valodu, kas izmantota aplikācijas lietotāja saskarnē. Tas neietekmēs neko no lietotāju radītā satura.',
    'users_social_accounts' => 'Sociālie konti',
    'users_social_accounts_info' => 'Te jūs varat pieslēgt citus kontus ātrākai un ērtākai piekļuvei. Konta atvienošana no šejienes neatceļ šai aplikācijai dotās tiesības šī konta piekļuvei. Atvienojtiet piekļuvi arī no jūsu profila uzstādījumiem pievienotajā sociālajā kontā.',
    'users_social_connect' => 'Pievienot kontu',
    'users_social_disconnect' => 'Atvienot kontu',
    'users_social_connected' => ':socialAccount konts veiksmīgi pieslēgts jūsu profilam.',
    'users_social_disconnected' => ':socialAccount konts veiksmīgi atslēgts no jūsu profila.',
    'users_api_tokens' => 'API žetoni',
    'users_api_tokens_none' => 'Šim lietotājam nav izveidotu API žetonu',
    'users_api_tokens_create' => 'Izveidot žetonu',
    'users_api_tokens_expires' => 'Derīguma termiņš',
    'users_api_tokens_docs' => 'API dokumentācija',
    'users_mfa' => 'Vairākfaktoru autentifikācija',
    'users_mfa_desc' => 'Iestati vairākfaktoru autentifikāciju kā papildus drošības līmeni tavam lietotāja kontam.',
    'users_mfa_x_methods' => ':count metode iestatīta|:count metodes iestatītas',
    'users_mfa_configure' => 'Iestatīt metodes',

    // API Tokens
    'user_api_token_create' => 'Izveidot API žetonu',
    'user_api_token_name' => 'Vārds',
    'user_api_token_name_desc' => 'Uzstādiet nolasāmu nosaukumu savam žetonam, lai nākotnē atgadinātu par tā pielietojumu.',
    'user_api_token_expiry' => 'Derīgs līdz',
    'user_api_token_expiry_desc' => 'Uzstādiet datumu, kad beidzas žetona derīguma termiņš. Pieprasījumi, kas veikti pēc šī datuma ar šo žetonu vairs nedarbosies. Atstājot lauku tukšu, tiks uzstādīts derīguma termiņš 100 gadu nākotnē.',
    'user_api_token_create_secret_message' => 'Uzreiz pēc žetona izveidošanas tiks parādīts žetona ID un žetona noslēpums. Šis noslēpums tiks attēlots tikai vienreiz, tāpēc pārliecinieties, ka tā vērtība ir nokopēta uz kādu citu drošu vietu pirms turpināšanas.',
    'user_api_token_create_success' => 'API žetons veiksmīgi izveidots',
    'user_api_token_update_success' => 'API žetons veiksmīgi atjaunināts',
    'user_api_token' => 'API žetons',
    'user_api_token_id' => 'Žetona ID',
    'user_api_token_id_desc' => 'Šis ir neizmaināms sistēmas ģenerēts identifikators šim žetonam, kas būs jānorāda API pieprasījumos.',
    'user_api_token_secret' => 'Žetona noslēpums',
    'user_api_token_secret_desc' => 'Šis ir sistēmas ģenerēts noslēpums šim žetonam, ko būs nepieciešams norādīt API pieprasījumos. Tas tiks attēlots tikai vienu reizi, tāpēc nokopējiet to uz kādu citu drošu vietu.',
    'user_api_token_created' => 'Žetons izveidots :timeAgo',
    'user_api_token_updated' => 'Žetons atjaunināts :timeAgo',
    'user_api_token_delete' => 'Dzēst žetonu',
    'user_api_token_delete_warning' => 'Šī darbība pilnībā izdzēsīs API žetonu \':tokenName\' no sistēmas.',
    'user_api_token_delete_confirm' => 'Vai tiešām vēlaties dzēst šo API žetonu?',
    'user_api_token_delete_success' => 'API žetons veiksmīgi dzēsts',

    // Webhooks
    'webhooks' => 'Webhook',
    'webhooks_create' => 'Izveidot jaunu webhook',
    'webhooks_none_created' => 'Nav izveidots neviens webhook.',
    'webhooks_edit' => 'Labot webhook',
    'webhooks_save' => 'Saglabāt webhook',
    'webhooks_details' => 'Webhook detaļas',
    'webhooks_details_desc' => 'Norādiet lietotājiem draudzīgu nosaukumu un POST adresi (endpoint), uz ko nosūtīt webhook datus.',
    'webhooks_events' => 'Webhook notikumi',
    'webhooks_events_desc' => 'Izvēlieties visus notikumus, kas izsauks šo webhook.',
    'webhooks_events_warning' => 'Ņemiet vērā, ka šie notikumi tiks palaisti visiem izvēlētajiem notikumiem, pat ja norādītas pielāgotas piekļuves tiesības. Pārliecineities, ka webhook lietošana neatklās ierobežotas pieejamības saturu.',
    'webhooks_events_all' => 'Visi sistēmas notikumi',
    'webhooks_name' => 'Webhook nosaukums',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook adrese (endpoint)',
    'webhooks_active' => 'Webhook aktīvs',
    'webhook_events_table_header' => 'Notikumi',
    'webhooks_delete' => 'Dzēst webhook',
    'webhooks_delete_warning' => 'Webhook ar nosaukumu \':webhookName\' tiks pilnībā dzēsts no sistēmas.',
    'webhooks_delete_confirm' => 'Vai tiešām vēlaties dzēst šo webhook?',
    'webhooks_format_example' => 'Webhook formāta piemērs',
    'webhooks_format_example_desc' => 'Webhook dati tiek nosūtīti kā POST pieprasījums norādītajai endpoint adresei kā JSON tālāk norādītajā formātā. "related_item" un "url" īpašības nav obligātas un ir atkarīgas no palaistā notikuma veida.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Katalāņu',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Igauņu',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
