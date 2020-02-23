# Order Tracker

Aplikacja odpowiada za statusowanie realizowanych zleceń. Łączy się z zewnętrznym serwerem Websocket, który pozwala na śledzenie aktualizacji statusów zamówień w czasie rzeczywistym.

### Instalacja na środowisku deweloperskim

Instalacja zależności comoposer:

```
composer install
```

Konfiguracja pliku .env
```
 cp .env.example .env
```

**_W pliku .env należy ustawić odpowiednie dane dostępu do Pusher itp._**

Uruchomienie kontenerów docker'owych
```
docker-compose up -d
```

Uruchomienie migracji bazodanowych
```
docker container exec ads-catalog-php-fpm php artisan migrate
```

Uzupełnienie bazy danych definicjami statusów
```
docker container exec ads-catalog-php-fpm php artisan db:seed
```

### Po skonfigurowaniu aplikacja powinna być dostępna na:

```
localhost:20005
```

### Aplikacja jest publicznie dostępna na:
http://api.grocelivery.eu/orders
