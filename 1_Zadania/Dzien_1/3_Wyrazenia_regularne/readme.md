#  Wyrażenia regularne

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**# Zaawansowane PHP

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcje `regexCheckPassword($password)` sprawdzającą, czy hasło spełnia wszystkie poniższe wymagania:
1. Ma od 10 do 15 znaków.
2. Ma minimum jedną małą literę.
3. Ma minimum jedną wielką literę.
4. Nie zawiera dwóch wielkich lub dwóch małych liter z rzędu.

Jeżeli hasło nie spełnia któregoś z wymagań, funkcja powinna zwrócić **false**.  
Napisz formularz, który będzie korzystał z podanej funkcji i sprawdzał poprawność hasła wyświetlając odpowiedni komunikat.

Np.:
```php
regexCheckPassword('abc');//false
regexCheckPassword('abcdefghijklmnop');//false
regexCheckPassword('abCdeFghijklmnop');//false
regexCheckPassword('aBpLoCkDmTgGgG');//true
```

#### Zadanie 2

Napisz funkcję `findCitations($text)`, która znajdzie w tekście wszystkie cytaty i zwróci je w postaci tablicy z napisami.  
Dla uproszczenia zakładamy że cytaty są otoczone cudzysłowami. 
Np.:
```php
$citeArray = findCitations('To jest jakiś tekst. "To jest cytat1". To jest dalsza część tekstu. "To jest drugi cytat".');
//Powinno zwrócić następującą tablicę:
print_r($citeArray);//["To jest cytat1", "To jest drugi cytat"]
```

### Zadanie 3

Napisz funkcję `cleanString($text)`, która wyczyści z napisu wszystkie znaki nie będące:  
* cyframi
* małymi lub dużymi literami
* znakami pokreślenia `_`

Do pomocy w testowaniu wyrażeń regularnych możesz skorzystać z [**regex101**][regex101]

Np.:
```php
cleanString('Single_Page*45(wow');//Single_Page45wow
cleanString('Is_thisStringCorrect');//Is_thisStringCorrect
cleanString('Another$%^&Wrong*6789String_____');//AnotherWrong6789String_____
```

<!-- Links -->
[regex101]: https://regex101.com/
