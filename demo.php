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
                                            <h1>Modul 1 - Quiz resultat</h1>
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
                                                                <div class="row align-items-center justify-content-center">
                                                                    <div class="col-sm-12">
                                                                        <div class="result-text-box-caption">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-title mb-2">
                                                                                        <div class="row align-items-center">
                                                                                            <div class="col-sm-12 col-md-7">
                                                                                                <h2 class="mt-2 mb-2">Se gjennom svar</h2> 
                                                                                            </div>
                                                                                            <div class="col-sm-12 col-md-5">
                                                                                                <div class="btn-text"> Resultat: 1 av 2 riktige</div> 
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-table-con">
                                                                                        <h4>Hvilke av disse påstandene er sanne?</h4> 
                                                                                        <div class="result-text-box-table"> 
                                                                                            <div class="table-responsive">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td> <div class="ansicon"> REDs oppstår bare hos utøvere som har veldig lav kroppsvekt </div></td> 
                                                                                                        </tr>
                                                                                                        <tr class="myans anscorrect"> 
                                                                                                            <td><div class="ansicon">REDs kan både ramme gutter og jenter</div></td> 
                                                                                                        </tr>
                                                                                                        <tr> 
                                                                                                            <td><div class="ansicon">REDs handler først og fremst om dårlig form</div></td> 
                                                                                                        </tr>
                                                                                                        <tr> 
                                                                                                            <td><div class="ansicon">REDs er kun et problem i toppidrett</div></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-table-con">
                                                                                        <h4>Hva betyr det at kroppen er i “lav energitilgjengelighet (LEA)”?</h4>
                                                                                        <div class="result-text-box-table"> 
                                                                                            <div class="table-responsive">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><div class="ansicon">At man spise for lite fett</div></td> 
                                                                                                        </tr>
                                                                                                        <tr class="anscorrect"> 
                                                                                                            <td><div class="ansicon">At kroppen bruker mer energi enn den får til overs etter trening</td> 
                                                                                                        </tr>
                                                                                                        <tr class="myans"> 
                                                                                                            <td><div class="ansicon">At man er overtrent</div></td> 
                                                                                                        </tr>
                                                                                                        <tr> 
                                                                                                            <td><div class="ansicon">At man ikke har sovet nok</div></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-btn">
                                                                                        <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow w-100"> <span> Gå videre </span> </a>
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
                                                        <div class="step-slide-box-description-con p-0">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center justify-content-center">
                                                                    <div class="col-sm-12">
                                                                        <div class="result-text-box-caption">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-title">
                                                                                        <h2>Oppsummering</h2> 
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-table-con">
                                                                                        <h4>Du fullførte alle modulene! Her er en oppsummering av dine resultat:</h4> 
                                                                                        <div class="result-text-box-table"> 
                                                                                            <div class="table-responsive">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                        <tr class="anscorrect">
                                                                                                            <td> <div class="ansicon"> Modul 1 - Hva er REDs? </div></td> 
                                                                                                            <td> <div class="correct-ans-text"> 1 av 2 riktige </div> </td>
                                                                                                        </tr>
                                                                                                        <tr class="anscorrect"> 
                                                                                                            <td><div class="ansicon">Modul 2 - Konsekvenser</div></td> 
                                                                                                            <td><div class="correct-ans-text secondaryColor">2 av 2 riktige </div></td>
                                                                                                        </tr>
                                                                                                        <tr class="anscorrect"> 
                                                                                                            <td><div class="ansicon">Modul 3 - Symptomer på REDs</div></td> 
                                                                                                            <td><div class="correct-ans-text secondaryColor">3 av 3 riktige</div></td>
                                                                                                        </tr>
                                                                                                        <tr class="anscorrect"> 
                                                                                                            <td><div class="ansicon">Modul 4 - Forebygging</div></td>
                                                                                                            <td><div class="correct-ans-text secondaryColor">3 av 3 riktige</div></td>
                                                                                                        </tr>
                                                                                                        <tr class="anscorrect"> 
                                                                                                            <td><div class="ansicon">Modul 5 - Hvordan håndtere REDs?</div></td>
                                                                                                            <td ><div class="correct-ans-text secondaryColor">2 av 2 riktige</div></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-box-text text-center">
                                                                                        <p class="mb-0">Samlet resultat: <strong class="secondaryColor"> 11 av 12 riktige </strong></p>
                                                                                        <p class="mb-0">Godt jobbet! </p>
                                                                                        <p>Du har gjort en utmerket innsats med nesten perfekt resultat. </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="result-text-btn">
                                                                                        <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow w-100"> <span> Avslutt </span> </a>
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
                                                        <div class="step-slide-box-description-con p-0">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center justify-content-center text-center">
                                                                    <div class="col-sm-12">
                                                                        <div class="big-text-slide-caption">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="big-text-slide-icon">
                                                                                        <figure>
                                                                                            <img src="images/icon-congratulations.svg">
                                                                                        </figure>  
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="big-text-slide-text">
                                                                                        <h2 class="mb-0">Gratulerer!</h2> 
                                                                                        <h5>Du klarte alle 5 modulene</h5>
                                                                                        <p class="mb-0">Resultat: <strong> 12 av 12 riktige svar </strong></p> 
                                                                                        <p class="secondaryColor"><i class="bi bi-star"></i>Perfekt resultat</p>
                                                                                        <p>Fantastisk innsats! Du har fullført alle <br/> modulene med topp resultater. </p>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-sm-12">
                                                                                    <div class="two-btn-con big-text-slide-btn">
                                                                                        <div class="row gx-3">
                                                                                            <div class="col-sm-6">
                                                                                                <div class="two-btn-col">
                                                                                                    <a href="javascript:void(0)" class="btn btn-white sliderBoxDownArrow w-100"> <span> Se oppsummering </span> </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <div class="two-btn-col">
                                                                                                    <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow w-100"> <span> Avslutt </span> </a>
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
                                                    <div class="step-slide-box-item">
                                                        <div class="step-slide-box-description-con p-0">
                                                            <div class="step-slide-box-description-wrapper">
                                                                <div class="row align-items-center justify-content-center text-center">
                                                                    <div class="col-sm-12">
                                                                        <div class="big-text-slide-caption">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="big-text-slide-icon">
                                                                                        <figure>
                                                                                            <img src="images/icon-sucess-filled.svg">
                                                                                        </figure>  
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="big-text-slide-text">
                                                                                    <h2>Bra jobba!</h2> 
                                                                                        <p>Godt jobbet, nesten alt riktig!</p> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="list-icon-white-bg"> 
                                                                                        <ul>
                                                                                            <li>
                                                                                                <div class="list-icon-full">
                                                                                                    <span class="list-icon-img"><img src="images/icon-correct.svg"> </span>
                                                                                                    <span class="list-icon-text"> Riktige svar: <strong> 1 </strong></span>
                                                                                                </div>                                                                                                
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="list-icon-full">
                                                                                                    <span class="list-icon-img"><img src="images/icon-error.svg"></span>
                                                                                                    <span class="list-icon-text">Feil svar: <strong> 1 </strong></span>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>  
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="two-btn-con big-text-slide-btn">
                                                                                        <div class="row gx-3">
                                                                                            <div class="col-sm-6">
                                                                                                <div class="two-btn-col">
                                                                                                    <a href="javascript:void(0)" class="btn btn-white sliderBoxDownArrow w-100"> <span> Se gjennom svar </span> </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <div class="two-btn-col">
                                                                                                    <a href="javascript:void(0)" class="btn btn-next-icon sliderBoxDownArrow w-100"> <span> Gå videre </span> </a>
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
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'commons/footer.php'; ?>


<script>
let lastSelectedBox = null;

document.addEventListener("click", function(e){

    if(e.target.closest('.open-box-1')){
        lastSelectedBox = 'box-1-slide';
        goToSlideById('box-1-slide');
    }
    if(e.target.closest('.open-box-2')){
        lastSelectedBox = 'box-2-slide';
        goToSlideById('box-2-slide');
    }
    if(e.target.closest('.open-box-3')){
        lastSelectedBox = 'box-3-slide';
        goToSlideById('box-3-slide');
    }

    if(e.target.closest('.open-box-4')){
        lastSelectedBox = 'box-4-slide';
        goToSlideById('box-4-slide');
    }
    if(e.target.closest('.open-box-5')){
        lastSelectedBox = 'box-5-slide';
        goToSlideById('box-5-slide');
    }
    if(e.target.closest('.open-box-6')){
        lastSelectedBox = 'box-6-slide';
        goToSlideById('box-6-slide');
    }
    if(e.target.closest('.open-box-7')){
        lastSelectedBox = 'box-7-slide';
        goToSlideById('box-7-slide');
    }

});

function goToSlideById(id){
    let slides = document.querySelectorAll('.step-slide-box-item');
    slides.forEach((slide, index) => {
        if(slide.id === id){
            changeSlide(index, 1);
        }
    });
}

document.addEventListener("click", function(e){
    if (e.target.closest(".sliderBoxDownArrow")) {
        let slides = document.querySelectorAll('.step-slide-box-item');
        let currentSlide = slides[current];

        if (currentSlide.classList.contains('box-slide')) {
            let nextIndex = current + 1;

            while (slides[nextIndex] && slides[nextIndex].classList.contains('box-slide')) {
                nextIndex++;
            }

            changeSlide(nextIndex, 1);
            return;
        }
    }
});

document.addEventListener("click", function(e){
    if (e.target.closest(".sliderBoxUpArrow")) {
        let slides = document.querySelectorAll('.step-slide-box-item');
        let currentSlide = slides[current];

        if (currentSlide.classList.contains('box-slide')) {

            let id = currentSlide.id;

            if (id === 'box-1-slide' || id === 'box-2-slide' || id === 'box-3-slide') {
                goToSlideById('role-selection-slide');
                return;
            }

            if (id === 'box-4-slide' || id === 'box-5-slide' || id === 'box-6-slide' || id === 'box-7-slide') {
                goToSlideById('role-selection-slide-2');
                return;
            }
        }

        let prevSlide = slides[current - 1];

        if (prevSlide && prevSlide.classList.contains('box-slide') && lastSelectedBox) {
            goToSlideById(lastSelectedBox);
            lastSelectedBox = null;
            return;
        }
    }
});
</script>