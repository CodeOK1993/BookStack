<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Налаштування',
    'settings_save' => 'Зберегти налаштування',
    'settings_save_success' => 'Налаштування збережено',

    // App Settings
    'app_customization' => 'Налаштування',
    'app_features_security' => 'Особливості та безпека',
    'app_name' => 'Назва програми',
    'app_name_desc' => 'Ця назва відображається у заголовку та у всіх листах.',
    'app_name_header' => 'Показати назву програми в заголовку',
    'app_public_access' => 'Публічнй доступ',
    'app_public_access_desc' => 'Увімкнення цієї опції дозволить відвідувачам, які не увійшли в систему, отримати доступ до вмісту у вашому екземплярі BookStack.',
    'app_public_access_desc_guest' => 'Доступ для публічних відвідувачів можна контролювати через користувача "Гість".',
    'app_public_access_toggle' => 'Дозволити публічний доступ',
    'app_public_viewing' => 'Дозволити публічний перегляд?',
    'app_secure_images' => 'Вищі налаштування безпеки для зображень',
    'app_secure_images_toggle' => 'Увімкунти вищі налаштування безпеки для завантаження зображень',
    'app_secure_images_desc' => 'З міркувань продуктивності всі зображення є загальнодоступними. Цей параметр додає випадковий, важко передбачуваний рядок перед URL-адресами зображень. Переконайтеся, що індексація каталогів не активована, щоб запобігти легкому доступу.',
    'app_editor' => 'Редактор сторінок',
    'app_editor_desc' => 'Виберіть, який редактор буде використовуватися всіма користувачами для редагування сторінок.',
    'app_custom_html' => 'Користувацький вміст HTML-заголовку',
    'app_custom_html_desc' => 'Будь-який доданий тут вміст буде вставлено в нижню частину розділу <head> кожної сторінки. Це зручно для перевизначення стилів, або додавання коду аналітики.',
    'app_custom_html_disabled_notice' => 'На цій сторінці налаштувань відключений користувацький вміст заголовка HTML, щоб гарантувати, що будь-які невдалі зміни можна буде відновити.',
    'app_logo' => 'Логотип програми',
    'app_logo_desc' => 'Це зображення має бути висотою 43px. <br>Великі зображення будуть зменшені.',
    'app_primary_color' => 'Основний колір програми',
    'app_primary_color_desc' => 'Колір потрібно вказати у hex-форматі. <br>Залиште порожнім, щоб використати стандартний колір.',
    'app_homepage' => 'Домашня сторінка програми',
    'app_homepage_desc' => 'Виберіть сторінку, яка відображатиметься на домашній сторінці замість перегляду за умовчанням. Права на сторінку не враховуються для вибраних сторінок.',
    'app_homepage_select' => 'Вибрати сторінку',
    'app_disable_comments' => 'Вимкнути коментарі',
    'app_disable_comments_toggle' => 'Вимкнути коментарі',
    'app_disable_comments_desc' => 'Вимкнути коментарі на всіх сторінках програми. Існуючі коментарі не відображаються.',

    // Color settings
    'content_colors' => 'Кольори вмісту',
    'content_colors_desc' => 'Встановлює кольори для всіх елементів в ієрархії організації сторінок. Рекомендуємо вибирати кольори із яскравістю, схожою на кольори за замовчуванням, для кращої читабельності.',
    'bookshelf_color' => 'Колір полиці',
    'book_color' => 'Колір книги',
    'chapter_color' => 'Колір глави',
    'page_color' => 'Колір сторінки',
    'page_draft_color' => 'Колір чернетки',

    // Registration Settings
    'reg_settings' => 'Реєстрація',
    'reg_enable' => 'Дозволити реєстрацію',
    'reg_enable_toggle' => 'Дозволити реєстрацію',
    'reg_enable_desc' => 'При включенні реєстрації відвідувач зможе зареєструватися як користувач програми. Після реєстрації їм надається єдина роль користувача за замовчуванням.',
    'reg_default_role' => 'Роль користувача за умовчанням після реєстрації',
    'reg_enable_external_warning' => 'Цей параметр ігнорується, якщо активна зовнішня автентифікація LDAP або SAML. Облікові записи користувачів для неіснуючих учасників будуть створені автоматично, якщо аутентифікація у зовнішній системі буде успішною.',
    'reg_email_confirmation' => 'Підтвердження електронною поштою',
    'reg_email_confirmation_toggle' => 'Необхідне підтвердження електронною поштою',
    'reg_confirm_email_desc' => 'Якщо використовується обмеження домену, то підтвердження електронною поштою буде потрібно, а нижче значення буде проігноровано.',
    'reg_confirm_restrict_domain' => 'Обмежити по домену',
    'reg_confirm_restrict_domain_desc' => 'Введіть список розділених комами доменів електронної пошти, до яких ви хочете обмежити реєстрацію. Користувачам буде надіслано електронне повідомлення для підтвердження своєї адреси, перш ніж дозволяти взаємодіяти з додатком. <br> Зауважте, що користувачі зможуть змінювати свої електронні адреси після успішної реєстрації.',
    'reg_confirm_restrict_domain_placeholder' => 'Не встановлено обмежень',

    // Maintenance settings
    'maint' => 'Обслуговування',
    'maint_image_cleanup' => 'Очищення зображень',
    'maint_image_cleanup_desc' => "Сканує вміст сторінки та версій, щоб перевірити, які зображення та малюнки в даний час використовуються, а також які зображення зайві. Переконайтеся, що ви створили повну резервну копію бази даних та зображення, перш ніж запускати це.",
    'maint_image_cleanup_ignore_revisions' => 'Ігнорувати зображення в версіях',
    'maint_image_cleanup_run' => 'Запустити очищення',
    'maint_image_cleanup_warning' => ':count потенційно невикористаних зображень було знайдено. Ви впевнені, що хочете видалити ці зображення?',
    'maint_image_cleanup_success' => ':count потенційно невикористані зображення знайдено і видалено!',
    'maint_image_cleanup_nothing_found' => 'Не знайдено невикористовуваних зображень, нічого не видалено!',
    'maint_send_test_email' => 'Надіслати тестове повідомлення',
    'maint_send_test_email_desc' => 'Надіслати тестового листа на адресу електронної пошти, що вказана у вашому профілі.',
    'maint_send_test_email_run' => 'Надіслати тестовий лист',
    'maint_send_test_email_success' => 'Лист відправлений на : адреса',
    'maint_send_test_email_mail_subject' => 'Перевірка електронної пошти',
    'maint_send_test_email_mail_greeting' => 'Доставляння електронної пошти працює!',
    'maint_send_test_email_mail_text' => 'Вітаємо! Оскільки ви отримали цього листа, поштова скринька налаштована правильно.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_item' => 'Related Item',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Ролі',
    'role_user_roles' => 'Ролі користувача',
    'role_create' => 'Створити нову роль',
    'role_create_success' => 'Роль успішно створена',
    'role_delete' => 'Видалити роль',
    'role_delete_confirm' => 'Це призведе до видалення ролі з назвою \':roleName\'.',
    'role_delete_users_assigned' => 'Цій ролі належать :userCount користувачі(в). Якщо ви хочете перенести користувачів із цієї ролі, виберіть нову роль нижче.',
    'role_delete_no_migration' => "Не мігрувати користувачів",
    'role_delete_sure' => 'Ви впевнені, що хочете видалити цю роль?',
    'role_delete_success' => 'Роль успішно видалена',
    'role_edit' => 'Редагувати роль',
    'role_details' => 'Деталі ролі',
    'role_name' => 'Назва ролі',
    'role_desc' => 'Короткий опис ролі',
    'role_external_auth_id' => 'Зовнішні ID автентифікації',
    'role_system' => 'Системні дозволи',
    'role_manage_users' => 'Керування користувачами',
    'role_manage_roles' => 'Керування правами ролей та ролями',
    'role_manage_entity_permissions' => 'Керування всіма правами на книги, розділи та сторінки',
    'role_manage_own_entity_permissions' => 'Керування дозволами на власну книгу, розділ та сторінки',
    'role_manage_page_templates' => 'Управління шаблонами сторінок',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Керування налаштуваннями програми',
    'role_asset' => 'Дозволи',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Ці дозволи контролюють стандартні доступи всередині системи. Права на книги, розділи та сторінки перевизначать ці дозволи.',
    'role_asset_admins' => 'Адміністратори автоматично отримують доступ до всього вмісту, але ці параметри можуть відображати або приховувати параметри інтерфейсу користувача.',
    'role_all' => 'Все',
    'role_own' => 'Власне',
    'role_controlled_by_asset' => 'Контролюється за об\'єктом, до якого вони завантажуються',
    'role_save' => 'Зберегти роль',
    'role_update_success' => 'Роль успішно оновлена',
    'role_users' => 'Користувачі в цій ролі',
    'role_users_none' => 'Наразі жоден користувач не призначений для цієї ролі',

    // Users
    'users' => 'Користувачі',
    'user_profile' => 'Профіль користувача',
    'users_add_new' => 'Додати нового користувача',
    'users_search' => 'Пошук користувачів',
    'users_details' => 'Відомості про користувача',
    'users_details_desc' => 'Встановіть ім\'я та електронну адресу для цього користувача. Адреса електронної пошти буде використана для входу до програми.',
    'users_details_desc_no_email' => 'Встановіть ім\'я для цього користувача, щоб інші могли його розпізнати.',
    'users_role' => 'Ролі користувача',
    'users_role_desc' => 'Виберіть, до яких ролей буде призначено цього користувача. Якщо користувачеві призначено декілька ролей, дозволи з цих ролей будуть складатись і вони отримуватимуть усі можливості призначених ролей.',
    'users_password' => 'Пароль користувача',
    'users_password_desc' => 'Встановіть пароль для входу. Він повинен містити принаймні 5 символів.',
    'users_send_invite_text' => 'Ви можете надіслати цьому користувачеві лист із запрошенням, що дозволить йому встановити пароль власноруч, або ви можете встановити йому пароль самостійно.',
    'users_send_invite_option' => 'Надіслати листа із запрошенням користувачу',
    'users_external_auth_id' => 'Зовнішній ID автентифікації',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Тільки якщо ви хочете змінити свій пароль, заповніть поля нижче:',
    'users_system_public' => 'Цей користувач представляє будь-яких гостьових користувачів, які відвідують ваш екземпляр. Його не можна використовувати для входу, але він призначається автоматично.',
    'users_delete' => 'Видалити користувача',
    'users_delete_named' => 'Видалити користувача :userName',
    'users_delete_warning' => 'Це повне видалення цього користувача з ім\'ям \':userName\' з системи.',
    'users_delete_confirm' => 'Ви впевнені, що хочете видалити цього користувача?',
    'users_delete_success' => 'Користувачі успішно видалені',
    'users_edit' => 'Редагувати користувача',
    'users_edit_profile' => 'Редагувати профіль',
    'users_edit_success' => 'Користувача успішно оновлено',
    'users_avatar' => 'Аватар користувача',
    'users_avatar_desc' => 'Це квадратне зображення має бути приблизно 256px.',
    'users_preferred_language' => 'Бажана мова',
    'users_preferred_language_desc' => 'Цей параметр змінить мову інтерфейсу користувача в програмі. Не вплине на створений користувачем вміст.',
    'users_social_accounts' => 'Соціальні акаунти',
    'users_social_accounts_info' => 'Тут ви можете підключити інші облікові записи для швидшого та легшого входу. Від\'єднання соціального облікового запису тут не дозволяється. Скасуйте доступ із налаштувань вашого профілю в пов\'язаній соціальній мережі.',
    'users_social_connect' => 'Підключити обліковий запис',
    'users_social_disconnect' => 'Від\'єднати обліковий запис',
    'users_social_connected' => 'Обліковий запис :socialAccount успішно додано до вашого профілю.',
    'users_social_disconnected' => 'Обліковий запис :socialAccount був успішно відключений від вашого профілю.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
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
    ]
    //!////////////////////////////////
];
