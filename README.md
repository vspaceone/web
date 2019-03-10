# vspace.one landing page
This repo is used to create the landing page at [vspace.one](http://vspace.one).

## contrib
We use pull requests for every change that may be discuable or damage the page view. We also provide a beta version where changes get tested at [beta.vspace.one](http://beta.vspace.one). The beta page is mirroring the beta branch every hour. The landing page is pulled from the master branch, so keep this in mind when pushing something to it

## Events
Events could be loaded from /events.json in the following format.
```
[
  {
    "title":"Plenum",
    "start":"2019-03-12T19:00:00+01:00",
    "end":"2019-03-12T21:00:00+01:00",
    "loc1":"vspace.one",
    "loc2":"Wilhelm-Binderstraße 19",
    "loc3":"78048 Villingen-Schwenningen",
    "price":0.0,
    "desc":"Wir treffen uns zum Plenum. Hier werden diverse Dinge aus dem Hackerspace-Alltag besprochen und kleinere Abstimmungen durchgeführt. Aber dennoch ist auch hier jeder herzlich willkommen vorbeizuschauen.",
    "link":"https://wiki.vspace.one/doku.php?id=treffen:plenum_2019_03_12",
    "download":""
  }
]
```
It's a array of all upcoming events. Most attributes should be self-explaining. Price is a float in euro.

## licence
