# NFQ akademijos back-end PHP 1 namu darbai.

Autorius: Rokas Kliučinskas

Šioje užduotyje aprašiau 4 funkcijas skirtinguose 4 failuose su vienodu pavadinimu.
Visas jas iškviečiau viename faile "index.php". Tai padaryti man leido skirtingi "Namespaces".
Visos funkcijos atliko tą patį veiksmą ,tačiau buvo skirtingai aprašyti duomenų ir rezultatų reikalavimai.
Kad nereikėtų visų funkcijų itraukinėti ranka į "index.php" failą naudojau "composer autoload",
kuris surinko visas klases iš "src" folderio. Taip pat, kaip papildomą "composer" paketą įtraukiau "jakub-onderka/php-console-color",kuris atvaizduoja spalvotą tekstą konsolėje.

Funkcijos:

1. Esanti "index.php"- nenurodytas nei duodamų parametrų tipas,o ypač gražinamojo kintamojo tipas,todėl funkcija gražina "double" kintamąjį su kableliu : 6.2
2. "NotTyped" esanti "1.php" faile - nurodytas gražinamo kintamojo tipas "int", todėl funkcija sudėjus suapvalina ir gražina sveikąjį skaičių : 6
3. "Soft" esanti "2.php" faile - nurodytas ir duodamų parametrų ir gražinamo rezultato tipas "int", funkcija gautus skaičius suapvalina ir sudėjus gražina taip pat sveikąjį skaičių : 6
4. "Strict" esanti "3.php" faile - nurodytas ir duodamų parametrų tipas ir gražinamo rezultato tipas "int", taip pat failo viršuje nurodyta, kad visi kintamieji griežtai turi atitikti nurodytą tipą. Keista, bet ši funkcija priima "char" tipo parametrą '1'. Greičiausiai tai atitinką "strict_types" reikalavimus. Vienintilis skirtumas, jei paduodame ne skaičiaus simbolį, o raidę, tada išmetamas "exeption", ne taip kaip kituose variantuose, kur padavus raidę gražinamas rezultatas sudėjus visus skaičius ir ignoruojant raidę.
