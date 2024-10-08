# Progetto PHP Albums JSON

## Descrizione del Progetto
Questo progetto è una semplice web application che permette agli utenti di visualizzare una lista di album memorizzata su un server. Gli utenti possono anche aggiungere nuovi album tramite un form. Gli album vengono memorizzati temporaneamente utilizzando le sessioni PHP, il che significa che sono visibili solo durante la sessione corrente e non vengono salvati in modo permanente. Questo progetto serve come esercizio per l'implementazione di un'API, la gestione dei dati di sessione e la costruzione di un'interfaccia dinamica utilizzando tecnologie web moderne.

## Stack
- **Frontend**: HTML, CSS, VueJS (importato tramite CDN), Bootstrap (per stili e layout)
- **Backend**: PHP (per gestire le richieste API e i dati di sessione)
- **Storage dei Dati**: File JSON (`dischi.json`) per inizializzare i dati degli album

## Struttura del Progetto
```
project-folder/
  ├── db/
  │     └── dischi.json    # File JSON contenente i dati iniziali degli album
  ├── functions/
  │     └── albums.php     # Script PHP per gestire il recupero e l'aggiunta degli album
  ├── js/
  │     └── app.js         # Script dell'applicazione VueJS
  ├── style/
  │     └── style.css      # Stili CSS personalizzati
  ├── assets/
  │     └── logo-small.svg # Logo utilizzato nell'header
  └── index.html           # File HTML principale
```

## Milestone e Funzionalità

### Milestone 1: Setup Struttura del Progetto
- Creata la struttura del progetto con le cartelle `db`, `functions`, `js` e `style`.
- Configurato il file `index.html` includendo Bootstrap, VueJS e Axios tramite CDN.
- Creato il file `dischi.json` nella cartella `db`, contenente i dati iniziali degli album.
- Testata la connessione con VueJS verificando che l'applicazione si montasse correttamente.

### Milestone 2: API PHP per la Gestione degli Album
- Creato uno script PHP (`albums.php`) per leggere la lista degli album da `dischi.json`.
- Aggiunta la funzionalità per gestire le richieste `POST` per aggiungere nuovi album.
- Utilizzate le sessioni PHP per gestire gli album all'interno della sessione corrente.

### Milestone 3: Visualizzazione degli Album
- Implementata la funzionalità per visualizzare gli album sulla pagina web utilizzando VueJS.
- Creata una griglia di card Bootstrap per ogni album.
- Aggiunto un pulsante su ogni card per mostrare ulteriori dettagli dell'album in una finestra modale.

### Milestone 4: Form per Aggiungere Album
- Aggiunto un form nell'header per permettere agli utenti di aggiungere nuovi album.
- Utilizzata un'icona (tramite Bootstrap Icons) per mostrare/nascondere il form, mantenendo l'interfaccia pulita.
- Il form è nascosto di default e appare quando l'utente clicca sull'icona "aggiungi".

### Milestone 5: Memorizzazione Temporanea degli Album con le Sessioni
- Modificato lo script PHP per memorizzare gli album utilizzando `$_SESSION`, garantendo che gli album aggiunti dall'utente siano visibili solo durante la sessione corrente.
- Ogni sessione mantiene il proprio set di album, e i dati non vengono salvati permanentemente nel file JSON.

## Dettagli Tecnici
### Sessioni in PHP
- Ho utilizzato le **sessioni PHP** per memorizzare temporaneamente gli album aggiunti dall'utente. Quando viene aggiunto un nuovo album, viene memorizzato nella variabile `$_SESSION['albums']`. Questo assicura che i dati siano disponibili solo durante la sessione corrente.
- La sessione viene avviata con `session_start()` in `albums.php`, e gli album vengono letti da `dischi.json` o dai dati di sessione.

### Aggiunta di Album
- Gli utenti possono aggiungere nuovi album utilizzando il form nell'header. I dati del form vengono inviati come richiesta `POST` a `albums.php`, che poi aggiunge il nuovo album alla sessione.
- Dopo aver aggiunto un album, l'utente viene reindirizzato alla pagina principale, dove il nuovo album viene visualizzato.

### Stile
- Utilizzato **Bootstrap** per il layout generale e il design responsive.
- Creato un tema scuro personalizzato utilizzando le proprietà CSS personalizzate definite nel selettore `:root` per regolare facilmente i colori in tutta l'app.
- Assicurato che il design rimanesse pulito e user-friendly, con un header, card e modali scuri.

### VueJS per la Logica del Frontend
- VueJS gestisce il rendering dinamico degli album, la visibilità del form e l'interazione con il backend.
- Gli album sono memorizzati in una proprietà `data`, e i cambiamenti si riflettono automaticamente nel DOM grazie alle capacità reattive di Vue.

## Utilizzo
1. **Clona il Repository**: Clona il progetto sulla tua macchina locale.
2. **Avvia il Server**: Utilizza un server locale come **MAMP** per servire il backend PHP.
3. **Apri `index.html`**: Apri il file `index.html` in un browser per visualizzare la lista degli album.
4. **Aggiungi Album**: Utilizza il form nell'header per aggiungere nuovi album. Gli album aggiunti sono visibili solo nella sessione corrente.

## Miglioramenti Futuri
- Aggiungere l'autenticazione degli utenti per avere aggiunte di album persistenti per ciascun utente.
- Utilizzare un vero database come **MySQL** per memorizzare gli album in modo permanente.
- Migliorare la validazione dei campi del form per assicurarsi che vengano inviati solo dati validi.
- Aggiungere feedback più dettagliati per l'utente quando vengono aggiunti album o si verificano errori.

## Conclusione
Questo progetto ha fornito un'esperienza pratica nella creazione di una semplice API backend utilizzando PHP, nella gestione dei dati di sessione e nella costruzione di un frontend interattivo utilizzando VueJS e Bootstrap. Il focus principale è stato comprendere la memorizzazione temporanea dei dati dell'utente e lavorare con le sessioni.

Se hai domande o suggerimenti, non esitare a contattarmi o a creare un'issue nel repository!