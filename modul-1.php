<?php include 'commons/header.php'; ?>
<section>
    <div class="container-fluid section-padding page-box-con">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-box-full-con">
                        <div class="page-box-full-col">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-back-btn"> 
                                        <a href="<?= base_url() ?>" class="btn btn-light btn-exit-icon"> <span> <?php echo __("common.exit"); ?> </span></a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="page-title-del-box-full">
                                        <div class="page-title-del-box-left">
                                            <h1><?php echo __("modul1Page.main_title"); ?></h1>
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
                                                                            <h2><?php echo __("modul1Page.screens.screen_01.title"); ?></h2>
                                                                            <h6><?php echo __("modul1Page.screens.screen_01.subtitle"); ?> </h6>
                                                                            <ul>
                                                                                <?php
                                                                                    $list = __("modul1Page.screens.screen_01.list_items1");
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
                                                                            <figure><img src="images/box-modul-1-img-1.jpg" class="rounded"/></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="step-slide-box-btn">
                                                                            <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow"> <span> <?php echo __("common.next"); ?> </span> </a>
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
                                                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                                                        <div class="step-slide-box-caption">
                                                                            <h2>Kroppen trenger energi til mer enn trening</h2>
                                                                            <p>For at kroppen skal fungere optimalt, trenger den nok energi - ikke bare til trening, men til å opprettholde viktige, daglige funksjoner. Energi brukes blant annet til: </p>
                                                                            <ul>
                                                                                <li><strong> Hjernefunksjon og nervesystem </strong></li>
                                                                                <li><strong>Hjerte- og sirkulasjonssystem</strong></li>
                                                                                <li><strong>Hormonproduksjon</strong></li>
                                                                                <li><strong>Immunforsvar</strong></li>
                                                                                <li><strong>Beinhelse</strong></li>
                                                                                <li><strong>Fordøyelse og metabolisme</strong></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-2.svg" class="rounded"/></figure>
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
                                                                            <h2>Energitilgjengelighet</h2>
                                                                            <p>Energitilgjengelighet handler om hvor mye energi (mat og drikke) kroppen har igjen til å drive alle kroppens funksjoner etter at energien brukt på fysisk aktivitet er trukket fra.</p>
                                                                            <p>Energibalanse er et annet begrep det er viktig å ha et forhold til når man snakker om energitilgjengelighet, og kan ganske enkelt forklares som en tilstand hvor energiinntak er like stort som energiforbruket. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-3.svg" class="rounded"/></figure>
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
                                                                            <h2>Energibalanse</h2>
                                                                            <p>Energibalanse er et annet begrep det er viktig å ha et forhold til når man snakker om energitilgjengelighet, og kan ganske enkelt forklares som en tilstand hvor energiinntak er like stort som energiforbruket. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-4.svg" class="rounded"/></figure>
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
                                                                            <h2>Negativ energibalanse</h2>
                                                                            <p>Ethvert unntak fra denne balansen, bevisst eller ubevisst, kan lede til <strong> lav energitilgjengelighet </strong> lettere enn mange av oss tror. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-5.svg" class="rounded"/></figure>
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
                                                                            <h2>Lav energitilgjengelighet</h2>
                                                                            <p>Lav energitilgjengelighet oppstår når kroppen får for lite energi til å dekke både treningsbehov og de grunnleggende behovene som å puste, sirkulere blod, bygge opp bein og vev, produsere hormoner, osv. </p>
                                                                            <h4 class="mb-0">🪫 Tenk på det som et batteri i spareblussmodus:</h4>
                                                                            <p> Når kroppen får for lite energi, må den prioritere hva den bruker energien på. Da vil den redusere “ikke-essensielle” funksjoner for å spare på ressursene. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-6.svg" class="rounded"/></figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="bg-img-text-con">
                                                                            <div class="bg-img-text-full">
                                                                                <div class="bg-img-text-img">
                                                                                    <figure><img src="images/light-bulb.svg"></figure>
                                                                                </div>
                                                                                <div class="bg-img-text-text">
                                                                                    <p> <strong> Forskjell fra energibalanse:</strong> Du kan være i energibalanse (altså ikke gå opp eller ned i vekt), men likevel ha lav energitilgjengelighet hvis treningsmengden er høy og matinntaket ikke dekker kroppens behov etter trening.</p>
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
                                                                            <h2>Adaptiv vs. problematisk LEA</h2>
                                                                            <p>Det er normalt at kroppen tilpasser seg kortvarige perioder med lav energitilgjengelighet. Det kalles <strong>adaptiv LEA,</strong> og utgjør ikke nødvendigvis et problem. Dersom slike energiunderskudd skjer ofte nok (flere dager i uka, over flere uker), kan kroppen begynne å spare på energien og nedprioritere funksjoner som eksempelvis hormonproduksjon og restitusjon. </p>
                                                                            <p>Det er stor forskjell på ha en “sliten uke” og en kropp som over tid mangler energi til å fungere som den skal. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-7.svg" class="rounded"/></figure>
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
                                                                            <h2>Fra lav energitilgjengelighet (LEA) til relativ energimangel i idrett (REDs)</h2>
                                                                            <p>REDs oppstår altså når kroppen over tid har for <strong> lav energi-tilgjengelighet </strong> til å fungere normalt. Da reduseres evnen til å regulere viktige systemer, noe som kan føre til helseproblemer.</p>
                                                                            <p>REDs handler ikke bare om kroppsstørrelse eller vekt, men om <strong> ubalanse mellom energiinntak og forbruk.</strong> Man kan ha normal eller høy kroppsvekt og likevel være i lav energitilgjengelighet - særlig hvis energiforbruket gjennom trening er høyt.</p>
                                                                            <p>REDs rammer både gutter og jenter - og gjelder ikke bare toppidrettsutøvere. Mosjonister kan også utvikle REDs hvis energibehovet ikke dekkes. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <figure><img src="images/box-modul-1-img-8.svg" class="rounded"/></figure>
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
                                                                            <h2>Lav energitilgjengelighet selv i energibalanse?</h2>
                                                                            <p>Du kan være i energibalanse totalt sett i løpet av en dag - og likevel risikere lav energitilgjengelighet. </p>
                                                                            <p>Tenk deg at du trener tidlig og spiser lite før og etter. Da havner kroppen i underskudd i mange timer, selv om totalen på dagen er tilstrekkelig. </p>
                                                                            <p>Det er altså ikke bare mengden energi det kommer an på - tidspunkt og jevn energitilførsel er avgjørende. Spiser du for lite rundt treningsøktene er du i risikosonen for å kunne utvikle problematisk energitilgjengelighet og REDs. </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                                        <div class="step-slide-box-img">
                                                                            <div class="bg-text-con">
                                                                                <h5>Eksempel på måltidsmønster:</h5>
                                                                                <div class="table-responsive">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>07:00</td>
                                                                                            <td><strong> Frokost </strong></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>08:00 - 10:00</td>
                                                                                            <td>Trening</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10:00</td>
                                                                                            <td>Restitusjonsinntak</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10:30</td>
                                                                                            <td><strong> Lunsj </strong></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13:00</td>
                                                                                            <td>Mellommåltid</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15:30</td>
                                                                                            <td><strong> Middag </strong></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>17:00 - 19:00</td>
                                                                                            <td>Trening</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19:00</td>
                                                                                            <td>Restitusjonsinntak</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>20:00</td>
                                                                                            <td><strong> Kveldsmat </strong></td>
                                                                                        </tr>
                                                                                    </table>
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
                                                                            <p>Hva betyr det at kroppen er i “lav energitilgjengelighet (LEA)”?</p>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio1">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio1">
                                                                                At man spiser for lite fett
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio2">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio2">
                                                                                At kroppen bruker mer energi enn den får til overs etter trening
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio3">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio3">
                                                                                At man er overtrent
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide1Radio" id="sliderBoxSlide1Radio4">
                                                                                <label class="radio-label" for="sliderBoxSlide1Radio4">
                                                                                At man ikke har sovet nok
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
                                                                            <p>Hvilken av disse påstandene er sanne?</p>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio1">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio1">
                                                                                REDs oppstår bare hos utøvere som har veldig lav kroppsvekt
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-success">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio2">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio2">
                                                                                REDs kan både ramme gutter og jenter
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio3">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio3">
                                                                                REDs handler først og fremst om dårlig form
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-label-grop radio-error">
                                                                                <input class="radio-input" type="radio" name="sliderBoxSlide2Radio" id="sliderBoxSlide2Radio4">
                                                                                <label class="radio-label" for="sliderBoxSlide2Radio4">
                                                                                REDs er kun et problem i toppidrett
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
    </div>
</section>
<?php include 'commons/footer.php'; ?>
