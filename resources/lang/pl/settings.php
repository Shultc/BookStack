<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ustawienia',
    'settings_save' => 'Zapisz ustawienia',
    'settings_save_success' => 'Ustawienia zapisane',
    'system_version' => 'Wersja Systemu',
    'categories' => 'Kategorie',

    // App Settings
    'app_customization' => 'Dostosowywanie',
    'app_features_security' => 'Funkcje i bezpieczeństwo',
    'app_name' => 'Nazwa aplikacji',
    'app_name_desc' => 'Ta nazwa jest wyświetlana w nagłówku i e-mailach.',
    'app_name_header' => 'Pokaż nazwę aplikacji w nagłówku',
    'app_public_access' => 'Dostęp publiczny',
    'app_public_access_desc' => 'Włączenie tej opcji umożliwi niezalogowanym odwiedzającym dostęp do treści w Twojej instancji BookStack.',
    'app_public_access_desc_guest' => 'Dostęp dla niezalogowanych odwiedzających jest dostępny poprzez użytkownika "Guest".',
    'app_public_access_toggle' => 'Zezwalaj na dostęp publiczny',
    'app_public_viewing' => 'Zezwolić na publiczne przeglądanie?',
    'app_secure_images' => 'Włączyć przesyłanie obrazów o wyższym poziomie bezpieczeństwa?',
    'app_secure_images_toggle' => 'Włącz wyższy poziom bezpieczeństwa dla obrazów',
    'app_secure_images_desc' => 'Ze względów wydajnościowych wszystkie obrazki są publiczne. Ta opcja dodaje dodatkowy, trudny do odgadnięcia losowy ciąg na początku nazwy obrazka. Upewnij się że indeksowanie katalogów jest zablokowane, aby uniemożliwić łatwy dostęp do obrazków.',
    'app_default_editor' => 'Default Page Editor',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Własna zawartość w tagu <head>',
    'app_custom_html_desc' => 'Zawartość dodana tutaj zostanie dołączona na dole sekcji <head> każdej strony. Przydatne przy nadpisywaniu styli lub dodawaniu analityki.',
    'app_custom_html_disabled_notice' => 'Niestandardowa zawartość nagłówka HTML jest wyłączona na tej stronie ustawień aby zapewnić, że wszystkie błedne zmiany (braking change) mogą zostać cofnięte.',
    'app_logo' => 'Logo aplikacji',
    'app_logo_desc' => 'Ten obrazek powinien mieć nie więcej niż 43px wysokosci. <br>Większe obrazki zostaną zmniejszone.',
    'app_primary_color' => 'Podstawowy kolor aplikacji',
    'app_primary_color_desc' => 'To powinna być wartość HEX. <br>Zostaw to pole puste, by powrócić do podstawowego koloru.',
    'app_homepage' => 'Strona główna',
    'app_homepage_desc' => 'Wybierz widok, który będzie wyświetlany na stronie głównej zamiast w widoku domyślnego. Uprawnienia dostępowe są ignorowane dla wybranych stron.',
    'app_homepage_select' => 'Wybierz stronę',
    'app_footer_links' => 'Linki w stopce',
    'app_footer_links_desc' => 'Dodaj linki do pokazania w stopce witryny. Będą one wyświetlane na dole większości stron, włącznie z tymi, które nie wymagają logowania. Możesz użyć etykiety "trans::<key>" aby użyć tłumaczeń zdefiniowanych przez system. Na przykład: Używanie "trans::common.privacy_policy" zapewni przetłumaczony tekst "Polityka prywatności" i "trans::common.terms_of_service" zapewni przetłumaczony tekst "Warunki korzystania z usługi".',
    'app_footer_links_label' => 'Etykieta linku',
    'app_footer_links_url' => 'URL odnośnika',
    'app_footer_links_add' => 'Dodaj link w stopce',
    'app_disable_comments' => 'Wyłącz komentarze',
    'app_disable_comments_toggle' => 'Wyłącz komentowanie',
    'app_disable_comments_desc' => 'Wyłącz komentarze na wszystkich stronach w aplikacji. Istniejące komentarze nie będą pokazywane.',

    // Color settings
    'content_colors' => 'Kolory zawartości',
    'content_colors_desc' => 'Ustawia kolory dla wszystkich elementów w hierarchii organizacji stron. Wybór kolorów o podobnej jasności do domyślnych kolorów jest zalecany dla czytelności.',
    'bookshelf_color' => 'Kolor półki',
    'book_color' => 'Kolor książki',
    'chapter_color' => 'Kolor rozdziału',
    'page_color' => 'Kolor strony',
    'page_draft_color' => 'Kolor szkicu strony',

    // Registration Settings
    'reg_settings' => 'Ustawienia rejestracji',
    'reg_enable' => 'Włącz rejestrację',
    'reg_enable_toggle' => 'Włącz rejestrację',
    'reg_enable_desc' => 'Po włączeniu rejestracji użytkownicy ci będą mogli się samodzielnie zarejestrować i otrzymają domyślną rolę.',
    'reg_default_role' => 'Domyślna rola użytkownika po rejestracji',
    'reg_enable_external_warning' => 'Powyższa opcja jest ignorowana, gdy zewnętrzne uwierzytelnianie LDAP lub SAML jest aktywne. Konta użytkowników dla nieistniejących użytkowników zostaną automatycznie utworzone, jeśli uwierzytelnianie za pomocą systemu zewnętrznego zakończy się sukcesem.',
    'reg_email_confirmation' => 'Potwierdzenie adresu email',
    'reg_email_confirmation_toggle' => 'Wymagaj potwierdzenia adresu email',
    'reg_confirm_email_desc' => 'Jeśli restrykcje domenowe zostały ustawione, potwierdzenie adresu stanie się konieczne, a poniższa wartośc zostanie zignorowana.',
    'reg_confirm_restrict_domain' => 'Restrykcje domenowe dot. adresu e-mail',
    'reg_confirm_restrict_domain_desc' => 'Wprowadź listę domen adresów e-mail, rozdzieloną przecinkami, którym chciałbyś zezwolić na rejestrację. Wymusi to konieczność potwierdzenia adresu e-mail przez użytkownika przed uzyskaniem dostępu do aplikacji. <br> Pamiętaj, że użytkownicy będą mogli zmienić adres e-mail po rejestracji.',
    'reg_confirm_restrict_domain_placeholder' => 'Brak restrykcji',

    // Maintenance settings
    'maint' => 'Konserwacja',
    'maint_image_cleanup' => 'Czyszczenie obrazków',
    'maint_image_cleanup_desc' => 'Skanuje zawartość strony i poprzednie wersje, aby sprawdzić, które obrazy i rysunki są aktualnie używane, a które obrazy są zbędne. Przed uruchomieniem tej opcji należy utworzyć pełną kopię zapasową bazy danych i obrazków.',
    'maint_delete_images_only_in_revisions' => 'Usuń również obrazy, które istnieją tylko w starych rewizjach strony',
    'maint_image_cleanup_run' => 'Uruchom czyszczenie',
    'maint_image_cleanup_warning' => 'Znaleziono :count potencjalnie niepotrzebnych obrazków. Czy na pewno chcesz je usunąć?',
    'maint_image_cleanup_success' => ':count potencjalnie nieużywane obrazki zostały znalezione i usunięte!',
    'maint_image_cleanup_nothing_found' => 'Nie znaleziono żadnych nieużywanych obrazków. Nic nie zostało usunięte!',
    'maint_send_test_email' => 'Wyślij testową wiadomość e-mail',
    'maint_send_test_email_desc' => 'Ta opcje wyśle wiadomość testową na adres e-mail podany w Twoim profilu',
    'maint_send_test_email_run' => 'Wyślij testową wiadomość e-mail',
    'maint_send_test_email_success' => 'E-mail wysłany na adres :address',
    'maint_send_test_email_mail_subject' => 'E-mail testowy',
    'maint_send_test_email_mail_greeting' => 'Wygląda na to, że wysyłka wiadomości e-mail działa!',
    'maint_send_test_email_mail_text' => 'Gratulacje! Otrzymałeś tego e-maila więc Twoje ustawienia poczty elektronicznej wydają się być prawidłowo skonfigurowane.',
    'maint_recycle_bin_desc' => 'Usunięte półki, książki, rozdziały i strony są wysyłane do kosza, aby mogły zostać przywrócone lub trwale usunięte. Starsze przedmioty w koszu mogą zostać automatycznie usunięte po pewnym czasie w zależności od konfiguracji systemu.',
    'maint_recycle_bin_open' => 'Otwórz kosz',

    // Recycle Bin
    'recycle_bin' => 'Kosz',
    'recycle_bin_desc' => 'Tutaj możesz przywrócić elementy, które zostały usunięte lub usunąć je z systemu. Ta lista jest niefiltrowana w odróżnieniu od podobnych list aktywności w systemie, w którym stosowane są filtry uprawnień.',
    'recycle_bin_deleted_item' => 'Usunięta pozycja',
    'recycle_bin_deleted_parent' => 'Nadrzędny',
    'recycle_bin_deleted_by' => 'Usunięty przez',
    'recycle_bin_deleted_at' => 'Czas usunięcia',
    'recycle_bin_permanently_delete' => 'Usuń trwale',
    'recycle_bin_restore' => 'Przywróć',
    'recycle_bin_contents_empty' => 'Kosz jest pusty',
    'recycle_bin_empty' => 'Opróżnij kosz',
    'recycle_bin_empty_confirm' => 'To na stałe zniszczy wszystkie przedmioty w koszu, w tym zawartość w każdym elemencie. Czy na pewno chcesz opróżnić kosz?',
    'recycle_bin_destroy_confirm' => 'Ta akcja trwale usunie ten element, wraz z elementami podrzędnymi wymienionymi poniżej, z systemu i nie będziesz w stanie przywrócić tej zawartości. Czy na pewno chcesz trwale usunąć ten element?',
    'recycle_bin_destroy_list' => 'Elementy do usunięcia',
    'recycle_bin_restore_list' => 'Elementy do przywrócenia',
    'recycle_bin_restore_confirm' => 'Ta akcja przywróci usunięty element, w tym elementy podrzędne, do ich oryginalnej lokalizacji. Jeśli oryginalna lokalizacja została od tego czasu usunięta, a teraz znajduje się w koszu, element nadrzędny będzie również musiał zostać przywrócony.',
    'recycle_bin_restore_deleted_parent' => 'Usunięto również nadrzędny element. Zostaną one usunięte, dopóki nie przywróci się tego nadrzędnego elementu.',
    'recycle_bin_restore_parent' => 'Przywróć nadrzędne',
    'recycle_bin_destroy_notification' => 'Usunięto :count przedmiotów z kosza.',
    'recycle_bin_restore_notification' => 'Przywrócono :count przedmiotów z kosza.',

    // Audit Log
    'audit' => 'Dziennik audytu',
    'audit_desc' => 'Ten dziennik audytu wyświetla listę działań śledzonych w systemie. Ta lista jest niefiltrowana w odróżnieniu od podobnych list aktywności w systemie, w którym stosowane są filtry uprawnień.',
    'audit_event_filter' => 'Filtry Wydarzeń',
    'audit_event_filter_no_filter' => 'Brak filtra',
    'audit_deleted_item' => 'Usunięta pozycja',
    'audit_deleted_item_name' => 'Nazwa: :name',
    'audit_table_user' => 'Użytkownik',
    'audit_table_event' => 'Wydarzenie',
    'audit_table_related' => 'Powiązany element lub szczegóły',
    'audit_table_ip' => 'Adres IP',
    'audit_table_date' => 'Data Aktywności',
    'audit_date_from' => 'Zakres dat od',
    'audit_date_to' => 'Zakres dat do',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Role użytkowników',
    'role_create' => 'Utwórz nową rolę',
    'role_create_success' => 'Rola utworzona pomyślnie',
    'role_delete' => 'Usuń rolę',
    'role_delete_confirm' => 'To spowoduje usunięcie roli \':roleName\'.',
    'role_delete_users_assigned' => 'Tę rolę ma przypisanych :userCount użytkowników. Jeśli chcesz zmigrować użytkowników z tej roli, wybierz nową poniżej.',
    'role_delete_no_migration' => "Nie migruj użytkowników",
    'role_delete_sure' => 'Czy na pewno chcesz usunąć tę rolę?',
    'role_delete_success' => 'Rola usunięta pomyślnie',
    'role_edit' => 'Edytuj rolę',
    'role_details' => 'Szczegóły roli',
    'role_name' => 'Nazwa roli',
    'role_desc' => 'Krótki opis roli',
    'role_mfa_enforced' => 'Wymaga uwierzytelniania wieloetapowego',
    'role_external_auth_id' => 'Zewnętrzne identyfikatory uwierzytelniania',
    'role_system' => 'Uprawnienia systemowe',
    'role_manage_users' => 'Zarządzanie użytkownikami',
    'role_manage_roles' => 'Zarządzanie rolami i uprawnieniami ról',
    'role_manage_entity_permissions' => 'Zarządzanie uprawnieniami książek, rozdziałów i stron',
    'role_manage_own_entity_permissions' => 'Zarządzanie uprawnieniami własnych książek, rozdziałów i stron',
    'role_manage_page_templates' => 'Zarządzaj szablonami stron',
    'role_access_api' => 'Dostęp do systemowego API',
    'role_manage_settings' => 'Zarządzanie ustawieniami aplikacji',
    'role_export_content' => 'Eksportuj zawartość',
    'role_editor_change' => 'Change page editor',
    'role_asset' => 'Zarządzanie zasobami',
    'roles_system_warning' => 'Pamiętaj, że dostęp do trzech powyższych uprawnień może pozwolić użytkownikowi na zmianę własnych uprawnień lub uprawnień innych osób w systemie. Przypisz tylko role z tymi uprawnieniami do zaufanych użytkowników.',
    'role_asset_desc' => 'Te ustawienia kontrolują zarządzanie zasobami systemu. Uprawnienia książek, rozdziałów i stron nadpisują te ustawienia.',
    'role_asset_admins' => 'Administratorzy mają automatycznie dostęp do wszystkich treści, ale te opcję mogą być pokazywać lub ukrywać opcje interfejsu użytkownika.',
    'role_all' => 'Wszyscy',
    'role_own' => 'Własne',
    'role_controlled_by_asset' => 'Kontrolowane przez zasób, do którego zostały udostępnione',
    'role_save' => 'Zapisz rolę',
    'role_update_success' => 'Rola zapisana pomyślnie',
    'role_users' => 'Użytkownicy w tej roli',
    'role_users_none' => 'Brak użytkowników zapisanych do tej roli',

    // Users
    'users' => 'Użytkownicy',
    'user_profile' => 'Profil użytkownika',
    'users_add_new' => 'Dodaj użytkownika',
    'users_search' => 'Wyszukaj użytkownika',
    'users_latest_activity' => 'Ostatnia aktywność',
    'users_details' => 'Szczegóły użytkownika',
    'users_details_desc' => 'Ustaw wyświetlaną nazwę i adres e-mail dla tego użytkownika. Adres e-mail zostanie wykorzystany do zalogowania się do aplikacji.',
    'users_details_desc_no_email' => 'Ustaw wyświetlaną nazwę dla tego użytkownika, aby inni mogli go rozpoznać.',
    'users_role' => 'Role użytkownika',
    'users_role_desc' => 'Wybierz role, do których ten użytkownik zostanie przypisany. Jeśli użytkownik jest przypisany do wielu ról, uprawnienia z tych ról zostaną nałożone i otrzyma wszystkie uprawnienia przypisanych ról.',
    'users_password' => 'Hasło użytkownika',
    'users_password_desc' => 'Ustaw hasło logowania do aplikacji. Hasło musi mieć przynajmniej 8 znaków.',
    'users_send_invite_text' => 'Możesz wybrać wysłanie do tego użytkownika wiadomości e-mail z zaproszeniem, która pozwala mu ustawić własne hasło, w przeciwnym razie możesz ustawić je samemu.',
    'users_send_invite_option' => 'Wyślij e-mail z zaproszeniem',
    'users_external_auth_id' => 'Zewnętrzne identyfikatory autentykacji',
    'users_external_auth_id_desc' => 'Jest to identyfikator używany do dopasowania tego użytkownika podczas komunikacji z zewnętrznym systemem uwierzytelniania.',
    'users_password_warning' => 'Wypełnij poniżej tylko jeśli chcesz zmienić swoje hasło:',
    'users_system_public' => 'Ten użytkownik reprezentuje każdego gościa odwiedzającego tę aplikację. Nie można się na niego zalogować, lecz jest przyznawany automatycznie.',
    'users_delete' => 'Usuń użytkownika',
    'users_delete_named' => 'Usuń :userName',
    'users_delete_warning' => 'To usunie użytkownika \':userName\' z systemu.',
    'users_delete_confirm' => 'Czy na pewno chcesz usunąć tego użytkownika?',
    'users_migrate_ownership' => 'Migracja Własności',
    'users_migrate_ownership_desc' => 'Wybierz użytkownika tutaj, jeśli chcesz, aby inny użytkownik stał się właścicielem wszystkich elementów będących obecnie w posiadaniu tego użytkownika.',
    'users_none_selected' => 'Nie wybrano użytkownika',
    'users_edit' => 'Edytuj użytkownika',
    'users_edit_profile' => 'Edytuj profil',
    'users_avatar' => 'Avatar użytkownika',
    'users_avatar_desc' => 'Ten obrazek powinien posiadać wymiary 256x256px.',
    'users_preferred_language' => 'Preferowany język',
    'users_preferred_language_desc' => 'Opcja ta zmieni język używany w interfejsie użytkownika aplikacji. Nie wpłynie to na zawartość stworzoną przez użytkownika.',
    'users_social_accounts' => 'Konta społecznościowe',
    'users_social_accounts_info' => 'Tutaj możesz połączyć kilka kont społecznościowych w celu łatwiejszego i szybszego logowania. Odłączenie konta tutaj nie autoryzowało dostępu. Odwołaj dostęp z ustawień profilu na podłączonym koncie społecznościowym.',
    'users_social_connect' => 'Podłącz konto',
    'users_social_disconnect' => 'Odłącz konto',
    'users_social_connected' => ':socialAccount zostało dodane do Twojego profilu.',
    'users_social_disconnected' => ':socialAccount zostało odłączone od Twojego profilu.',
    'users_api_tokens' => 'Tokeny API',
    'users_api_tokens_none' => 'Nie utworzono tokenów API dla tego użytkownika',
    'users_api_tokens_create' => 'Utwórz token',
    'users_api_tokens_expires' => 'Wygasa',
    'users_api_tokens_docs' => 'Dokumentacja API',
    'users_mfa' => 'Uwierzytelnianie wieloskładnikowe',
    'users_mfa_desc' => 'Skonfiguruj uwierzytelnianie wieloskładnikowe jako dodatkową warstwę bezpieczeństwa dla swojego konta użytkownika.',
    'users_mfa_x_methods' => ':count metoda skonfigurowana|:count metody skonfigurowane',
    'users_mfa_configure' => 'Konfiguruj metody',

    // API Tokens
    'user_api_token_create' => 'Utwórz klucz API',
    'user_api_token_name' => 'Nazwa',
    'user_api_token_name_desc' => 'Nadaj swojemu tokenowi czytelną nazwę jako opisującego jego cel.',
    'user_api_token_expiry' => 'Data ważności',
    'user_api_token_expiry_desc' => 'Ustaw datę, kiedy ten token wygasa. Po tej dacie żądania wykonane przy użyciu tego tokenu nie będą już działać. Pozostawienie tego pola pustego, ustawi ważność na 100 lat.',
    'user_api_token_create_secret_message' => 'Natychmiast po utworzeniu tego tokenu zostanie wygenerowany i wyświetlony "Identyfikator tokenu"" i "Token Secret". Sekret zostanie wyświetlony tylko raz, więc przed kontynuacją upewnij się, że zostanie on skopiowany w bezpiecznie miejsce.',
    'user_api_token_create_success' => 'Klucz API został poprawnie wygenerowany',
    'user_api_token_update_success' => 'Klucz API został poprawnie zaktualizowany',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Jest to nieedytowalny identyfikator wygenerowany przez system dla tego tokenu, który musi być dostarczony w żądaniach API.',
    'user_api_token_secret' => 'Token Api',
    'user_api_token_secret_desc' => 'To jest wygenerowany przez system sekretny token, który musi być dostarczony w żądaniach API. Token zostanie wyświetlany tylko raz, więc skopiuj go w bezpiecznie miejsce.',
    'user_api_token_created' => 'Token utworzony :timeAgo',
    'user_api_token_updated' => 'Token zaktualizowany :timeAgo',
    'user_api_token_delete' => 'Usuń token',
    'user_api_token_delete_warning' => 'Spowoduje to całkowite usunięcie tokenu API o nazwie \':tokenName\' z systemu.',
    'user_api_token_delete_confirm' => 'Czy jesteś pewien, że chcesz usunąć ten token?',
    'user_api_token_delete_success' => 'Token API został poprawnie usunięty',

    // Webhooks
    'webhooks' => 'Webhooki',
    'webhooks_create' => 'Utwórz nowy Webhook',
    'webhooks_none_created' => 'Nie utworzono jeszcze żadnych webhooków.',
    'webhooks_edit' => 'Edytuj Webhook',
    'webhooks_save' => 'Zapisz Webhook',
    'webhooks_details' => 'Szczegóły Webhooka',
    'webhooks_details_desc' => 'Podaj przyjazną nazwę i punkt końcowy POST jako adres docelowy wysłania dla danych webhooka.',
    'webhooks_events' => 'Zdarzenia Webhook',
    'webhooks_events_desc' => 'Zaznacz wszystkie zdarzenia, które powinny wyzwalać wywołanie tego webhooka.',
    'webhooks_events_warning' => 'Pamiętaj, że te zdarzenia będą wyzwalane dla wszystkich wybranych wydarzeń, nawet jeśli zostaną zastosowane niestandardowe uprawnienia. Upewnij się, że korzystanie z tego webhooka nie spowoduje ujawnienia poufnych treści.',
    'webhooks_events_all' => 'Wszystkie zdarzenia systemowe',
    'webhooks_name' => 'Nazwa Webhooka',
    'webhooks_timeout' => 'Limit czasu żądania Webhooka (w sekundach)',
    'webhooks_endpoint' => 'Punkt Końcowy Webhooka',
    'webhooks_active' => 'Webhook Aktywny',
    'webhook_events_table_header' => 'Zdarzenia',
    'webhooks_delete' => 'Usuń Webhook',
    'webhooks_delete_warning' => 'Spowoduje to całkowite usunięcie z systemu tego webhooka o nazwie \':webhookName\'.',
    'webhooks_delete_confirm' => 'Czy na pewno chcesz usunąć ten webhook?',
    'webhooks_format_example' => 'Przykład Formatu Webhooka',
    'webhooks_format_example_desc' => 'Dane webhooka są wysyłane jako zapytanie POST do skonfigurowanego punktu końcowego jako JSON zgodnie z poniższym formatem. Właściwości "related_item" i "url" są opcjonalne i będą zależeć od typu wywołanego zdarzenia.',
    'webhooks_status' => 'Status Webhooka',
    'webhooks_last_called' => 'Ostatnio Wyzwolony:',
    'webhooks_last_errored' => 'Ostatni błąd:',
    'webhooks_last_error_message' => 'Ostatni komunikat o błędzie:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Kataloński',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Estoński',
        'eu' => 'Euskara',
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
