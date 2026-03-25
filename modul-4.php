<?php include 'commons/header.php'; ?>
<section>
    <div class="container-fluid section-padding page-box-con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-box-full-con">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-back-btn"> 
                                    <a href="<?= base_url() ?>" class="btn btn-light btn-exit-icon"> <span> <?php echo __("common.exit"); ?> </span></a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="page-title-del-box-full">
                                    <div class="page-title-del-box-left">
                                        <h1><?php echo __("modul4Page.main_title"); ?></h1>
                                    </div>
                                    <div class="page-title-del-box-right">
                                         <p id="slideCounter"><?php echo __("common.slide_part"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="step-slide-box-con">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="step-slide-box-slider">
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con p-0">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption top-slide-caption">
                                                                        <h2><?php echo __("modul4Page.screens.screen_01.title"); ?></h2> 
                                                                        <p> <?php echo __("modul4Page.screens.screen_01.description1"); ?> </p>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul4Page.screens.screen_01.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                            ?>
                                                                        </ul>
                                                                        <p><?php echo __("modul4Page.screens.screen_01.description2"); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-4-img-1.jpg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn">
                                                                        <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow"> <span> <?php echo __("common.next"); ?>  </span> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Hvorfor forebygge LEA og REDs?</h2>
                                                                        <ul>
                                                                            <li>REDs utvikler seg ofte gradvis noe som kan gjøre det vanskelig å oppdage</li>
                                                                            <li>REDs ødelegger både helse og prestasjon </li>
                                                                            <li>Tidlig innsats gir bedre effekt enn behandling i etterkant </li>
                                                                            <li>Mange unge utøvere, trenere og foreldre kjenner ikke signalene - det må vi endre </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img"> 
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Å kontinuerlig jobbe forebyggende med REDs er avgjørende for å beskytte kroppens utvikling, helse og prestasjon. </strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div> 
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Selvmonitorering - Lær deg å kjenne kroppen din</h2>
                                                                        <p>Å følge med på kroppens signaler er noe av det viktigste du kan gjøre for å oppdage lav energitilgjengelighet og REDs tidlig. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Følg gjerne med på de listede parametrene ukentlig (dette kan gjøres i en dagbok eller app) </strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                               <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Følg med på trender </h2>
                                                                        <p>Det er helt normalt å ha en dårlig dag eller uke. Det som er viktig, er å følge med på utviklingen over tid: </p>
                                                                        <ul>
                                                                            <li>Blir søvnen gradvis dårligere?</li>
                                                                            <li>Føler du deg sliten uke etter uke?</li>
                                                                            <li>Har humøret vært nede lenge?</li>
                                                                            <li>Har  menstruasjon uteblitt i flere måneder?</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Hvis negative trender vedvarer over mange uker bør det tas på alvor.</strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div> 
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Observer og tørr å stille spørsmål</h2>
                                                                        <h4>Trenere og foreldre har en viktig oppgave for å fange opp lav energitilgjengelighet. <br/> Sjekklisten under kan være et bra startpunkt for samtale. </h4>
                                                                        <ul>
                                                                            <li>Er jeg trøtt hele tiden til tross for tilstrekkelig mengde søvn?</li>
                                                                            <li>Er jeg mer støl enn vanlig og klarer ikke helt å restituere meg mellom treningsøktene?</li>
                                                                            <li>Har prestasjonsutviklingen min stagnert uten klare grunner?</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <ul>
                                                                            <li>Er jeg ofte lei meg eller har dårlig humør og/eller store humørsvingninger?</li>
                                                                            <li>Har jeg hatt gjentatte skader det siste året?</li>
                                                                            <li>Har jeg hatt tretthetsbrudd eller stressreaksjon?</li>
                                                                            <li>Er jeg ofte syk?</li>
                                                                            <li>Kvinner: Er menstruasjonen uregelemessig eller borte?</li>
                                                                            <li>Menn: Har jeg lavere sexlyst enn vanlig? Har morgenereksjon blitt sjeldnere?</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> NB! Hvert tegn kan ha andre årsaker enn REDs.</strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-7">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Ernæring - det handler om å fylle batteriet</h2>
                                                                        <p>Trener du mye vil du ha et større batteri du må fylle opp.</p>
                                                                        <p>For å fylle dette batteriet er det viktig at vi starter med de næringsrike matvarene; som inneholder byggeklossene vi trenger for et godt fundament. </p>
                                                                        <p>For en som trener mye og har et stort energibehov er det i perioder også viktig å legge til ekstra, for eksempel i form av bakst, barer, sportsdrikke, sjokolade, brus også videre.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-5">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-4-img-6.png"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Mat med mye energi er ikke “usunt” for deg som trener mye, det er nødvendig for å raskt få fylt på.</strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-5">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Øvelse - Trening og energibehov</h2>
                                                                        <p class="mb-1">Ta en titt på treningsuken din og spør deg selv:</p>
                                                                        <ul>
                                                                            <li>Hvilke dager er harde / med mye trening?</li>
                                                                            <li>Hvilke dager er rolige?</li>
                                                                            <li>Hvilke dager er det viktigst å være bevisst på å fylle på ekstra?</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-7">
                                                                    <div class="step-slide-box-caption">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                               <h4><strong> Denne øvelsen er det fint om utøver gjør sammen med forelder og trener .</strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div> 
                                                 <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Spis nok gjennom hele dagen</h2>
                                                                        <p class="mb-1">Mange unge utøvere </p>
                                                                        <ul>
                                                                            <li>Spiser for lite totalt</li>
                                                                            <li>Fordeler matinntaket dårlig i løpet av dagen</li>
                                                                            <li>Mangler riktig type næring rundt trening</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <ul>
                                                                            <li>Spis noe hver 3. - 4. time - ikke vent for lenge mellom måltidene</li>
                                                                            <li>Ha alltid et lite måltid klar til etter trening</li>
                                                                            <li>Ikke kutt ut karbohydrater - kroppen trenger dem, særlig under trening!</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Er det vanskelig å få i seg mat om morgenen, eller rett etter trening? <br/> Da kan ulike typer drikke eller flytende måltider som smoothie og drikkeyoghurt være gode alternativ.</strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Karbohydrater = viktig treningsdrivstoff </h2>
                                                                        <ul>
                                                                            <li>Jo høyere intensitet - jo viktigere blir karbohydrat som drivstoff</li>
                                                                            <li>Ved <strong> lav karbohydrattilgang over tid </strong> kan kroppen komme i <strong>"energisparingsmodus"</strong>, med mange av de samme symptomene som ved REDs</li>
                                                                            <li>
                                                                                Gode rutiner med karbohydrat før, under og etter trening er beskyttende med tanke på: 
                                                                                <ul>
                                                                                    <li>Stressreaksjoner</li>
                                                                                    <li>Bentetthet</li>
                                                                                    <li>Knokler</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img class="rounded" src="images/box-modul-4-img-9.jpg"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong> Selv om du får i deg nok kalorier, kan for lite karbohydrater fremskynde utviklingen av REDs. </strong></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Praktiske tips å ta med seg i hverdagen</h2>
                                                                        <h3 class="fw-normal">Trykk på sirkelen med rollen som beskriver deg best for å få enkle tips til små valg, rutiner og tanker det er viktig å ha med seg i det daglige forebyggende arbeidet mot energimangel.</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center justify-content-around">
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-4-img-10-a.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3>UTØVER</h3>
                                                                                        <p>(trykk for å se tips)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-4-img-10-b.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3>TRENER</h3>
                                                                                        <p>(trykk for å se tips)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow circle-img-caption-img-not">
                                                                                    <figure class="circle-img-caption-box-img"> </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h3>FORELDER</h3>
                                                                                        <p>(trykk for å se tips)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>UTØVER</h2>
                                                                        <ul>
                                                                            <li>Spis noe hver 3. - 4. time - i tillegg til etter trening</li>
                                                                            <li>Vanskelig å spise rett etter trening? Bruk smoothie, energibar eller drikkeyoghurt</li>
                                                                            <li>Noter deg kroppslige mønstre: søvn, energinivå, humør, treningsrespons, etc. </li>
                                                                            <li>Si ifra om det er noe som bekymrer deg</li>
                                                                            <li>Vær ekstra bevisst på å spise mer de dagene du trener hardt </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-4-img-10-a.jpg"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong>Sett opp treningsuken din:</strong></h4>
                                                                                <h4> Marker hvilke dager som er harde og hvilke som er rolige. På harde dager trenger du ekstra påfyll - planlegg ekstra måltider på forhånd.</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2 class="mb-1">TRENER</h2>
                                                                        <h4><i>Du er en nøkkelperson for forebygging - ikke bare i treningsplanen, men i miljøet du bygger rundt utøverne</i></h4>
                                                                        <ul>
                                                                            <li> <strong> Etabler fast praksis for påfyll </strong> rett etter trening (f.eks. oppfordre til å ha med banan, smoothie, brødmat el.) </li>
                                                                            <li> Oppmuntre utøvere til å <strong> registrere hvordan kroppen har det </strong> - f.eks. gjennom dagbok: søvn, mat, humør og prestasjon </li>
                                                                            <li> Fokuser på spørsmål som ikke bare er relatert til prestasjon, men også <strong>overskudd og respons </strong> på trening </li>
                                                                            <li> Ved bekymring: samarbeid med foreldre tidlig </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-4-img-10-b.jpg"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong>Gå gjennom treningsplanen med utøveren:</strong></h4>
                                                                                <h4> Hvilke dager er tyngst? Hvor er det ekstra viktig å få det ekstra påfyllet? Hjelp dem å koble belastning med behov for mat og hvile.  </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div> 
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2 class="mb-1">FORELDER</h2>
                                                                        <h4> <i> Du er en nøkkelperson for forebygging - du trenger ikke være ekspert, det viktigste er at du følger med og støtter </i> </h4>
                                                                        <ul>
                                                                            <li><strong>Sørg for at matmengden justeres etter alder, vekst og treningsmengde</strong> - mange fortsetter med samme matpakke som da de var yngre selv om kroppen trenger mer</li>
                                                                            <li>Ha faste rutiner for måltider, søvn og hvile</li>
                                                                            <li>Registrer endringer i humør, søvnmønster, overskudd og appetitt</li>
                                                                            <li>Ha en åpen samtale om kroppslige signaler: energinivå, søvn, menstruasjonssyklus, morgenereksjon - forklar hvorfor dette sier noe om helse</li>
                                                                            <li>Reager tidlig hvis noe skurrer - <strong> det er lettere å justere enn å reparere </strong></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4><strong>Sett dere ned og se på treningsuken sammen:</strong></h4>
                                                                                <h4> Når trener du mest? Hvilke typer mellommåltidsmat er det lurt å ha tilgjengelig på disse dagene?</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Quiz</h2>
                                                                        <p>Hva trenger kroppen mer av på dager med høy treningsbelastning?</p>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                            Grønnsaker
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                            Proteiner
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                            Karbohydrater
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                            Vitamintilskudd
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span> Neste </span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Quiz</h2>
                                                                        <p>Hvorfor er det viktig å tenke på når på dagen du spiser?</p>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                            Kroppen tåler mer mat om kvelden
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                            Det er best å spise mest før du legger deg
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                            Tidlig og jevnt matinntak gir bedre overskudd og prestasjon
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                            Det spiller ingen rolle - bare du får i deg nok totalt
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span> Neste </span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Quiz</h2>
                                                                        <p>Hva kan være en nyttig øvelse for å sikre godt energiinntak i hverdagen?</p>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide3Radio1">
                                                                            Planlegge ukens måltider kun rundt middag
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-success">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide3Radio2">
                                                                            Registrere humør og søvn hver dag
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide3Radio3">
                                                                            Telle kalorier og justere ukentlig
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide3Radio" id="sliderBoxSlide3Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide3Radio4">
                                                                            Se på treningsuka og vurdere hvilke dager som krever ekstra mat
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-btn step-box-btn-form text-center"> 
                                                                        <button type="submit" class="btn btn-next-icon sliderBoxDownArrow"><span> Neste </span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'commons/footer.php'; ?>