# vspace.one
This repo is used to create the page at [vspace.one](http://vspace.one).

## Deprecation notice
**THIS REPOSITORY IS DEPRECATED**
Please commit further changes to our website in the [vspaceone/web-react](https://github.com/vspaceone/web-react) repo.

## Contribution
We use pull requests for every change that may be discussable or may damage the page view. We also provide a beta version where changes get tested at [beta.vspace.one](http://beta.vspace.one). The beta page is mirroring the beta branch every hour. The [vspace.one](http://vspace.one)-page is pulled from the master branch, so keep this in mind when pushing something to it

## Events API
Events could be loaded from /events.json in the following format.
```
{
   "apiversion": "0.2",
   "events":[
      {
         "title":"Plenum",
         "start":"2019-04-09T19:00:00+01:00",
         "end":"2019-04-09T21:00:00+01:00",
         "loc1":"vspace.one",
         "loc2":"Wilhelm-Binderstraße 19",
         "loc3":"78048 Villingen-Schwenningen",
         "price":0.0,
         "desc":"Wir treffen uns zum Plenum. Hier werden diverse Dinge aus dem Hackerspace-Alltag besprochen und kleinere Abstimmungen durchgeführt. Aber dennoch ist auch hier jeder herzlich willkommen vorbeizuschauen.",
         "link":"https://wiki.vspace.one/doku.php?id=treffen:plenum_2019_03_12",
         "download":""
      },
      {
         "title":"Lightning Talks",
         "start":"2019-04-13T16:00:00+01:00",
         "end":"2019-04-13T19:00:00+01:00",
         "loc1":"vspace.one",
         "loc2":"Wilhelm-Binderstraße 19",
         "loc3":"78048 Villingen-Schwenningen",
         "price":0.0,
         "desc":"Am 13.April wird es im vspace.one eine Lightning-Talk-Session geben. Jeder ist herzlich eingeladen ein Thema vorzustellen. Das kann alles möglich sein; Projekte, Elektronik, Geräte, Softwaretools, Serverumstellungen, Experimente und soweiter. Wirklich alles! Ihr könnte auch erklären wie man Bier braut!<br>Ich freu mich auf euch und eure Vorträge (natürlich gerne auch ohne Folien).<br>Max",
         "link":"https://wiki.vspace.one/doku.php?id=treffen:lightningtalks_2019_04_13",
         "download":"download/20190413_LightningTalks.pdf"
      }
   ]
}
```
It's a array of all upcoming events. Most attributes should be self-explaining. Price is a float in euro.

## License
See [LICENSE.md](LICENSE.md).
