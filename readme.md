1. Otworz plik publish/appsettings.json

Przykladowy plik: 
```
{
  "ConnectionString": "Server=DESKTOP-7CCCFC4\\INSERTGT;Database=nowa;User Id=Username;Password=Password;",
  "CategoryWhiteList": [

  ],
  "ProducersWhiteList": [
    "Emili"
  ],
  "WegaUrl": "https://www.wega.wroc.pl/app_products_offers_index/get-xml/id/WsFa23b1203c",
  "Markup": "1.10" //CostPrice = Ceil(Price * Markup) - 0.01
}
```

Gdy pojawi się błąd "Unable to connect to the database", to należy poprawić `ConnectionString`

2. Uruchom plik Sello.App.exe

3. Wciśnij `F2` i postępuj z instrukcjami