# intsys2-fridge


Web-Application zur Verwaltung des Kühlschrankinhalts.

### Über diese Anwendung
Frontend und Backend sind in PHP geschrieben, als Webserver kommt "Apache" zum Einsatz, 
das DBMS ist "MariaDB". In das Projekt ist das Framework "Laravel" 
integriert. Laravel selbst bringt einige interessante Erweiterungen mit. Hier ein Überblick über Laravel und die anderen Komponenten:

* PHP: Scriptsprache
* Laravel: PHP-Framework (ORM, MVC, Templates, ...)
* Composer: Paketmanager für PHP (Pakete - können damit leicht ins Projekt eingebunden werden)
* npm: Paketmanager von Node.js (in unserem Kontext werden damit die *.scss Dateien kompiliert)
* Artisan: Command-Line-Tool von Laravel (z.B. können damit Teile des Codes generiert werden und die Datenbank migriert werden)
* Bootstrap (v4): Framework für's Frontend (enthält Icons, vordefinierte Elemente, macht die Anwendung responsive, ...)
* Font Awesome: Framework für Fonts und Icons
* SCSS: komfortablere Version von CSS (z.B. lassen sich Variablen erstellen, was CSS nicht unterstützt, CSS ist eine Teilmenge von SCSS)
* XAMPP: Programmpaket zur einfachen Installation und Verwaltung von WAMP (Windows + Apache + MariaDD + PHP)
* Git: Versionsverwaltungssoftware
* GitHub: Git-Hosting

### Installieren und Konfigurieren der nötigen Software

##### XAMPP
Download: https://www.apachefriends.org/de/index.html (in C:\ installieren)

##### Composer
Download: https://getcomposer.org/download/ (es gibt einen eigenen Installer für Windows)

##### npm
Download: https://nodejs.org/en/download/current/ ("Current" und nicht "LTS" auswählen)

##### Git 
Download:https://git-scm.com/downloads (bei den Optionen beim Installieren "Use Git and optional Unix Tools ..." wählen)

##### Git-Repository clonen
Nach der Installation öffen wir "Git CMD".

```
cd C:\xampp\htdocs
```

```
git clone https://github.com/cprohinig/intsys2-fridge.git

```

##### Pakete von Composer installieren
Im Repository sind die heruntergeladenen Pakete und Dependencies von Composer nicht enthalten, sie werden 
heruntergeladen und installiert:

```
composer update
```

##### Assets compilieren
Wir müssen uns alle benötigten Pakate für die Assets (CSS, Icons, Schriftarten, ...) holen und die *.scss Dateien compilieren:
```
npm install
```

```
npm run watch
```

##### Datenbank anlegen
Im "XAMPP Control Panel" werden Apache und MySQL hochgefahren. Unter http://localhost/phpmyadmin/ loggt man sich als root ein:
```
User accounts --> Add user account --> username: smartfridge --> password: smartfridge --> host: localhost
[x] Create database with same name and grant all privileges [x] Check all (Global privileges)
```

##### Konfiguration von Laravel
Die .env Datei im Root-Verzeichnis des Projekts enthält alle globalen Einstellungen für das Projekt.
Da sie auch Passwörter enthält, wird sie nicht mit Git getrackt und muss deshalb manuell wie folgt abgeändert werden:
```
APP_NAME=SmartFridge
APP_ENV=local
APP_KEY=base64:XR3Gia+1brrTd4YX3N0lB6kfp32YlswQRW0sWFyW+Lo=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smartfridge
DB_USERNAME=smartfridge
DB_PASSWORD=smartfridge

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}" 
```


##### Test
Nun sollte die Anwendung am localhost erreichbar sein: 
```
http://localhost/intsys2-fridge/public/ 
```

