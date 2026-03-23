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
                                        <h1><?php echo __("modul5Page.main_title"); ?></h1>
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
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2><?php echo __("modul5Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul5Page.screens.screen_01.subtitle"); ?> </h6>
                                                                        <ul>
                                                                            <?php
                                                                                $list = __("modul5Page.screens.screen_01.list_items1");
                                                                                if(is_array($list)){
                                                                                    foreach($list as $item){
                                                                                        echo "<li>$item</li>";
                                                                                    }   
                                                                                }
                                                                            ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-5-img-1.jpg" class="rounded"/></figure>
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
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption">
                                                                        <h3>Hva nå?</h3>
                                                                        <p><strong>Hvis du tenker at noe kanskje ikke stemmer - enten hos deg selv eller noen du følger opp - er det lurt å vite hva du kan gjøre.  Velg rollen din:</strong></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center justify-content-around">
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-2-a.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>UTØVER</h4>
                                                                                        <p>(trykk for å se)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-2-b.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>TRENER</h4>
                                                                                        <p>(trykk for å se)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow circle-img-caption-img-not">
                                                                                    <!-- <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-2-c.jpg"/>                                                                                        
                                                                                        </figure> -->
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>FORELDER</h4>
                                                                                        <p>(trykk for å se)</p>
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
                                                                        <h3>UTØVER</h3>
                                                                        <p><strong>Steg 1: Lytt til kroppen og ta tegnene under på alvor</strong></p>
                                                                        <ul>
                                                                            <li>Unormalt sliten?</li>
                                                                            <li>Sover dårlig?</li>
                                                                            <li>Fravær eller uregelmessig menstruasjon?</li>
                                                                            <li>Færre morgenereksjoner, styrke og “drive” borte?</li>
                                                                            <li>Nedfor/dårlig humør </li>
                                                                        </ul>
                                                                        <p><strong>Steg 2: Snakk med noen</strong></p>
                                                                        <ul>
                                                                            <li>Snakk med noen du føler deg komfortabel med</li>
                                                                            <li>Vær åpen om symptom</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-2-a.jpg"/></figure>
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
                                                                        <h3>TRENER</h3>
                                                                        <p><strong>Vær observant</strong></p>
                                                                        <ul>
                                                                            <li>Utøvere med stagnasjon? Lavt overskudd?</li>
                                                                        </ul>
                                                                        <p><strong>Still de riktige spørsmålene</strong></p>
                                                                        <ul>
                                                                            <li>Snakk om søvn, overskudd, respons, normal mensen (hvis kvinne)</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <p><strong>Samarbeid</strong></p>
                                                                        <ul>
                                                                            <li> Informer foreldre - oppfølging skjer best i fellesskap</li>
                                                                        </ul>
                                                                        <p><strong>Tilrettelegg</strong></p>
                                                                        <ul>
                                                                            <li>Reduser treningsbelastningen hvis du er bekymret</li>
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
                                                                                <p> <strong>Visste du at:<br/> </strong> Lav laktatrespons - særlig ved terskel og hard trening - kan tyde på REDs. Lav karbohydrattilgang og lav energitilgjengelighet (LEA) påvirker evnen til å produsere laktat normalt. Det er ikke et sikkert tegn alene, men bør vekke oppmerksomhet - spesielt sammen med andre symptomer. </p>
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
                                                                        <h3>FORELDER</h3>
                                                                        <p><i>Du er en nøkkelperson for forebygging - du trenger ikke være ekspert, det viktigste er at du følger med og støtter</i></p>
                                                                        <p><strong>Ser du endringer</strong></p>
                                                                        <ul>
                                                                            <li>Nedstemt, sliten, dårlig søvn?</li>
                                                                            <li>Spiser mindre og trener mer enn før?</li>
                                                                        </ul>
                                                                        <p><strong>Snakk om kroppen</strong></p>
                                                                        <ul>
                                                                            <li>For jenter - Har du mensen? Er den regelmessig?</li>
                                                                            <li>For gutter - Har det vært endringer i morgenereksjon?</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <p><strong>Søk hjelp</strong></p>
                                                                        <ul>
                                                                            <li> Ta kontakt med fastlege eller spesialist, f.eks. ernæringsfysiolog</li>
                                                                            <li>Ta kontakt med trener</li>
                                                                        </ul>
                                                                        <p><strong>Tilrettelegg hjemme</strong></p>
                                                                        <ul>
                                                                            <li> Sørg for mellommåltider. </li>
                                                                            <li>Berik maten: bruk smør, olje og sauser i maten. Unngå lettprodukter</li>
                                                                            <li>Snacks, godteri og bakst er ofte nødvendig for tilstrekkelig energiinntak.</li>
                                                                        </ul>
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
                                                                        <h3>Hvordan foregår behandling?</h3>
                                                                        <p>Behandling av REDs handler om å hjelpe kroppen tilbake i balanse. Det skjer ofte i samarbeid med flere fagpersoner:</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-a.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>FASTLEGE</h4>
                                                                                        <p>(trykk for å se)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-b.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>KLINISK ERNÆRINGS-FYSIOLOG</h4>
                                                                                        <p>(trykk for å se)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow">
                                                                                    <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-c.jpg"/>                                                                                        
                                                                                    </figure>
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>PSYKOLOG</h4>
                                                                                        <p>(trykk for å se)</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                                                                                <div class="circle-img-caption-box-con sliderBoxDownArrow circle-img-caption-img-not">
                                                                                    <!-- <figure class="circle-img-caption-box-img">
                                                                                        <img src="images/box-modul-5-img-6-d.jpg"/>                                                                                        
                                                                                        </figure> -->
                                                                                    <div class="circle-img-caption-box-caption">
                                                                                        <h4>FORELDRE <br/> OG TRENER</h4>
                                                                                        <p>(trykk for å se)</p>
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
                                                                        <h3>FASTLEGE</h3>
                                                                        <ul>
                                                                            <li> Vurderer medisinske forhold </li>
                                                                            <li> Bestiller blodprøver</li>
                                                                            <li> Kan henvise til spesialist </li>
                                                                            <li>Kan rekvidere DEXA (bentetthetsmåling) ved mistanke om redusert beinhelse</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-a.jpg"/></figure>
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
                                                                        <h3>KLINISK ERNÆRINGSFYSIOLOG</h3>
                                                                        <ul>
                                                                            <li> Hjelper til med å øke energiinntaket og tilpasse måltidsrytme </li>
                                                                            <li> Gir konkrete råd for å få i seg nok mat - både på vanlige og mer krevende dager</li>
                                                                            <li>Kan initiere behov for videre utredning, f.eks. DEXA-måling (bentetthetsmåling)</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-b.jpg"/></figure>
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
                                                                        <h3>PSYKOLOG ELLER RÅDGIVER</h3>
                                                                        <ul>
                                                                            <li> Kan støtte med håndtering av:</li>
                                                                            <ul>
                                                                                <li> Kroppsbilde</li>
                                                                                <li> Stress</li>
                                                                                <li>Matrelaterte utfordringer</li>
                                                                                <li>Mental belastning</li>
                                                                            </ul>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box"><img src="images/box-modul-5-img-6-c.jpg"/></figure>
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
                                                                        <h3>TRENER OG FORELDRE</h3>
                                                                        <p><strong>Trenerens rolle i behandlingsfasen:</strong></p>
                                                                        <ul>
                                                                            <li>Følg opp og hold kontakten</li>
                                                                            <li>Bidra med tilrettelegging av trening</li>
                                                                            <li>Delta i samtaler med ernæringsfysiolog hvis ønskelig</li>
                                                                            <li>Skap trygghet og forutsigbarhet - utøveren er fortsatt en del av laget</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h3>Foreldrenes rolle i behandlingsfasen:</h3>
                                                                        <ul>
                                                                            <li> Kan inkluderes i samtaler med fagpersoner (lege, ernæringsfysiolog), dersom utøveren ønsker det</li>
                                                                            <ul>
                                                                                <li> Økt innsikt kan gi bedre støtte i hverdagen og bidra til bedre mat- og hvilerutiner hjemme</li>
                                                                            </ul>
                                                                            <li>Viktig støttespiller som følger opp signaler og tilpasninger over tid</li>
                                                                        </ul>
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
                                                                        <h3>Ressurser du kan utforske</h3>
                                                                        <p><strong>Idrettens skadetelefon</strong>  <br/> Utøvere med lisens gjennom et særforbund kan ringe Skadetelefonen (Idrettens Helsesenter) for rask og riktig hjelp:</p>
                                                                        <ul>
                                                                            <li> Tilgang til kvalitetssikret behandlingsnettverk </li>
                                                                            <li> Spesialkompetanse på idrettsmedisin </li>
                                                                            <li> Gir råd uavhengig av om skaden dekkes av forsikringen  </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h3>Sunn Idrett </h3>
                                                                        <ul>
                                                                            <li>Mange gode artikler, tips og webinarer for både utøvere, trenere og foreldre</li>
                                                                        </ul>
                                                                        <h3>Olympiatoppen - idrettsernæring</h3>
                                                                        <ul>
                                                                            <li>Faktaark og veiledning om mat og måltider for idrettsutøvere</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-img">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-a.jpg" /></figure>
                                                                            </div>
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-b.jpg" /></figure>
                                                                            </div>
                                                                            <div class="col-4 text-center">
                                                                                <figure class="circle-img-box sm-circle-img"><img src="images/box-modul-5-img-8-c.jpg" /></figure>
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
                                                                        <h3>Quiz</h3>
                                                                        <h4>En utøver viser disse tegnene: manglende fremgang, ofte syk, lavt energinivå, tretthetsbrudd i foten og dårlig konsentrasjon. Hva er riktig tiltak?</h4>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                            Vente og se - det går sikkert over
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                            Gi råd om mer søvn og mindre trening i noen uker
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                            Oppsøke fastlege og/eller klinisk ernæringsfysiolog
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                            Be utøveren trene lettere og loggføre egen fremgang
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
                                                                        <h3>Quiz</h3>
                                                                        <h4>Hva bør en utøver gjøre ved mistanke om REDs?</h4>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                            Holde det for seg selv og se an situasjonen
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-success">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                            Snakke med en voksen og oppsøke profesjonell hjelp
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                            Trene litt roligere, men ikke gjøre noe mer
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                            Søke på nettet og prøve å løse det selv
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