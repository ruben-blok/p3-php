# Opdracht 32 - SQL WHERE Clause

## Wat gaat er mis?

De query mist een **WHERE-clausule**. Zonder WHERE wordt de UPDATE op **ALLE** rijen in de tabel uitgevoerd, niet alleen op het bedoelde record.

## Wat zou er gebeuren?

Als je deze query uitvoert:

```sql
UPDATE jouw_tabel SET titel = 'Test'
```

Dan wordt **iedere rij** in de tabel aangepast. Elke titel wordt overschreven met 'Test'. Dit is meestal niet de bedoeling en kan leiden tot permanent dataverlies.

## Waarom is dit gevaarlijk?

- Alle gegevens worden in één keer overschreven
- Er is geen manier om de oude waarden terug te halen (tenzij er een backup is)
- Het is een veelgemaakte fout die makkelijk te voorkomen is

## Correcte query

```sql
UPDATE jouw_tabel SET titel = 'Test' WHERE id = 1;
```

Met een WHERE-clausule met een specifieke ID wordt alleen de bedoelde rij aangepast.
