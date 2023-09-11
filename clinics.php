<?php 

$connection = mysqli_connect('localhost', 'root', '', 'clinics');

$query = "INSERT INTO `clinics` (`name`, `adress`, `phone`, `location_1`,`location_2`) ";
$query .="VALUES 
(' 	Assmed	 ',' 	Azərbaycan Respublikası, Bakı, Qaradağ rayonu, Lökbatan qəsəbəsi, Ülvi Bünyatzadə küçəsi, 3 , AZ1000	 ','	994 12 445 17 17	 ','	40.32040127902922	 ','	49.73239062670682	 '),
(' 	Azərbaycan Respublikası Dövlət Gömrük Komitəsi Tibbi Xidmət İdarəsinin Mərkəzi Hospitalı	 ',' 	Azərbaycan Respublikası, Bakı, Yasamal r-nu, Kazım Kazımzadə 118, AZ1000	 ','	994 12 539 78 04	 ','	40.378194352337566	 ','	49.81880619828199	 '),
(' 	Caspian International Hospital	 ',' 	Azərbaycan Respublikası, Bakı, Badamdar rayonu, 1-ci yaşayış massivi 31, AZ1000	 ','	994 12 502 50 15	 ','	49.8093058	 ','	40.3530028	 '),
(' 	Funda Klinikası	 ',' 	Azərbaycan Respublikası, Bakı, H.Hidayətzadə küç., 163, AZ1000	 ','	994 12 567 55 82	 ','	40.39418338495211	 ','	49.87224092121024	 '),
(' 	Liman Klinikası	 ',' 	Azərbaycan Respublikası, Sumqayıt, S.Vurğun küç., 35A, AZ5000	 ','	994 18 644 61 51	 ','	40.580462978694676	 ','	49.68998816910539	 '),
(' 	MediClub Georgia	 ',' 	Gürcüstan, Taşkent küç.22	 ','		 ','		 ','		 '),
(' 	Mərkəzi Neftçilər Xəstəxanasi	 ',' 	Azərbaycan Respublikası, Bakı, Y.Səfərov küç. 17, AZ1000	 ','	994 12 404 28 00	 ','	40.380976918732095	 ','	49.863810771068195	 '),
(' 	Astoriya Tibb Mərkəzi (German Medical Center) (ancaq doğuş yardımı)	 ',' 	Azərbaycan Respublikası, Bakı, İsmayılbəy Qutqaşeni küç., 50, AZ1000	 ','	994 12 538 66 60	 ','	40.3696494599048	 ','	49.8212431712285	 '),
(' 	Baku City Hospital	 ',' 	Azərbaycan Respublikası, Bakı, Yusif Vəzir Çəmənzəminli küç., 18, AZ1000	 ','	994 12 440 51 11	 ','	40.401810288517744	 ','	49.833352130332955	 '),
(' 	Celamig Oftalmoloji Klinikası	 ',' 	Azərbaycan Respublikası, Bakı, Nəsimi r-nu, Süleyman Rəhimov küç. 126, AZ1000	 ','	994 12 537 11 01	 ','	40.3783488253587	 ','	49.8378236588824	 '),
(' 	Gəncə Beynalxalq Xəstəxanası	 ',' 	Azərbaycan Respublikası, Gəncə, Heydər Əliyev pr. 60D/E/F, AZ2000	 ','	994 22 255 38 38	 ','	40.6948521021965	 ','	46.3665090837076	 '),
(' 	MedEra Hospital	 ',' 	Azərbaycan Respublikası, Bakı, 8 mkr., Ə.Naxçıvani küç.,53, AZ1000	 ','	994 12 531 03 03	 ','	40.416438912130815	 ','	49.84153178340187	 '),
(' 	MediClub MMM	 ',' 	Azərbaycan Respublikası, Bakı, Səbail r-nu, Üzəyir Hacibəyov küç. 45, AZ1000	 ','	994 12 497 09 11	 ','	40.3760681236773	 ','	49.856040386159556	 '),
(' 	Milli İdman Tibb və Reabilitasiya Elmi-Praktiki İnstitutu	 ',' 	Azərbaycan Respublikası, Bakı, Nərimanov rayonu, Olimpiya küç., 4A, AZ1000	 ','	994 55 221 00 63	 ','	40.398933722025774	 ','	49.85546771990948	 '),
(' 	Alyans Klinika (Şəki)	 ',' 	Azərbaycan Respublikası, Şəki,  Mirzə Fətəli Axundov küç, ev 351A, AZ5500	 ','	994 55 925 55 11	 ','	41.19790738200594	 ','	47.1786367914407	 '),
(' 	Avrasiya klinikasi (Binəqədi)	 ',' 	Azərbaycan Respublikası, Bakı, Binəqədi r-nu, Azadlıq 189, AZ1000	 ','	994 12 563 00 25	 ','	40.42460389405887	 ','	49.83760765020075	 '),
(' 	BONUM MEDİCAL	 ',' 	Azərbaycan Respublikası, Şəki,  Zərifə ƏLiyeva küç, 90, AZ5500	 ','	994 50 663 00 88	 ','	40.2206569521924	 ','	49.5743047310106	 '),
(' 	Euromed	 ',' 	Azərbaycan Respublikası, Bakı,  Cavadxan küç., 17A, AZ1000	 ','	994 12 431 95 98	 ','	40.41210901015543	 ','	49.81460732329853	 '),
(' 	Leyla Medical Center	 ',' 	Azərbaycan Respublikası, Bakı, Y.Səfərov küç.,19, AZ1000	 ','	994 12 496 51 05	 ','	40.382012841323196	 ','	49.863398073728966	 '),
(' 	MediClub Gəncə	 ',' 	Azərbaycan Respublikası, Gəncə, M.Abbaszadə küç., 47, AZ2000	 ','	994 22 257 82 08	 ','	40.670679895328306	 ','	46.361963601842625	 '),
(' 	Mərkəzi Klinik Xəstaxanası	 ',' 	Azərbaycan Respublikası, Bakı, Z.Əliyeva küç. 5, AZ1000	 ','	994 12 437 63 91	 ','	40.361441226156224	 ','	49.82482127611631	 '),
(' 	Ömürdən Pay	 ',' 	Azərbaycan Respublikası, Bərdə, Nərimanov küç., 2, AZ0900	 ','	994 20 205 31 00	 ','	40.3739433064356	 ','	47.1214125700385	 '),
(' 	ATU Tədris Cərrahiyyə klinikası	 ',' 	Azərbaycan Respublikası, Bakı, Nəsimi r-nu, 155 Səməd Vurğun, AZ1000	 ','	994 12 449 82 54	 ','	40.392423337412446	 ','	49.833976713389056	 '),
(' 	Baku Medikal Plaza	 ',' 	Azərbaycan Respublikası, Bakı, Babək pr-ti 92N Xətai r-nu, AZ1142	 ','	994 12 404 41 90	 ','	49.9649124	 ','	40.3944833	 '),
(' 	Dialab	 ',' 	Azərbaycan Respublikası, Bakı, İstiqlaliyyət küç., 31, AZ1000	 ','	994 12 492 20 56	 ','	40.36568485198131	 ','	49.83050131356653	 '),
(' 	İnam Tibb Mərkəzi	 ',' 	Azərbaycan Respublikası, Bakı, Dilarə Əliyeva 175, AZ1000	 ','	994 12 566 98 77	 ','	40.3757734085903	 ','	49.8390016041986	 '),
(' 	Medican Hospital Lənkəran	 ',' 	Azərbaycan Respublikası, Lənkəran, 20 Yanvar 71, AZ4200	 ','	994 25 255 02 98	 ','	38.75477054898792	 ','	48.83749752419758	 '),
(' 	Medisan	 ',' 	Azərbaycan Respublikası, İmişli, H.Əliyev prospekti 131, AZ3000	 ','	994 21 246 10 70	 ','	39.8696032994925	 ','	48.0599886978573	 '),
(' 	Naxçıvan Diaqnostika-Müalicə Məkəzı	 ',' 	Azərbaycan Respublikası, Naxçıvan, Ə.Əliyev küçəsi,66, AZ7000	 ','	994 70 656 78 25	 ','	39.21669215647405	 ','	45.420613334929804	 '),
(' 	REGİONAL HOSPİTAL MMC	 ',' 	Azərbaycan Respublikası, Mingəçevir,  D.Əliyeva küç., 2C, AZ4500	 ','	994 70 328 77 71	 ','	40.7752494213295	 ','	47.0482523784252	 '),
(' 	ATU Tədris Terapevtik Klinikasi	 ',' 	Azərbaycan Respublikası, Bakı, Mərdanov Qardaşları küç., 100, AZ1000	 ','	994 12 441 33 18	 ','	40.396773943387394	 ','	49.83169854142747	 '),
(' 	Bioloji Təbabət MMC, Göyçay 	 ',' 	Azərbaycan Respublikası, Göyçay, M. Muradov küç, 12, AZ2300	 ','	994 50 246 14 11	 ','	40.65267127653047	 ','	47.74018865403999	 '),
(' 	Dövlət Təhlükəsizlik Xidmətinin Hospitalı (DTX)	 ',' 	Azərbaycan Respublikası, Bakı, Yasamal r-nu, Badamdar qəsəbəsi, Məktəbli k-si 1, AZ1000	 ','	994 12 405 79 11	 ','	49.8190177,17	 ','	40.3642609	 '),
(' 	LABMED TİBB MƏRKƏZİ (Qazax)	 ',' Azərbaycan Respublikası, Qazax,  Heydər Əliyev 134.
, AZ3500	 ','	994 50 385 17 37	 ','	41.0935537211826	 ','	45.3692075357829	 '),
(' 	MediClub - hospital	 ',' 	Azərbaycan Respublikası, Bakı, Yasamal r-nu, Əlövsət Quliyev küç. 73, AZ1000	 ','	994 12 493 51 52	 ','	40.37351761969728	 ','	49.83448431388822	 '),
(' 	Medistyle	 ',' 	Azərbaycan Respublikası, Bakı, Akademik Həsən Əliyev küç., 116, AZ1000	 ','	994 12 465 73 79	 ','	40.40701990518998	 ','	49.863225545747724	 '),
(' 	OKİ Klinikası	 ',' 	Azərbaycan Respublikası, Qusar, F.Musayev küç., 27, AZ3800	 ','	994 23 385 29 15	 ','	41.42577863187099	 ','	48.43068533413042	 '),
(' 	Respublika Diaqnostika Mərkəzi (RDM)	 ',' 	Azərbaycan Respublikası, Bakı, Tbilisi pr., 147, AZ1000	 ','	994 12 530 07 53	 ','	40.39979150227317	 ','	49.810396180866	 '),
(' 	Audiomed Eşitmə Mərkəzi	 ',' 	Azərbaycan Respublikası, Bakı, Xan Şuşinski 73,inqlab küç ilə kəsişmə , AZ1000	 ','	994 12 510 42 82	 ','	40.39987771089565	 ','	49.83531992500204	 '),
(' 	Bioloji Təbabət MMC, Masalli	 ',' 	Azərbaycan Respublikası, Masallı, E. Hüseynov küç., AZ4400	 ','	994 55 532 89 88	 ','	39.022252352477715	 ','	48.680223701847716	 '),
(' 	Əhmədli Tibb Mərkəzi (EskulapMed)	 ',' 	Azərbaycan Respublikası, Bakı,  R.Quliyev 65, AZ1000	 ','	994 12 471 48 41	 ','	40.3729283210337	 ','	49.94049818008492	 '),
(' 	LABSTYLE  MMC	 ',' 	Azərbaycan Respublikası, Zaqatala,  Vidadi küç, 34, AZ6200	 ','	994 50 385 17 37	 ','	40.2206569521924	 ','	49.5743047310106	 '),
(' 	MediClub - Kids	 ',' 	Azərbaycan Respublikası, Bakı, Izzət Nəbiyev küç 30A, AZ1000	 ','	994 12 525 09 19	 ','	40.3589253516272	 ','	49.822939348489925	 '),
(' 	Medservis	 ',' 	Azərbaycan Respublikası, Bakı,  Cəlil Məmmədquluzadə küç 3, AZ1000	 ','	994 12 596 68 44	 ','	40.37908177301388	 ','	49.83324243415053	 '),
(' 	Oksiqen Klinik Xəstəxanası	 ',' 	Azərbaycan Respublikası, Bakı, Təbriz küç., 1959, AZ1000	 ','	994 12 465 00 23	 ','	40.40364721432091	 ','	49.87000594700577	 '),
(' 	Sağlam Ailə Klinikası	 ',' 	Azərbaycan Respublikası, Bakı, Əhməd Rəcəbli küç., 3/10, AZ1000	 ','	994 12 910  	 ','	40.4094562209261	 ','	49.86202519027365	 '),
(' 	Şəfa Diaqnostika Mərkəzi (Mingəcevir)	 ',' 	Azərbaycan Respublikası, Mingəçevir, Xan Şuşinskiy küç., 2A, AZ4500	 ','	994 24 275 35 58	 ','	40.75939925915707	 ','	47.054668627126645	 '),
(' 	REFERANS QƏBƏLƏ TİBB MƏRKƏZİ MMC	 ',' 	Azərbaycan Respublikası, Qəbələ, Abbas Səhət küç, 25A, AZ3600	 ','	994 77 760 00 33	 ','	40.2206569521924	 ','	49.5743047310106	 '),
(' 	Səhhət Almaniya-Azərbaycan Tibb Mərkəzi	 ',' 	Azərbaycan Respublikası, Bakı, Q.Qarayev küç., 103, AZ1000	 ','	994 12 370 60 42	 ','	40.39598833745878	 ','	49.95395186944589	 '),
(' 	TÜRK AMERİCAN MEDİCAL CENTER	 ',' 	Azərbaycan Respublikası, Bakı, Y.V. Çəmənzəminli küç 18., AZ1000	 ','	994 12 541 58 45	 ','	40.40197584944894	 ','	49.83438902711888	 '),
(' 	Real Tibb Mərkəzi MMC	 ',' 	Azərbaycan Respublikası, Sumqayıt, 45-ci məh., 14, AZ5000	 ','	994 12 447 04 28	 ','	40.40185736506478	 ','	49.95328151901727	 '),
(' 	Sədəf klinikası	 ',' 	Azərbaycan Respublikası, Bakı, Qaradağ r-nu, Sahil qəs. B.Əliyev küç., 33, AZ1000	 ','	994 12 446 33 04	 ','	40.2206569521924	 ','	49.5743047310106	 '),
(' 	Şirvan Oil Tibb Məntəqəsi	 ',' 	Azərbaycan Respublikası, Şirvan, Gülbala-Şıxbala küç 74, AZ1800	 ','	994 55 640 41 48	 ','		 ','		 '),
(' 	YENI GENCE	 ',' 	Azərbaycan Respublikası, Gəncə, 28 may küç.
, AZ2000	 ','	994 22 254 07 00	 ','	40.68525710016973	 ','	46.33171202857606	 '),
(' 	Spero Hospital	 ',' 	Azərbaycan Respublikası, Bakı, Nəsimi r-nu, 20 Yanvar metrosu; 1 B, AZ1000	 ','	994 12 430 43 03	 ','	40.411583358451345	 ','	49.80378472022895	 '),
(' 	Uniclinic	 ',' 	Azərbaycan Respublikası, Bakı, B.Ağayev küç., 115, AZ1000	 ','	994 12 510 80 60	 ','	40.376867690678324	 ','	49.81829128933208	 '),
(' 	Sumqayıt Hospital	 ',' 	Azərbaycan Respublikası, Sumqayıt, 12 mkr. Çerkassi k.181, AZ5000	 ','	994 18 656 82 55	 ','	40.40185736506478	 ','	49.95328151901727	 '),
(' 	Vidadi Klinikasi	 ',' 	Azərbaycan Respublikası, Bakı, Ş.Məmmədov 4c,Vorovski qəs., AZ1000	 ','	994 12 563 53 07	 ','		 ','		 '),
(' 	Sağlam Həyat klinikası (Qəbələ)	 ',' 	Azərbaycan Respublikası, Qəbələ, H. Aslanov küç, AZ3600	 ','	994 70 633 03 60	 ','	40.97655224733721	 ','	47.85340802113553	 '),
(' 	Şəfa özəl tibb mərkəzi (Naxçıvan)	 ',' 	Azərbaycan Respublikası, Naxçıvan, Məmmədquluzadə 13, AZ7000	 ','	994 36 545 64 32	 ','	39.2010767969337	 ','	45.4115281110769	 '),
(' 	Xüsusi Müalicə Sağlamlıq Kompleksi (XMSK)	 ',' 	Azərbaycan Respublikası, Bakı, Badamdar şossesi, 31, AZ1000	 ','	994 12 498 85 07	 ','	40.35317714582818	 ','	49.80936425820475	 '),
(' 	VİTA MED  MMC - Biləsuvar	 ',' 	Azərbaycan Respublikası, Bakı, Biləsuvar şəhəri, 1 May küç, ev 7, AZ1000	 ','	994 51 795 00 08	 ','	39.45588825006662	 ','	48.54364630497959	 ')


";


$create__aptek = mysqli_query($connection, $query); 

if(!$create__aptek){
    die("QUERY FAILED ." . mysqli_error($connection));
}
