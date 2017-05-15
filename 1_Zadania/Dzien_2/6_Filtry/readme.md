#  Filtry

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**# Zaawansowane PHP

#### Zadanie 1

1. Napisz funkcję, która jako argument otrzyma tablicę z następującymi adresami:
   * MAIL,
   * URL,
   * IP.
2. Funkcja następnie sprawdzi za pomocą filtrów, czy podane dane są prawidłowe.
3. Funkcja ma **zwrócić** tablicę zawierającą:
   * pojedynczy klucz (czyli przekazany adres),
   * wartość ```true``` lub ```false```, w zależności od tego, czy adres jest prawidłowy czy nie.
   
Np.:

```php
$arrayWithAddr = ['jan.kowalski@gmail.com', 'http://www.coderslab.pl', '192.168.290.4'];
function1($arrayWithAddr);
//[
//    'jan.kowalski@gmail.com'  => true,
//    'http://www.coderslab.pl' => true,
//    '192.168.290.4'           => false,
//];
```
