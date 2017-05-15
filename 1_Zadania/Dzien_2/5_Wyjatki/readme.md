#  Wyjątki

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**# Zaawansowane PHP

#### Zadanie 1 - rozwiązywane z wykładowcą

1. Skopiuj rozwiązania zadania 1 z wyrażeń regularnych do pliku `zadanie1.php`
2. Zmień rozwiązania tak, aby w przypadku niespełnienia odpowiedniego warunku funkcja rzucała odpowiedni wyjątek. 
3. Następnie popraw formularz w taki sposób, aby te wyjątki obsługiwał.

#### Zadanie 2

1. W pliku `zadanie2.php` znajduje się funkcja `divide($divider, $dividend)`, która zwraca różne rodzaje wyjątków.  
   * `InvalidArgumentException`, gdy próbujemy dzielić przez `0`
   * `OutOfRangeException`, gdy próbujemy dzielić przez liczbę ujemną
   Kolejna funkcja korzysta z niej w celu wyświetlenia wyniku dzielenia losowej liczby przez `5` lub `0`.
2. Zmodyfikuj ją w ten sposób żeby nie przerywała swojego działania w chwili rzucenia wyjątku przez wykorzystywaną do dzielenia
   funkcję `divide()`.
3. Na koniec wyświetl informację na stronie ile razy wystąpił każdy z wyjątków. 

