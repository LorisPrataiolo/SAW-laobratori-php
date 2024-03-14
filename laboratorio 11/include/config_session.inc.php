
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


/********************** sicurezza sui cookie ************************/

// il cookie id verra' rigenerato ogni 30 minuti in modo tale
// da evitare eventuali attacchi


    session_start();

    if (isset($_SESSION["last_regeneration"])) {
        
        // rigeneriamo l'id di sessione e viene aggiornato il timestamp
        regenerate_session_id();


    }else {  // altrimenti ne creiamo una

       
        $interval = 60 * 30;


        // Verifica se è passato abbastanza tempo dall'ultima rigenerazione dell'ID della sessione

            if (time() -  $_SESSION["last_regeneration"] >= $interval)   {
                
                regenerate_session_id();
            }
    }


    function regenerate_session_id() {
        session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    }