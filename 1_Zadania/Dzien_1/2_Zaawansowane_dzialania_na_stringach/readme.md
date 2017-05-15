#  Zaawansowane działanie na stringach

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**# Zaawansowane PHP

#### Zadanie 1

Napisz trzy funkcje. Każda z nich powinna przyjmować adres email (napis w postaci `imię.nazwisko@firma.com.pl`) i zwracać:
1. Imię i nazwisko wyciągnięte z maila. Pamiętaj, że zarówno imię, jak i nazwisko rozpoczynają się dużą literą.
2. Nazwę firmy i nazwisko.
3. Inicjały danej osoby.

```php
echo function1('jan.kowalski@company.com.pl');//Jan Kowalski
echo function2('jan.kowalski@company.com.pl');//Company Kowalski
echo function3('jan.kowalski@company.com.pl');//J.K.
```

Przetestuj swoje funkcje na kilku różnych mailach.

#### Zadanie 2

Napisz funkcję, która powinna przyjmować jako argument adres email (w postaci `imię.nazwisko@firma.com.pl`).  
Funkcja powinna **zwracać** tablicę z wszystkimi aliasami odpowiednio:  
* zaczynającymi się od `i.nazwisko@`
* zaczynającymi się od `nazwisko@`
* kończącymi się na `@firma.pl`
* kończącymi się na `@poczta.firma.pl`

```
input -> jan.kowalski@coderslab.com.pl
output -> j.kowalski@coderslab.com.pl, kowalski@coderslab.com.pl, jan.kowalski@coderslab.pl, jan.kowalski@poczta.coderslab.pl
```

Przetestuj swoją funkcję na kilku różnych mailach.