#  Interfejsy, klasy abstrakcyjne i finalne

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 A - rozwiązywane z wykładowcą

Stwórz abstrakcyjną klasę `User` mającą:
1. Atrybuty `username`, `password` i `age` (zastanów się, jaki powinny mieć poziom dostępu).
2. Abstrakcyjną metodę `checkLogin`:
   * przyjmującą jako argumenty `username` i `password`
3. Publiczną metodę `setLogin`:
   * przyjmującą jako argument login
   * ustawiającą `username` na przekazaną wartość
4. Abstrakcyjną metodę: `setPassword`:
   * przyjmującą jako argument hasło
   * ta metoda będzie implementować różne sposoby sprawdzania hasła
4. Abstrakcyjną metodę: `setAge`:
   * przyjmującą jako argument wiek
5. Publiczną finalną metodę `login`L
   * przyjmującą jako argumenty `username` i `password`
   * sprawdzającą hasło za pomocą metody `checkLogin`
     
#### Zadanie 1 B - rozwiązywane z wykładowcą

Stwórz dwie klasy:  
* `Client`
* `Admin`  

będące rozszerzeniami klasy `User`, w których zaimplementujesz metody abstrakcyjne.  

Klasy mają działać w następujący sposób:  
1. Tworzymy obiekt klasy
2. Ustawiamy seterami odpowiednie wartości loginu, hasła (tutaj sprawdzamy jego poprawność) i wieku
3. Setter hasła ma zwrócić `false`, jeśli hasło nie spełnia warunków lub przekazany wiek nie jest liczbą całkowitą dodatnią
4. W tym momencie mamy obiekt z ustawionym loginem, hasłem i wiekiem.
5. Wywołujemy metodę `login`, przekazując jej login i hasło, będzie ona zwracać `true` lub `false`
6. W metodzie `login` ma zostać wywołana metoda `checkLogin`,  
   która sprawdzi poprawność loginu i hasła  
   oraz ewentualnie pozostałych warunków logowania i zwróci `true` lub `false`

W klasie `Admin` logowanie powinno spełniać następujące wymagania:
1. Użytkownik podał prawidłowy login.
2. Hasło miało minimum `10` znaków i było prawidłowe,  
   warunek długości hasła sprawdź w metodzie `setPassword`
3. Adres IP osoby logującej musi zaczynać się od `127` **lub** `192`

W klasie `Client` logowanie powinno wymagać, aby:
  1. Użytkownik podał prawidłowy login
  2. Hasło miało minimum `8` znaków i było prawidłowe,  
     warunek długości hasła sprawdź w metodzie `setPassword`
  3. Użytkownik miał minimum `18` lat.

Stwórz obiekty każdej z klas i ustaw loginy oraz hasła.  
Sprawdź, czy logowanie działa.  

Logowanie powinno wymagać prawidłowego hasła i po `3` nieudanych próbach z rzędu konto powinno być blokowane (metoda `login` zawsze wtedy zwraca `false`).
Zastanów się jak przechowywać błędne logowania.

Dodatkowo sprawdź poniższy scenariusz:  
1. Stwórz obiekt użytkownika, ustaw odpowiednie atrybuty
2. Wykonaj `2` błędne próby logowania
3. Wykonaj prawidłową próbę logowania
4. Wykonaj błędną próbę logowania
5. Sprawdź czy konto jest zablokowane, nie powinno być.

#### Zadanie 2

1. Stwórz klasę `UserSet` reprezentującą zbiór użytkowników klasy `Client`.
2. Dla nowo stworzonej klasy zaimplementuj metodę `add` przyjmującą jako argument obiekt klasy `Client`, nie może być możliwości dodania obiektu innej klasy.
3. Zaimplementuj dla tej klasy wbudowany w PHP interfejs [Iterator][iterator], który podczas iteracji po obiekcie spowoduje wyświetlenie loginów i haseł kolejnych użytkowników.
4. Dodaj metodę `showUserByPassword` przyjmującą jako argument hasło i zwracającą wszystkich użytkowników mogących się zalogować danym hasłem, wykorzystaj pętlę `foreach`.

#### Zadanie 3

1. Stwórz interfejs o nazwie `Url` służący do parsowania adresu URL w celu uzyskania parametrów przekazanych metodą `GET`
2. Interfejs powinien zawierać konstruktor z jednym argumentem `$url` - adresem do sparsowania oraz metodę publiczną `getParam($name)`  
   która ma zwrócić wartość parametru o nazwie `$name` wyciągniętą z `$url`
3. Następnie stwórz klasę `StandardUrl`, w której zaimplementujesz interfejs.  
   Jej zadaniem będzie sparsowanie standardowego url np. ``url_example.php?param1=99&param2=string`` w taki sposób żeby za pomocą metody  
   `getParam('param1')` uzyskać `99` itd.
4. W momencie gdy klasa będzie działała prawidłowo utwórz plik `url_example.php` w którym dołączysz klasę z interfejsem.
5. W pliku stwórz instancję obiektu `StandardUrl` przekazując w konstruktorze przykładowego adresu URL (może być jak w przykładzie).
6. Następnie wyświetl listę z nazwami wszystkich parametrów i ich wartościami.

<!-- Links -->
[iterator]: https://secure.php.net/manual/pl/class.iterator.php