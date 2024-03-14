
<?php


/*impostiamo:
*   - le sessioni possono essere trasmesse solo attraverso i cookie 
*   - le sessioni dovranno rispettare tutte le regole di restrizione*/

    ini_set('session.use_only_cookies', 1); 
    ini_set('session.use_strict_mode', 1);


session_set_cookie_params([
    'lifetime' => 1800,         /* 30 minuti */
    'domain' => 'localhost',    /* il dominio in cui il  cookie e' valido */
    'path' => '/',              /* valido su tutte le pagine del sito */
    'secure' => true,           /* cookie trasmesso solo su connessioni https */
    'httponly' => true          /* accessibile solo in http e non puo' essere modificato da js */

]);

