# Train Station

## Panoramica

Il progetto Train Station è un'applicazione web sviluppata utilizzando il framework PHP Laravel. L'applicazione fornisce una piattaforma per visualizzare informazioni in tempo reale sui treni in partenza, inclusi dettagli come l'azienda ferroviaria, le stazioni di partenza e di arrivo, gli orari di partenza e di arrivo, e lo stato del viaggio (in orario, ritardo, cancellato).

## Funzionalità

-   **Visualizzazione Treni:** Mostra una lista di card con i treni in partenza dalla data odierna, ciascuna con informazioni dettagliate e un'immagine rappresentativa della città di destinazione.
-   **Dati Dinamici:** I dati sono gestiti tramite un database MySQL e possono essere aggiornati tramite PhpMyAdmin per riflettere le modifiche in tempo reale.
-   **Interfaccia Utente Amichevole:** Le informazioni sui treni sono presentate in una serie di card ben organizzate e facili da leggere.

## Tecnologie Utilizzate

-   **Backend:** Laravel
-   **Frontend:** Blade (con Bootstrap per la stilizzazione)
-   **Database:** MySQL
-   **Controllo Versione:** Git

## Struttura del Progetto

-   `app/Models/Train.php` - Modello Eloquent per i treni.
-   `app/Http/Controllers/TrainController.php` - Controller per gestire la logica di visualizzazione dei treni.
-   `routes/web.php` - Definizione delle route dell'applicazione.
-   `resources/views/welcome.blade.php` - Vista principale che mostra la lista dei treni.
-   `database/migrations/` - Contiene le migrazioni per creare e modificare le tabelle del database.
-   `public/css/` e `public/js/` - Cartelle contenenti gli asset CSS e JavaScript.
