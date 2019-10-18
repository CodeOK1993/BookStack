<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Beállítások',
    'settings_save' => 'Beállítások mentése',
    'settings_save_success' => 'Beállítások elmentve',

    // App Settings
    'app_customization' => 'Személyre szabás',
    'app_features_security' => 'Jellemzők és biztonság',
    'app_name' => 'Alkalmazás neve',
    'app_name_desc' => 'Ez a név meg fog jelenni a fejlécben és minden a rendszer által küldött emailben.',
    'app_name_header' => 'Név mutatása a fejlécben',
    'app_public_access' => 'Nyilvános hozzáférés',
    'app_public_access_desc' => 'Ha engedélyezett, a nem bejelentkezett felhasználók is hozzá tudnak férni a BookStack példány tartalmaihoz.',
    'app_public_access_desc_guest' => 'A nyilvános látogatók hozzáférése a "Guest" felhasználón keresztül irányítható.',
    'app_public_access_toggle' => 'Nyilvános hozzáférés engedélyezése',
    'app_public_viewing' => 'Nyilvános megtekintés engedélyezve?',
    'app_secure_images' => 'Magasabb biztonságú képfeltöltés',
    'app_secure_images_toggle' => 'Magasabb biztonságú képfeltöltés engedélyezése',
    'app_secure_images_desc' => 'Teljesítmény optimalizálási okokból minden kép nyilvános. Ez a beállítás egy véletlenszerű, nehezen kitalálható karakterláncot illeszt a képek útvonalának elejére. Meg kell győződni róla, hogy a könnyű hozzáférés megakadályozása érdekében a könyvtár indexek nincsenek engedélyezve.',
    'app_editor' => 'Oldalszerkesztő',
    'app_editor_desc' => 'Annak kiválasztása, hogy a felhasználók melyik szerkesztőt használhatják az oldalak szerkesztéséhez.',
    'app_custom_html' => 'Egyéni HTML fejléc tartalom',
    'app_custom_html_desc' => 'Az itt hozzáadott bármilyen tartalom be lesz illesztve minden oldal <head> szekciójának aljára. Ez hasznos a stílusok felülírásához van analitikai kódok hozzáadásához.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Alkalmazás logó',
    'app_logo_desc' => 'A képnek 43px magasnak kell lennie.<br>A nagy képek át lesznek méretezve.',
    'app_primary_color' => 'Alkalmazás elsődleges színe',
    'app_primary_color_desc' => 'Hexadecimális értéknek kell lennie.<br>Az alapértelmezés szerinti szín visszaállításához üresen kell hagyni.',
    'app_homepage' => 'Alkalmazás kezdőlapja',
    'app_homepage_desc' => 'A kezdőlapon az alapértelmezés szerinti nézet helyett megjelenő nézet kiválasztása. A kiválasztott oldalakon figyelmen kívül lesznek hagyva az oldal engedélyek.',
    'app_homepage_select' => 'Egy oldal kiválasztása',
    'app_disable_comments' => 'Megjegyzések letiltása',
    'app_disable_comments_toggle' => 'Megjegyzések letiltása',
    'app_disable_comments_desc' => 'Megjegyzések letiltása az alkalmazás összes oldalán.<br>A már létező megjegyzések el lesznek rejtve.',

    // Registration Settings
    'reg_settings' => 'Regisztráció',
    'reg_enable' => 'Regisztráció engedélyezése',
    'reg_enable_toggle' => 'Regisztráció engedélyezése',
    'reg_enable_desc' => 'Ha a regisztráció engedélyezett, akkor a felhasználó képes lesz bejelentkezni mint az alkalmazás egy felhasználója. Regisztráció után egy egyszerű, alapértelmezés szerinti felhasználói szerepkör lesz hozzárendelve.',
    'reg_default_role' => 'Regisztráció utáni alapértelmezett felhasználói szerepkör',
    'reg_email_confirmation' => 'Email megerősítés',
    'reg_email_confirmation_toggle' => 'Email megerősítés szükséges',
    'reg_confirm_email_desc' => 'Ha a tartomány korlátozás be van állítva, akkor email megerősítés szükséges és ez a beállítás figyelmen kívül lesz hagyva.',
    'reg_confirm_restrict_domain' => 'Tartomány korlátozás',
    'reg_confirm_restrict_domain_desc' => 'Azoknak az email tartományoknak a vesszővel elválasztott listája, melyekre a regisztráció korlátozva lesz. A felhasználók egy emailt fognak kapni, hogy megerősítsék az email címüket mielőtt használni kezdhetnék az alkalmazást.<br>Fontos tudni, hogy a felhasználók a sikeres regisztráció után megváltoztathatják az email címüket.',
    'reg_confirm_restrict_domain_placeholder' => 'Nincs beállítva korlátozás',

    // Maintenance settings
    'maint' => 'Karbantartás',
    'maint_image_cleanup' => 'Képek tisztítása',
    'maint_image_cleanup_desc' => "Végigolvassa az oldalakat és a tartalmak változatait, hogy leellenőrizze jelenleg mely képek és rajzok vannak használatban, és mely képek szerepelnek többször. A futtatása előtt feltétlen készíteni kell egy teljes adatbázis és lemezkép mentést.",
    'maint_image_cleanup_ignore_revisions' => 'Képek figyelmen kívül hagyása a változatokban',
    'maint_image_cleanup_run' => 'Tisztítás futtatása',
    'maint_image_cleanup_warning' => ':count potenciálisan nem használt képet találtam. Biztosan törölhetőek ezek a képek?',
    'maint_image_cleanup_success' => ':count potenciálisan nem használt kép megtalálva és törölve!',
    'maint_image_cleanup_nothing_found' => 'Nincsenek nem használt képek, semmi sem lett törölve!',

    // Role Settings
    'roles' => 'Szerepkörök',
    'role_user_roles' => 'Felhasználói szerepkörök',
    'role_create' => 'Új szerepkör létrehozása',
    'role_create_success' => 'Szerepkör sikeresen létrehozva',
    'role_delete' => 'Szerepkör törlése',
    'role_delete_confirm' => 'Ez törölni fogja \':roleName\' szerepkört.',
    'role_delete_users_assigned' => 'Ehhez a szerepkörhöz :userCount felhasználó van hozzárendelve. Ha a felhasználókat át kell helyezni ebből a szerepkörből, akkor ki kell választani egy új szerepkört.',
    'role_delete_no_migration' => "Nincs felhasználó áthelyezés",
    'role_delete_sure' => 'Biztosan törölhető ez a szerepkör?',
    'role_delete_success' => 'Szerepkör sikeresen törölve',
    'role_edit' => 'Szerepkör szerkesztése',
    'role_details' => 'Szerepkör részletei',
    'role_name' => 'Szerepkör neve',
    'role_desc' => 'Szerepkör rövid leírása',
    'role_external_auth_id' => 'Külső hitelesítés azonosítók',
    'role_system' => 'Rendszer jogosultságok',
    'role_manage_users' => 'Felhasználók kezelése',
    'role_manage_roles' => 'Szerepkörök és szerepkör engedélyek kezelése',
    'role_manage_entity_permissions' => 'Minden könyv, fejezet és oldalengedély kezelése',
    'role_manage_own_entity_permissions' => 'Saját könyv, fejezet és oldalak engedélyeinek kezelése',
    'role_manage_page_templates' => 'Manage page templates',
    'role_manage_settings' => 'Alkalmazás beállításainak kezelése',
    'role_asset' => 'Eszköz jogosultságok',
    'role_asset_desc' => 'Ezek a jogosultság vezérlik a alapértelmezés szerinti hozzáférést a rendszerben található eszközökhöz. A könyvek, fejezetek és oldalak jogosultságai felülírják ezeket a jogosultságokat.',
    'role_asset_admins' => 'Az adminisztrátorok automatikusan hozzáférést kapnak minden tartalomhoz, de ezek a beállítások megjeleníthetnek vagy elrejthetnek felhasználói felület beállításokat.',
    'role_all' => 'Összes',
    'role_own' => 'Saját',
    'role_controlled_by_asset' => 'Az általuk feltöltött eszköz által ellenőrzött',
    'role_save' => 'Szerepkör mentése',
    'role_update_success' => 'Szerepkör sikeresen frissítve',
    'role_users' => 'Felhasználók ebben a szerepkörben',
    'role_users_none' => 'Jelenleg nincsenek felhasználók hozzárendelve ehhez a szerepkörhöz',

    // Users
    'users' => 'Felhasználók',
    'user_profile' => 'Felhasználói profil',
    'users_add_new' => 'Új felhasználó hozzáadása',
    'users_search' => 'Felhasználók keresése',
    'users_details' => 'Felhasználó részletei',
    'users_details_desc' => 'Egy megjelenítendő név és email cím beállítása ennek a felhasználónak. Az email cím az alkalmazásba történő bejelentkezéshez lesz használva.',
    'users_details_desc_no_email' => 'Egy megjelenítendő név beállítása ennek a felhasználónak amiről mások felismerik.',
    'users_role' => 'Felhasználói szerepkörök',
    'users_role_desc' => 'A felhasználó melyik szerepkörhöz lesz rendelve. Ha a felhasználó több szerepkörhöz van rendelve, akkor ezeknek a szerepköröknek a jogosultságai összeadódnak, és a a felhasználó a hozzárendelt szerepkörök minden képességét megkapja.',
    'users_password' => 'Felhasználó jelszava',
    'users_password_desc' => 'Az alkalmazásba bejelentkezéshez használható jelszó beállítása. Legalább 5 karakter hosszúnak kell lennie.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'Külső hitelesítés azonosítója',
    'users_external_auth_id_desc' => 'Ez az azonosító lesz használva a felhasználó ellenőrzéséhez mikor az LDAP rendszerrel kommunikál.',
    'users_password_warning' => 'A lenti mezőket csak a jelszó módosításához kell kitölteni.',
    'users_system_public' => 'Ez a felhasználó bármelyik, a példányt megtekintő felhasználót képviseli. Nem lehet vele bejelentkezni de automatikusan hozzá lesz rendelve.',
    'users_delete' => 'Felhasználó törlése',
    'users_delete_named' => ':userName felhasználó törlése',
    'users_delete_warning' => '\':userName\' felhasználó teljesen törölve lesz a rendszerből.',
    'users_delete_confirm' => 'Biztosan törölhető ez a felhasználó?',
    'users_delete_success' => 'Felhasználó sikeresen eltávolítva',
    'users_edit' => 'Felhasználó szerkesztése',
    'users_edit_profile' => 'Profil szerkesztése',
    'users_edit_success' => 'Felhasználó sikeresen frissítve',
    'users_avatar' => 'Avatar használata',
    'users_avatar_desc' => 'A felhasználót ábrázoló kép kiválasztása. Kb. 256px méretű négyzetes képnek kell lennie.',
    'users_preferred_language' => 'Előnyben részesített nyelv',
    'users_preferred_language_desc' => 'Ez a beállítás megváltoztatja az alkalmazás felhasználói felületén használt nyelvet. Nincs hatása a felhasználók által létrehozott tartalomra.',
    'users_social_accounts' => 'Közösségi fiókok',
    'users_social_accounts_info' => 'Itt lehet egyéb fiókokat hozzákapcsolni a gyorsabb és könnyebb bejelentkezés érdekében. Itt olyan fiókot lehet lecsatlakoztatni, melynek korábban nem volt engedélyezett hozzáférése. Visszavonja a hozzáférést a csatlakoztatott szociális fiók profilbeállításaiból.',
    'users_social_connect' => 'Fiók csatlakoztatása',
    'users_social_disconnect' => 'Fiók lecsatlakoztatása',
    'users_social_connected' => ':socialAccount fiók sikeresen csatlakoztatva a profilhoz.',
    'users_social_disconnected' => ':socialAccount fiók sikeresen lecsatlakoztatva a profilról.',

    //! Since these labels are already localized this array does not need to be
    //! translated in the language-specific files.
    //! DELETE BELOW IF COPIED FROM EN
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
