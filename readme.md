1. Otworz plik publish/appsettings.json

Przykladowy plik: 
```
{
  "ConnectionString": "Server=DESKTOP-7CCCFC4\\INSERTGT;Database=nowa22;User Id=sa;Password=;",
  "SelloConfiguration": {
    "AuRegId": "1004",
    "AuSiteId": "1000",
    "AuDurationId": "1",
    "AuCountryId":"1",
    "AuRegionId": "1"
  },
  "Shops": [
    {
      "Name": "Wega",
      "CategoryWhiteList": [

      ],
      "ProducersWhiteList": [
        "gaia",
        "emili",
        "mat"
      ],
      "Url": "https://www.wega.wroc.pl/app_products_offers_index/get-xml/id/WsFa23b1203c",
      "Markup": "2.00" //CostPrice = Ceil(Price * Markup) - 0.01
    },
    {
      "Name": "Momtobe",
      "CategoryWhiteList": [

      ],
      "ProducersWhiteList": [
        "gaia",
        "emili",
        "mat"
      ],
      "Url": "https://momtobe.pl/wp-json/wc/store/products?per_page=100&page=",
      "Markup": "2.00" //CostPrice = Ceil(Price * Markup) - 0.01
    }
  ]
}
```

Gdy pojawi się błąd "Unable to connect to the database", to należy poprawić `ConnectionString`

2. Uruchom plik Sello.App.exe

3. Wciśnij `F2` i postępuj z instrukcjami


### Konfiguracja na Testowym Sello

```
"SelloConfiguration": {
	"AuRegId": "1002",
	"AuSiteId": "1001",
	"AuDurationId": "100100005",
	"AuCountryId":null,
	"AuRegionId": null
},
```