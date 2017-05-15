# Zaawansowane PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

> Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**  

#### Zadanie 1

1. Poszczególne klasy, które utworzyłeś w zadaniu 1 [1_Interfejsy_klasy_abstrakcyjne_i_finalne][task1], znajdują się w plikach o nazwie odpowiadającej nazwie klasy, np. klasa `Admin` w pliku `Admin.php`.  
2. Wykorzystaj mechanizm `autoload` do ładowania tych klas w pliku `zadanie01.php`.
3. Dwie metody w nim zawarte powinny zwrócić instancje obiektów załadowanych automatycznie.  
4. Sprawdź czy Twój kod działa poprawnie.

#### Zadanie 2

1. Zaimplementuj w klasie `Enigma` metodę `getCode($code)`, która **zwróci** zmodyfikowany string `$code`.
2. Modyfikacja polega na przesunięciu każdej z liter o `4` pozycje w alfabecie.
3. W pliku `zadanie2.php` jest utworzona klasa oraz tablica z alfabetem.
4. W przypadku ostatnich liter alfabetu odliczanie należy kontynuować od początku tablicy.

#### Zadanie 3

1. W pliku `zadanie3.php` znajduje się klasa `Password` z jedna publiczna statyczna metoda `checkComplexity($pass)`.
2. Zaimplementuj opisane poniżej funkcjonalności w tej metodzie.
3. Metoda przyjmuje jako argument **string** i sprawdza jego złożoność.
4. Metoda **zwraca** `true` jeśli string spełnia warunki:  
   * długość minimum `6` liter **lub** cyfr  
   * zawiera **minimum** jedną wielką literę **i** minimum jedną cyfrę.  
5. W przeciwnym przypadku **zwraca** `false`.

Do pomocy w testowaniu wyrażeń regularnych możesz skorzystać z [**regex101**][regex101]

#### Zadanie 4

Korzystając z interfejsu napisanego w zadaniu 3 podczas zajęć [1_Interfejsy_klasy_abstrakcyjne_i_finalne][task1] (dokończ go samodzielnie jeśli nie udało się to w czasie zajęć):  
1. Dopisz nową klasę `ExtendedUrl`. Klasa ta ma zaimplementować interfejs oraz prawidłowo sparsować niestandardowy adres url wg. poniższego wzoru
   np. `url_example.php/param1.99/param2.string`
2. Dla przykładu z powyższym adresem przekazanie do metody argumentu `param1` ma zwrócić `99` a `param2` ma zwrócić `string`
3. W utworzonym pliku `url_example.php` dołącz plik z nową klasą, podmień instancje obiektu i przekazany do konstruktora url na ten nowy.

Czy lista parametrów i wartości wyświetla się prawidłowo pomimo zmiany typu obiektu?

<!-- Links -->
[regex101]: https://regex101.com/
[task1]: ../../1_Zadania/Dzien_1/1_Interfejsy_klasy_abstrakcyjne_i_finalne
