<?php

$vanliga_ratter = [
    "Köttbullar med potatismos", "Lasagne", "Pannbiff med lök", "Spaghetti Bolognese", "Kycklinggryta",
    "Fläskkotlett med gräddsås", "Fiskgratäng", "Oxfilé med bearnaisesås", "Grillad lax med hollandaisesås", "Kebabtallrik",
    "Raggmunk med fläsk", "Schnitzel med potatis", "Kåldolmar", "Ärtsoppa med pannkakor", "Korv stroganoff",
    "Lammgryta", "Biff Rydberg", "Pyttipanna", "Boeuf Bourguignon", "Coq au vin",
    "Grillad kyckling med pommes", "Hamburgare", "Stekt strömming med potatismos", "Tacos", "Chili con carne",
    "Stekt fläsk med löksås", "Renskav med potatispuré", "Gulaschsoppa", "Fish and chips", "Pulled pork",
    "Plankstek", "Paella med skaldjur", "Fläskfilé med pepparsås", "Kyckling fajitas", "Sushi med lax och tonfisk",
    "Rökt sik med pepparrotskräm", "Råraka med löjrom", "Köttfärslimpa", "Sjömansbiff", "Grillspett med tzatziki",
    "Pasta Carbonara", "Kantarelltoast med parmaskinka", "Stekt entrecôte med potatisgratäng", "Blodpudding med lingonsylt",
    "Surströmming med tunnbröd", "Grillad anka med apelsinsås", "Biff med bambuskott och ris", "Wallenbergare",
    "Laxpasta", "Kräftor med västerbottenostpaj", "Sill och potatis", "Kalops", "Rökt renkött med mandelpotatis",
    "Lammkotletter med rosmarinpotatis", "Pasta med räkor i vitlökssås", "Rödspätta med remouladsås", "Ankbröst med balsamicosås",
    "Viltgryta med kantareller", "Fläsklägg med rotmos", "Kalvstek med svampsås", "Grillad entrecôte med café de Paris-smör",
    "Ugnsbakad torsk med vitvinssås", "Sjömansgryta", "Pekinganka", "Souvlaki", "Osso buco",
    "Risotto med oxfilé", "Koreansk bibimbap", "Torskrygg med pepparrot", "Moules frites", "Pasta Vongole",
    "Stekt torsk med brynt smör", "Ramen med fläsk och ägg", "Spansk tortilla med chorizo", "Stekt gås med rödkål",
    "Kyckling curry", "Ceviche med torsk", "Hummer Thermidor", "Pasta puttanesca", "Langos med räkor och vitlökssås",
    "Burgundisk köttgryta", "Janssons frestelse", "Falukorv med stuvade makaroner", "Renskavsgryta",
    "Stekt lever med bacon och lök", "Tonfiskpasta", "Grekisk moussaka", "Friterad kyckling med sötsur sås",
    "Hjortfilé med viltsås", "Pulled beef tacos", "Kyckling tikka masala", "Pasta Alfredo med kyckling",
    "Salsiccia med linser", "Laxfilé med dillsås", "Fläskpannkaka", "Kyckling satay med jordnötssås",
    "Vitlöksräkor med pasta", "Skaldjurssoppa", "Pytt i panna med stekt ägg", "Höstgryta med högrev",
    "Lammstek med vitlökssmör"
];

$vegetariska_ratter = [
    "Vegetarisk lasagne", "Falafel med hummus", "Vegetarisk pyttipanna", "Grillad halloumi med grönsaker", "Linssoppa",
    "Vegetarisk chili", "Tofuwok med grönsaker", "Vegetarisk risotto", "Auberginegratäng", "Svampstroganoff",
    "Ratatouille", "Vegetarisk sushi", "Rödbetsbiffar", "Morotsbiffar", "Vegetarisk gulasch",
    "Kikärtsgryta", "Grönsakswok", "Vegetarisk ramen", "Tomatsoppa", "Broccolisoppa",
    "Fyllda paprikor med quinoa", "Grönsaksgratäng", "Vegetarisk pizza", "Baba ganoush", "Vegetariska tacos",
    "Blomkålssoppa", "Vegetarisk moussaka", "Vegetarisk pad thai", "Svampfylld cannelloni", "Grillad portobellosvamp",
    "Linsbiffar", "Quinoasallad", "Zucchinipasta med pesto", "Sötpotatisgryta", "Vegetarisk curry",
    "Tomat- och mozzarellasallad", "Vegetarisk paella", "Vegetarisk bolognese", "Vegetarisk burrito", "Pumpasoppa",
    "Chèvre chaud", "Böngryta", "Vegetarisk gnocchi", "Ugnsrostade rotsaker", "Vegetarisk nasi goreng",
    "Vegetariska dumplings", "Fyllda champinjoner", "Vegetarisk quesadilla", "Grön ärtsoppa",
    "Vegetarisk bibimbap", "Kikärtsbiffar", "Vegetarisk gyoza", "Vegetarisk enchilada", "Grillad majskolv",
    "Vegetarisk poke bowl", "Spenat- och ricottapaj", "Bulgursallad", "Vegetarisk tagine", "Auberginecurry",
    "Rödkålssallad", "Vegetarisk schnitzel", "Majssoppa", "Svamp- och risotto", "Vegetariska köttbullar",
    "Vegetarisk calzone", "Vegetarisk hotpot", "Miso soppa", "Grillad aubergine med tahini", "Vegetarisk pho",
    "Vegetarisk frittata", "Tofu tikka masala", "Vegetarisk samosa", "Rotsaksgratäng", "Vegetarisk ceviche",
    "Vegetarisk kebab", "Quorn stroganoff", "Spaghetti med svamp och vitlök", "Hummus med pitabröd",
    "Tofu satay", "Kronärtskockssoppa", "Vegetarisk japchae", "Lentil dhal", "Grillad zucchini med fetaost",
    "Vegetariska vårrullar", "Miso-glaserad aubergine", "Vegetarisk shepherd's pie", "Grillad blomkål",
    "Broccolipaj", "Vegetarisk bourguignon", "Bakad sötpotatis med fetaost"
];


// skickar in en vecka. kollar om det veckan redan är generad och finns i filen redan annars generas en ny för den veckan och skrivs ner i filen och sedan skicas tillbaka som resultat