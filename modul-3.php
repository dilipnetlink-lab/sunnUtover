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
                                        <h1><?php echo __("modul3Page.main_title"); ?></h1>
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
                                                <!-- <div class="step-slide-box-item">
                                                    <div class="step-slide-box-description-con p-0">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption top-slide-caption">
                                                                        <h2><?php echo __("modul3Page.screens.screen_01.title"); ?></h2>
                                                                        <h6><?php echo __("modul3Page.screens.screen_01.subtitle"); ?> </h6>
                                                                        <ul>
                                                                            <?php
                                                        $list = __("modul3Page.screens.screen_01.list_items1");
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
                                                                        <figure><img src="images/box-modul-3-img-1.jpg" class="rounded"/></figure>
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
                                                    </div> -->
                                                <div class="step-slide-box-item">
                                                    <div class="slider-box-arrow sliderBoxUpArrow"><i class="bi bi-chevron-up"></i></div>
                                                    <div class="step-slide-box-description-con">
                                                        <div class="step-slide-box-description-wrapper">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                    <div class="step-slide-box-caption pb-0">
                                                                        <div class="icon-text-con">
                                                                            <div class="icon-text-left">
                                                                                <img src="images/ion-warning-outline.svg" alt="">
                                                                            </div>
                                                                            <div class="icon-text-right">
                                                                                <h2>Kroppen sier ifra</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <p>Når kroppen får for lite energi over tid, prøver den å tilpasse seg, noe som kan få en rekke konsekvenser. Mange av konsekvensene gjorde vi oss kjent med i forrige modul. Disse vil i større eller mindre grad vise seg som kroppslige symptomer.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <p>Symptomer er kroppens måte å si fra på. Å ta dem på alvor er viktig. </p>
                                                                        <p>I denne modulen skal vi gå gjennom diverse <strong>fysiske og psykiske symptomer</strong> på REDs. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/search.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-2"><strong>Hvorfor er det viktig å forstå symptomene?</strong></h4>
                                                                                <h4>REDs kan utvikle seg gradvis uten at man merker det. Derfor er det viktig å være bevisst på hvilke parametere man bør følge med på jevnlig. På den måten: </h4>
                                                                                <ul>
                                                                                    <li>Kan du <strong> ta grep tidlig </strong> </li>
                                                                                    <li>Kan du <strong> beskytte både helse og prestasjon </strong></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con bottom-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Uforklarlig tretthet / lave energinivå</h2>
                                                                        <p>Kjenner du deg sliten uten å skjønne hvorfor, eller merker du at overskuddet forsvinner, kan det være et tegn på at kroppen ikke får nok energi til å dekke det du forbruker. </p>
                                                                        <p>Dette kan være et tidlig signal på at kroppen er i ubalanse. Å loggføre trening, søvn, humør og energinivå regelmessig kan gjøre det lettere å oppdage mønstre. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure class="circle-img-box lg-circle"><img src="images/box-modul-3-img-3.jpg"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><strong>Tips:</strong></h4>
                                                                                <ul>
                                                                                    <li>Bruk en dagbok til å følge med på både treningsbelastning og energinivå.</li>
                                                                                    <li>Ved langvarig tretthet, vurder å snakk med noen du følger deg komfortabel med. </li>
                                                                                    <li>Følg også med på søvn og humør - det henger ofte sammen med energinivå.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Blir du ofte syk / tar det ofte lang tid å bli frisk?</h2>
                                                                        <p>Hvis kroppen får for lite energi over tid, nedprioriteres immunsystemet. Det betyr at du lettere kan bli syk, og at det tar lengre tid før du blir helt frisk.</p>
                                                                        <p>Å følge med på hvor ofte du er syk, og hvor raskt du henter deg inn igjen, kan gi viktige hint om energibalanse og restitusjon. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-4.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><strong>Tips:</strong></h4>
                                                                                <ul>
                                                                                    <li>Bruk en dagbok til å følge med på både treningsbelastning og energinivå.</li>
                                                                                    <li>Ved langvarig tretthet, vurder å snakk med noen du følger deg komfortabel med. </li>
                                                                                    <li>Følg også med på søvn og humør - det henger ofte sammen med energinivå.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Stagnasjon i trening - trener du mer enn du restituerer?</h2>
                                                                        <p>Hvis du opplever at formen står stille, kan det skyldes at kroppen ikke får nok energi til å ta til seg treningen du legger ned.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p> Ubalanse mellom trening, mat og hvile gjør at kroppen ikke klarer å restituere. Da uteblir både fremgang og prestasjon. Det kan også gjøre deg mer utsatt for skader.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-5.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips - hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Hvordan oppleves trening (tungt / lett)?</li>
                                                                                    <li>Klarer du å gjennomføre det du har planlagt?</li>
                                                                                    <li>Får du fremgang over tid, eller står du stille?</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Sårbar for skader - opplever du småvondter eller tilbakevendende skader?</h2>
                                                                        <p>Ved REDs kan kroppen få redusert evne til å bygge og reparere vev. Det gjør at både muskler, sener og bein blir mer utsatt for belastningsskader.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Vedvarende eller repeterende skader kan være et signal om at kroppen ikke får det den trenger for å tåle treningen. Tidlig innsikt kan forebygge alvorlige problemer.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-6.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Øk intensitet og varighet gradvis</li>
                                                                                    <li>Sørg for jevnlig inntak av mat - spesielt etter trening</li>
                                                                                    <li>Opplever du ofte vondter, må du ofte justere trening på grunn av smerter?</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Hormonforstyrrelser </h2>
                                                                        <p>Lav energitilgjengelighet kan føre til hormonforstyrrelser. For jenter kan det bety uregelmessig eller uteblitt menstruasjon. For gutter kan det vise seg som lavere testosteronnivå – færre morgenereksjoner, nedsatt sexlyst og lite overskudd.</p>
                                                                        <h4 class="mb-0"> Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Hormonforstyrrelser kan på lang sikt få konsekvenser for beinhelse og utvikling.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-7.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-0"><strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>For jenter: følg med på endringer i menstruasjonssyklusen</li>
                                                                                    <li>For gutter: færre enn 3 morgenereksjoner per uke kan være et tegn på REDs</li>
                                                                                    <li>Ta endringer i kroppen på alvor – søk hjelp hvis du er usikker</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Kuldefølelse - fryser du lettere enn før? </h2>
                                                                        <p>Kroppen senker kroppstemperaturen som en <strong> energisparingsstrategi</strong> når den ikke får nok næring. Dette kan gjøre at du føler deg kald, særlig på hender og føtter – selv når det ikke er kaldt rundt deg.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-8.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Legg merke til om du fryser unormalt ofte</li>
                                                                                    <li>Se på matinntaket ditt - kroppen trenger drivstoff for å holde varmen</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Søvnproblemer - sliter du med å sovne eller sove gjennom natten? </h2>
                                                                        <p>Energiunderskudd kan gjøre kroppen stresset - og det kan forstyrre søvnen. Det er ikke uvanlig å våkne tidlig, sove urolig eller kjenne seg uopplagt selv etter mange timer i senga.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Søvn er helt avgjørende for restitusjon, hormonbalanse og prestasjon. Uten god søvn klarer ikke kroppen å hente seg inn - og det kan forverre andre symptomer.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-9.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Legg merke til opplevd søvnkvalitet</li>
                                                                                    <li>Legg merke til om du ofte våkner om natten</li>
                                                                                    <li>Legg merke til om du føler deg uthvilt om morgenen</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-first-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Jernmangel</h2>
                                                                        <p>Lavt energiinntak og menstruasjon (hos jenter) kan påvirke jernlagrene i kroppen. Dette kan gjøre at du føler deg ekstra sliten, tungpustet og presterer dårligere.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Jernmangel kan gi symptomer som ligner på vanlig tretthet – men har en helt annen årsak. Det bør tas på alvor og eventuelt følges opp med blodprøver.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-10.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Følg med på om du opplever mye svimmelhet eller hodepine</li>
                                                                                    <li>Spis jerninnholdig mat sammen med C-vitamin (f.eks. appelsinjuice) for bedre opptak</li>
                                                                                    <li>Unngå kaffe og te rett før og etter måltider hvis du mistenker jernmangel</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Mage- og tarmplager - Oppblåst? Luft? Urolig mage?</h2>
                                                                        <p>Mange opplever endringer i magen ved REDs - som treg eller løs avføring, smerter, eller generell uro. Det kan skyldes både lavt energiinntak og stress rundt mat og kropp.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Mageproblemer kan være en reaksjon på stress og underskudd. Når fordøyelsen går tregere, påvirkes også næringsopptaket.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-11.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Legg merke til magesmerter, oppblåsthet, kvalme eller luft</li>
                                                                                    <li>Tarmfunksjon (hyppighet, konsistens, ubehag)</li>
                                                                                    <li>Sammenheng med stress, måltider eller trening?</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Humørsvingninger, nedstemthet og irritabilitet  </h2>
                                                                        <p>Når kroppen mangler energi over tid, påvirker det nervesystem og hormonbalanse - noe som kan føre til at man blir lettere irritert, mister motivasjon, eller føler seg nedfor uten noen åpenbar grunn.</p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig å følge med på?</h4>
                                                                        <p>Psykisk helse henger tett sammen med fysisk overskudd, og det er viktig å ta følelsene på alvor - spesielt når det går utover trening, skole eller hverdagsglede.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-12.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Legg merke til mønstre - f.eks. hvis du ofte er irritert, eller føler deg nedfor uten at noe spesielt har skjedd.</li>
                                                                                    <li>Sammenlign humør med søvn, energi og trening i en dagbok - det kan gi nyttig innsikt.</li>
                                                                                    <li>Snakk med noen du stoler på - det kan være foreldre, trener, venn eller helsesykepleier.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Dårlig konsentrasjon og nedsatt mental skarphet</h2>
                                                                        <p>Hjernen trenger mye energi for å fungere optimalt. Når energitilførselen er for lav over tid, nedprioriterer kroppen kognitive funksjoner som fokus, hukommelse og problemløsning.</p>
                                                                        <p>Konsentrasjonsvansker gjør det vanskeligere å prestere både på skole, trening og i sosiale situasjoner. Det kan føles frustrerende å ikke være "seg selv" mentalt, og det er ofte et tidlig signal om at noe er i ubalanse.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-13.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Legg merke til mønstre - f.eks. hvis du ofte er irritert, eller føler deg nedfor uten at noe spesielt har skjedd.</li>
                                                                                    <li>SammenSammenlign humør med søvn, energi og trening i en dagbok - det kan gi nyttig innsikt.</li>
                                                                                    <li>Snakk med noen du stoler på - det kan være foreldre, trener, venn eller helsesykepleier.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Angst eller uro rundt mat og spising</h2>
                                                                        <p>Noen kan kjenne på stress rundt mat - enten fordi de føler at de må spise “perfekt”, de føler de må gjøre seg “fortjente” til mat, de får dårlig samvittighet hvis de spiser mer enn vanlig, eller de kan unngå visse typer mat. </p>
                                                                        <h4>Når mat skaper uro i hverdagen, er det et tegn på at noe er i ubalanse. </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-14.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Prøv å kjenne etter: spiser du når du er sulten - og til du er mett?</li>
                                                                                    <li>Still deg spørsmålet: Tenker jeg mer på mat enn før? Føler jeg meg stresset av å spise visse ting?</li>
                                                                                    <li>Det kan være nyttig å snakke med en trygg voksen eller fagperson - spesielt hvis tankene påvirker hverdagen.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Tvangspregede treningsvaner</h2>
                                                                        <p>Noen kjenner på uro eller dårlig samvittighet dersom de ikke trener. Dette kan føre til at man trener selv når kroppen trenger hvile, og ikke lytter til signaler som tretthet, vondter/skader eller sykdom. </p>
                                                                        <h4 class="mb-0">Hvorfor er det viktig:</h4>
                                                                        <p>Hvile er avgjørende for å tåle treningsbelastningen og unngå skader. Hvis trening alltid “må bli gjort”, selv når kroppen sier nei, øker risikoen for overbelastning, skader og energimangel.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-15.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"> <strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Det kan være lurt å ta en pause og kjenne etter - har jeg energi og lyst, eller føler jeg at jeg “må”?</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Sosial tilbaketrekning</h2>
                                                                        <p>Man trekker seg unna venner, felles måltider og aktiviteter som ikke handler om trening. Det kan bli vanskelig å finne energi til det sosiale - eller man føler at det "kommer i veien" for treningsrutiner, matplaner eller kontrollbehov.</p>
                                                                        <p>Å være med andre gir både glede, støtte og en pause fra prestasjonsfokus. Når man isolerer seg, blir det lettere å bli fanget i negative tanker og destruktive mønstre.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-16.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4 class="mb-1"><strong>Tips og hva du kan følge med på:</strong></h4>
                                                                                <ul>
                                                                                    <li>Vær bevisst på hvor ofte du sier nei til sosiale ting.</li>
                                                                                    <li>Lag plass også til aktiviteter som ikke bare handler om trening.</li>
                                                                                </ul>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Kroppsmisnøye, perfeksjonisme og lavt selvbilde</h2>
                                                                        <p>Kroppsfokus, sammenligning og perfeksjonisme kan gjøre at du føler deg aldri god nok.</p>
                                                                        <p>Dette er tanker som kan ta mye plass og tappe energi. De kan også bidra til å skyve deg mot usunne valg og at du overstyrer kroppens signaler. Det er lett å tro at "mer er bedre" i idrett – men kroppen trenger nok energi for å bygge seg sterkere. REDs rammer ofte utøvere som er svært målrettede, men som kanskje ikke har lært hvordan de best støtter kroppen med mat, hvile og restitusjon.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-17.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="bg-img-text-con">
                                                                        <div class="bg-img-text-full">
                                                                            <div class="bg-img-text-img">
                                                                                <figure><img src="images/light-bulb.svg"></figure>
                                                                            </div>
                                                                            <div class="bg-img-text-text">
                                                                                <h4> <strong>Tips og hva du kan følge med på:</strong></h4>
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
                                                                <div class="col-sm-12">
                                                                    <div class="icon-list-menu-con top-icon-list-menu top-second-icon-list-menu">
                                                                        <?php include 'commons/icon-list-menu.php'; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-caption">
                                                                        <h2>Opplevde symptomer varierer fra person til person</h2>
                                                                        <p>Symptomer på REDs varierer betydelig fra person til person. Dette skyldes at kroppens respons på lav energitilgjengelighet (LEA) påvirkes av en rekke individuelle faktorer som:</p>
                                                                        <div class="inner-step-box active">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-dna.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4>Biologisk variasjon</h4>
                                                                                    <ul>
                                                                                        <li><strong>Kjønn:</strong> Kvinner og menn har ulike hormon-systemer</li>
                                                                                        <li><strong>Hormonell status:</strong> Noen har mer følsomme hormonsystemer - selv en liten energimangel kan gi store utslag</li>
                                                                                        <li><strong>Genetikk:</strong> Noen har “robust” biologi som tåler lav energi bedre, mens andre kan utvikle symptomer raskt</li>
                                                                                        <li><strong>Tidligere helsetilstand:</strong> en som har hatt spise-forstyrrelser, benskjørhet eller hormonproblemer tidligere er mer sårbar for å utvikle symptomer</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="inner-step-box">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-calendar.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4>Varighet og alvorlighetsgrad av energimangel</h4>
                                                                                    <ul>
                                                                                        <li><strong>Kjønn:</strong> Kvinner og menn har ulike hormon-systemer</li>
                                                                                        <li><strong>Hormonell status:</strong> Noen har mer følsomme hormonsystemer - selv en liten energimangel kan gi store utslag</li>
                                                                                        <li><strong>Genetikk:</strong> Noen har “robust” biologi som tåler lav energi bedre, mens andre kan utvikle symptomer raskt</li>
                                                                                        <li><strong>Tidligere helsetilstand:</strong> en som har hatt spise-forstyrrelser, benskjørhet eller hormonproblemer tidligere er mer sårbar for å utvikle symptomer</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="inner-step-box">
                                                                            <div class="icon-text-con">
                                                                                <div class="icon-text-left">
                                                                                    <img src="images/icon-users-three.svg" alt="">
                                                                                </div>
                                                                                <div class="icon-text-right">
                                                                                    <h4>Sosiale faktorer</h4>
                                                                                    <ul>
                                                                                        <li><strong>Normalisering av faresignaler:</strong> Utøvere kan overse symptomer som søvnproblemer, hormonforstyrrelser (som menstruasjonstap hos jenter) fordi de tror det er “normalt” i idretten</li>
                                                                                        <li><strong>Miljøets rolle:</strong> Trenere, lagkamerater og kulturen rundt kan påvirke hvordan utøveren tolker og håndterer signaler fra kroppen</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="step-slide-box-img">
                                                                        <figure><img src="images/box-modul-3-img-18.jpg" class="rounded"></figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-box-arrow sliderBoxDownArrow"><i class="bi bi-chevron-down"></i></div>
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