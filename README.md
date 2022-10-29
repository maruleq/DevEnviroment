# Środowisko pracy


# Wymagania stanowiska

- System operacyjny Windows/Linux/MacOS
- Docker - najnowsza wersja

# Tworzenie własnych zmiennych środowiskowych

Dodawanie własnych zmiennych środowiskowych jest możliwe po utworzeniu pliku konfiguracyjnego ```.env``` w lokalizacji ```site/```. Przykład w pliku ```.env.example```

# Dostęp do Bazy Danych

zmienne ustawione dla kontenerów dockera są zapisane w pliku docker.sh

# Uruchamianie

- W lokalizacji ```site/``` tworzymy plik konfiguracyjny ```.env``` dla własnych zmiennych środowiskowych,

- W lokalizacji ```site/``` instalujemy zależności composera ```composer install```

- W głównej lokalizacji projektu uruchamiamy projekt ```sh ./docker-start.sh``` lub zatrzymujemy projekt ```sh ./docker-stop.sh```










