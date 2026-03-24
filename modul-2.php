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
                                        <h1><?php echo __("modul2Page.main_title"); ?></h1>
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
                                                                    <div class="step-slide-box-caption top-slide-caption">
                                                                        <h2><?php echo __("modul2Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul2Page.screens.screen_01.subtitle"); ?> </h6>
                                                                         <ul>
                                                                            <?php
                                                                                $list = __("modul2Page.screens.screen_01.list_items1");
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
                                                                        <figure><img src="images/box-modul-2-img-1.jpg" class="rounded"/></figure>
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
                                                                        <h2>Kroppen må prioritere</h2>
                                                                        <p>Som vi lærte i forrige delmodul: når kroppen over tid ikke får nok energi, må den begynne å prioritere hvilke funksjoner som er viktigst. Det betyr at funksjoner som ikke er livsnødvendige i øyeblikket, skrus ned. </p>
                                                                        <h4>Dette får konsekvenser for både helse og prestasjon. </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-2-a.svg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-2-b.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Hindret vekst, pubertet og hormonfunksjon</h2>
                                                                        <p>Når kroppen får for lite energi, skrur den ned signaler som styrer vekst, pubertet og hormonproduksjon, noe som kan forsinke puberteten. Jenter kan miste menstruasjonen, gutter får lavere testosteronnivå, og også hormoner for stoffskifte, humør og appetitt påvirkes. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p> Hormoner er avgjørende for vekst, beinhelse og fruktbarhet. Uten nok energi får ikke kroppen bygge seg sterk nok, men med tidlig hjelp og riktig ernæring kan utviklingen ofte tas igjen. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-3.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Svekket beinhelse</h2>
                                                                        <p>Når kroppen får for lite energi, reduseres viktige hormoner som bygger bein. Det gjør skjelettet svakere, og risikoen for belastningsbrudd og beinskjørhet øker. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p><strong> Rundt 90 % av beinmassen bygges før fylte 18 år for jenter, og 20 år for gutter. </strong> Bygger man ikke nok beinmasse i ungdomsårene, øker risikoen for beinskjørhet og belastningsbrudd - både i dag og som voksen.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-4.svg" class="rounded"/></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <p> <strong> Visste du at...<br/> Rundt 90 % av den maksimale beinmassen bygges innen man når 20-årene? Dette legger grunnlaget for sterke bein livet ut - og kroppen trenger nok energi i ungdomsårene for å klare det.</strong> </p>
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
                                                                        <h2>♦️ Nedsatt mage- og tarmfunksjon</h2>
                                                                        <p>Når kroppen får for lite energi, nedprioriteres fordøyelsen. Det betyr at magen jobber saktere, og det kan føre til <strong> nedsatt appetitt, forstoppelse, oppblåsthet </strong> og <strong> ubehag. </strong> Mange opplever også mageplager som ligner irritabel tarm (IBS). </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p>God fordøyelse er viktig for å ta opp næring, holde energinivået oppe og ha det bra i hverdagen. Langvarige fordøyelsesplager kan gi redusert livskvalitet, dårligere restitusjon og mindre matlyst.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-5.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Svekket energimetabolisme</h2>
                                                                        <p>Når kroppen får for lite energi over tid, senker den stoffskiftet for å spare på kreftene. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p>Lavt stoffskifte gjør at kroppen bruker mindre energi i hvile. Dette kan føre til økt <strong> tretthet, frysninger, vektendringer </strong> og <strong> hormonforstyrrelser.</strong>  </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-6.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Nedsatt blodfunksjon</h2>
                                                                        <p>Ved lav energitilgjengelighet kan kroppen få for lite av jern og andre viktige næringsstoffer. Jern er nødvendig for å lage røde blodceller, som frakter oksygen rundt i kroppen. Når jernlagrene er lave (vanlig hos unge, kvinnelige utøvere) reduseres blodets evne til å levere oksygen effektivt.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p>Jernmangel kan forverre energimangelen fordi det påvirker stoffskiftet og gjør at kroppen bruker energi mindre effektivt, både i hvile og under aktivitet. Jernmangel ved REDs kan også svekke hormonbalansen og påvirke beinhelse, fertilitet og psykisk helse.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-7.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Urinlekkasje</h2>
                                                                        <p>REDs reduserer energitilførselen til muskler, inkludert bekkenbunnen, som er ansvarlig for å holde urinblæren tett under fysisk belastning. Hormonendringer - spesielt lavt østrogen hos jenter - kan også svekke støttevevet i urinveiene. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p>Svake bekkenbunnsmuskler og endret bindevevsfunksjon kan føre til urinlekkasje under løping, hopping eller styrketrening.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-8.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Nedsatt regulering av blodsukker og fettstoffer </h2>
                                                                        <p>For lite energi gjør at hormoner som styrer blodsukker og forbrenning (blant annet insulin, kortisol og leptin) kommer i ubalanse.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p> Når disse hormonene kommer i ubalanse, kan det føre til ustabilt blodsukker, energisvigninger, svimmelhet og hodepine. Dette påvirker både prestasjon og humør, og gjør det vanskeligere for kroppen å bruke mat effektivt.  </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-9.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Psykiske helseplager </h2>
                                                                        <p>REDs påvirker hjernen gjennom energimangel og hormonforstyrrelser. Dette kan endre kjemien i hjernen og gjøre det vanskeligere å regulere humør. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p> Man kan oppleve nedstemthet, angst eller irritabilitet. Psykiske plager kan oppstå selv uten kroppspress eller bevisst matkontroll, og gjør det vanskeligere å ha overskudd i hverdagen, trene godt og føle seg som seg selv. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-10.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Nedsatt hjernefunksjon </h2>
                                                                        <p>Ved REDs får hjernen for lite energi, og hormonene som påvirker konsentrasjon, læring og reaksjonsevne kommer i ubalanse.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig </h4>
                                                                        <p> Dette kan gjøre det vanskeligere å fokusere, huske informasjon og ta raske beslutninger – både i idrett og skole. Man kan føle seg uklar i hodet og «ute av det», selv uten å være sliten fysisk.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-11.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Søvnproblemer </h2>
                                                                        <p>Forskning viser at utøvere som får for lite energi i forhold til hvor mye de trener, også sover dårligere. De våkner oftere i løpet av natta, har lavere søvneffektivitet og sover mindre i den dype, viktige søvnfasen. Forskerne tror dette kan henge sammen med hvordan kroppen reagerer på lite energi – for eksempel gjennom hormoner som påvirker søvn og våkenhet. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p> Søvn er helt avgjørende for å restituere, prestere og unngå skader. Dårlig søvn kan være et tegn på at kroppen ikke får nok energi, særlig når du trener mye</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-12.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Svekket hjertefunksjon</h2>
                                                                        <p>Alvorlig REDs er assosiert med lavere blodtrykk og hvilepuls.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p> Redusert hjerteaktivitet kan være en følge av energimangel, og kan øke risikoen for hjerterytmeforstyrrelser.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-13.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Redusert skjelettmuskelfunksjon</h2>
                                                                        <p>Lav energitilgjengelighet reduserer muskelproteinsyntesen. Dette skyldes hormonelle endringer og utilstrekkelig tilførsel av både energi og næringsstoffer som protein og karbohydrat. Samtidig reduseres muskelens lagring av glykogen, som er en viktig energikilde under trening. Resultatet er svekket muskelstyrke, dårligere restitusjon og redusert evne til å tilpasse seg treningsbelastning over tid.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p> Man føler seg svakere og orker mindre, noe som svekker prestasjon og øker risikoen for skader som strekk og overbelastning.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-14.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Svekket immunforsvar </h2>
                                                                        <p>Kroppen trenger energi og næringsstoffer for å lage immunceller og bekjempe sykdom. Ved REDs settes immunforsvaret i sparebluss.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig</h4>
                                                                        <p> Man blir oftere syk, får lengre sykdomsforløp og tåler mindre trening før kroppen sier stopp. Infeksjoner og betennelser kan også vare lenger enn normalt.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-15.svg" class="rounded"/></figure>
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
                                                                        <h2>♦️ Hvordan påvirker REDs prestasjonen? </h2>
                                                                        <p>Du har nå lært hvordan kroppen prioriterer bort viktige funksjoner når energien ikke strekker til. Disse funksjonene får naturligvis også konsekvenser for prestasjonen. </p>
                                                                        <h4>Vanlige prestasjonsmessige konsekvenser av REDs er:</h4>
                                                                        <ul>
                                                                            <li>Stagnasjon - fremgangen stopper opp</li>
                                                                            <li>Økt treningsslitasje - treningen føles tyngre</li>
                                                                            <li>Dårligere restitusjon</li>
                                                                            <li>Mer sykdom og skader</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-2-img-16.svg" class="rounded"/></figure>
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
                                                                        <p>Når i livet er omtrent 90 % av den maksimale beinmassen bygd opp?</p>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                            Etter at man er ferdig å vokse
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                            Rundt 18 års alder
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                            Rundt 25 års alder
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                            Rundt 30 års alder
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
                                                                        <p>Hvilken av disse er ikke en vanlig helsemessig konsekvens av REDs?</p>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                            Økt beinstyrke
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-success">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                            Forstyrret hormonbalanse
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                            Økt risiko for belastningsskader
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-label-grop radio-error">
                                                                            <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                            <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                            Forsinket pubertetsutvikling
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