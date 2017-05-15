# Zaawansowane PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

> Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**  

#### Zadanie 1

1. W pliku `zadanie1.php` zaimplementuj funkcję o nazwie `createFile($name, $string)`.  
2. Jej zadaniem będzie zapisanie podanego argumentu `$string` w pliku o nazwie `$name` i rozszerzeniu `txt`. 
3. Plik należy utworzyć jeśli nie istnieje w katalogu bieżącym.
4. Jeśli plik istnieje, należy nadpisać jego zawartość tak aby zawierał **jedynie** podany `$string`.

#### Zadanie 2

1. Plik z zadaniem zawiera funkcję `circleArea($radius)` **zwracającą** zaokrągloną do części dziesiątych liczbę oznaczającą pole koła o podanym promieniu. 
2. Dopisz regułę sprawdzającą czy `$radius` jest większy od zera.  
3. W przypadku niepoprawności rzuć wyjątek zawierający komunikat `Liczba niepoprawna`.
4. Stwórz funkcję `handleRequest($rad)`, **w której wywołasz** funkcję `circleArea()` przekazując jako argument `$rad`  
5. Dopisz w funkcji `handleRequest` kod, który pomimo wywołania w niej funkcji `circleArea()` z błędnym promieniem, obsłuży wyjątek rzucony przez tą funkcję.  
6. Obsługa wyjątku polega na tym, iż funkcja zwraca wiadomość pobraną z przechwyconego wyjątku i na końcu (**po spacji!**) dopisuje liczbę `$rad`  
   np. `Liczba niepoprawna -1`. przy wywołaniu `handleRequest(-1)`
7. Jeśli liczba jest poprawna, funkcja `handleRequest` **zwraca** wynik obliczenia pola koła z użyciem funkcji `circleArea()`.

#### Zadanie 3

1. Napisz w pliku `zadanie03.php` funkcję o nazwie `whatVariable($variable)`, której zadaniem będzie rozpoznanie czy podana jako argument zmienna jest poprawnym adresem:  
   * `email` np. `jan.kowalski@coderslab.pl`
   * `url` np. `http://www.coderslab.pl`
   * `ip` np. `192.168.150.143`
2. Jeśli zmienna należy do jednego z powyższych typów funkcja ma **wyświetlić** string z jej nazwą (`email/url/ip`) (**pisaną małymi literami**).
3. W przeciwnym przypadku funkcja ma **zwrócić** string `Incorrect Input`.

#### Zadanie 4

1. W pliku z zadaniem `zadanie04.php` znajduje się formularz do wysyłania wiadomości email.
2. Formularz posiada `3` elementy `input`:  
   * Pierwsze zawiera adres nadawcy, który ma zostać wykorzystany w nagłówku email jako **adres do odpowiedzi**  
   * Drugi zawiera adres odbiorcy wiadomości  
   * Trzeci zawiera treść wiadomości email.
3. Po wypełnieniu danymi formularz musi umożliwić wysłanie wiadomości na podany adres.
4. Dopisz kod PHP, który zrealizuje to zadanie nie wykorzystując dodatkowych bibliotek (wolno użyć jedynie wbudowanej funkcji [mail()][mail]).

#### Zadanie 5

1. W pliku `zadanie05.php` zaimplementuj funkcję `showProduct($attribute, $path)`  
2. Zadaniem funkcji, która wykorzystując bibliotekę [XMLReader][XMLReader], jest sparsowanie pliku `XML` znajdującego się pod podaną ścieżką `$path`
3. Funkcja ma **zwrócić** tablicę:  
   * Tablica ma zawierać jako **klucz** wartość atrybutu `id` produktu natomiast jako **wartość** klucza, wartość atrybutu dla tego produktu `$attribute`
   * W przypadku nie znalezienie w żadnym z węzłów atrybutu o podanej nazwie ma **zwrócić** pustą tablicę.

<!-- Links -->
[mail]: http://php.net/manual/en/function.mail.php
[XMLReader]: http://php.net/manual/en/book.xmlreader.php