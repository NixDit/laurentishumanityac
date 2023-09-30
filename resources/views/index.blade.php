
@extends('templatenix.layout')
@section('title','Laurentis Humanity AC | Inicio')
@section('content')
<div role="main" class="main">
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary custom-slider-container mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['991px','991px','991px','750px','750px']" style="height: 991px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(porto/img/demos/business-consulting-2/slides/banner1.jpg); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                            <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                <h2 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Laurentis Humanity AC</h2>
                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">Servir a las poblaciones en alto estado de vulnerabilidad</h1>
                                <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Abriga un corazón</p>
                                <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">Quiero donar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(porto/img/demos/business-consulting-2/slides/banner2.jpg); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center justify-content-center justify-content-lg-end pb-5 h-100">
                            <div class="col-sm-9 col-lg-7 text-center text-lg-start pb-5 mb-5">
                                <h3 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Si no lo usas dónalo</h3>
                                <h2 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">20 años Transformando vidas</h2>
                                <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Dale una segunda vida a tus objetos</p>
                                <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">Quiero Donar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
    </div>

    <section class="bg-color-light p-relative z-index-2">
        <div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
            <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
                <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                            <img src="{{ asset('porto/img/demos/business-consulting-2/icons/efectivox.jpg') }}" alt="Donacion en efectivo" title="Donacion en efectivo" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Donaciones en efectivo</h4>
                            <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Tu ayuda fortalece la causa...</p>
                            <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Leer más +</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                            <img src="{{ asset('porto/img/demos/business-consulting-2/icons/especie.jpg') }}" alt="Donacion en especie" title="Donacion en especie" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Donaciones en especie</h4>
                            <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Con este tipo de donativos podemos cubrir las necesidades diarias de muchos hogares...</p>
                            <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Leer más +</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                    <div class="card border-radius-0 border-0 shadow-none">
                        <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                            <img src="{{ asset('porto/img/demos/business-consulting-2/icons/voluntario.jpg') }}" alt="Apoyo voluntario" title="Apoyo voluntario" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <h4 class="card-title mb-1 font-weight-semibold text-color-secondary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Trabajo de voluntario</h4>
                            <p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Con tu apoyo contribuyes al bienestar y desarrollo de muchas comunidades...</p>
                            <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Leer más +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services d-flex p-relative z-index-1 bg-color-light lazyload">
        <img title="Que hacemos en laurentis humanity" alt="Que hacemos en laurentis Humanity" src="{{ asset('porto/img/demos/business-consulting-2/bg/que-hacemos.jpg') }}" class="col-img-our-services p-absolute overflow-hidden w-50 h-100 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
        {{-- <div class="col-img-our-services p-absolute overflow-hidden w-50 h-100"></div> --}}
        <div class="container">
            <div class="row justify-content-end align-items-center h-100">
                <div class="col-lg-5 position-relative bg-color-light z-index-1 col-our-services-text">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Nuestros servicios</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Qué hacemos?</h2>
                    <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Laurentis Humanity A.C.</p>
                    <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Servir a las poblaciones en alto estado de vulnerabilidad, principalmente en tópicos de la educación y salud, con la colaboración de organismo o empresas que pueden apoyar en programas que empoderen a los que más lo necesitan. En Laurentis Humanity AC ofrece servicios de apoyo a familias y personas de bajos ingresos.</p>
                    <div class="accordion accordion-sm appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" id="accordionServices">
                        <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                            <div class="card-header py-2 bg-color-quaternary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3One">
                                        Donación de Alimentos Perecederos y Perecederos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3One" class="collapse card-accordion-our-services show">
                                <div class="card-body">
                                    <p class="mb-0">Ayudamos a las familias a mantener la comida en la mesa.
                                    </p>
                                    <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Leer más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                            <div class="card-header py-2 bg-color-quaternary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Two">
                                        Donación de ropas y artículos domésticos de segunda mano
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3Two" class="collapse card-accordion-our-services">
                                <div class="card-body">
                                    <p class="mb-0">Donamos ropas o artículos domésticos nuevos o de segunda mano. Artículos desinfectados. También regalamos juguetes.</p>
                                    <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Leer más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                            <div class="card-header py-2 bg-color-quaternary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3Three">
                                        Material Médico
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3Three" class="collapse card-accordion-our-services">
                                <div class="card-body">
                                    <p class="mb-0">Donamos artículos farmacéuticos no caducados.</p>
                                    <a href="javascript:;" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Leer más +</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:;" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Necesito donación</a>
                </div>
            </div>
        </div>
    </section>

    <section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">
        <div class="container">
            <div class="row justify-content-end py-5">
                <div class="col-lg-6">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Patrocinadores y voluntarios</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Equipo Laurentis</h2>
                    <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">En nombre de Laurentis Humanity A.C. queremos agradecer a los patrocinadores, voluntarios y todos los que suman el esfuerzo en solucionar un problema en su entorno y tienen la oportunidad de hacer un cambio directo a su comunidad.</p>
                    <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Agradecer a todos los patrocinadores, voluntarios por su apoyo. Con su contribución está apoyando a familias carentes de recursos y el desarrollo de muchos niños y niñas que lo necesitan. Agradecemos su donativo porque con cada aporte que recibimos, nos permite continuar con nuestro trabajo por un mundo mejor.</p>
                    {{-- <div class="d-flex align-items-center justify-content-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="circular-bar custom-circular-bar m-0">
                            <div class="circular-bar-chart" data-percent="89" data-plugin-options="{'barColor': '#e8465f'}">
                                <strong class="text-5 text-color-tertiary">89%</strong>
                            </div>
                        </div>
                        <h4 class="font-weight-bold text-color-tertiary m-0 ms-3">Successful cases<br/>in 15 years.</h4>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-coaching-consulting-imgs p-relative">
                    <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <img src="{{ asset('porto/img/demos/business-consulting-2/coaching/donation3.jpg') }}" class="img-fluid border-radius-0" alt="Donacion Laurentis Humanity" title="Donacion Laurentis Humanity" >
                    </div>
                    <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <img src="{{ asset('porto/img/demos/business-consulting-2/coaching/donation.jpg') }}" class="img-fluid border-radius-0" alt="Donacion Laurentis Humanity" title="Donacion Laurentis Humanity" >
                    </div>
                    <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <img src="{{ asset('porto/img/demos/business-consulting-2/coaching/donation1.jpg') }}" class="img-fluid border-radius-0" alt="Donacion Laurentis Humanity" title="Donacion Laurentis Humanity" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- INICIO RESEÑAS DE PERSONAS --}}

    {{-- <section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pb-4">
        <div class="container py-xl-5">
            <div class="row justify-content-between align-items-center pt-5 py-xl-5 mt-3">
                <div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                        <div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 1, 'autoplay': false, 'animateOut': 'fadeOut', 'autoHeight': true}">
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{ asset('porto/img/demos/business-consulting-2/logos/case-logo-1.png') }}" alt="Bullseye">
                                        <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Bullseye Case</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bold text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                        <img src="{{ asset('porto/img/avatars/avatar-3.jpg') }}" class="img-fluid rounded-circle m-0 me-3" alt="">
                                        <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">John Smith</strong><span class="text-uppercase text-start">Manager</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{ asset('porto/img/demos/business-consulting-2/logos/case-logo-2.png') }}" alt="Bullseye">
                                        <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Wall Paint Shop Case</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                        <img src="{{ asset('porto/img/avatars/avatar-2.jpg') }}" class="img-fluid rounded-circle m-0 me-3" alt="">
                                        <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">John Doe</strong><span class="text-uppercase text-start">Manager</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-testimonial-container bg-color-light">
                                <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                    <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                        <img src="{{ asset('porto/img/demos/business-consulting-2/logos/case-logo-3.png') }}" alt="Bullseye">
                                        <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                    </div>
                                    <blockquote class="px-0 pb-5">
                                        <h4 class="text-color-secondary font-weight-bold text-start">Go Gold Golden Case</h4>
                                        <p class="mb-0 text-start text-3">Lorem ipsum dolor sit amet, adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                        <img src="{{ asset('porto/img/avatars/avatar-4.jpg') }}" class="img-fluid rounded-circle m-0 me-3" alt="">
                                        <p><strong class="font-weight-extra-bold text-start text-color-secondary mb-1">Bob Smith</strong><span class="text-uppercase text-start">Manager</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mb-5 mb-xl-0">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"><span class="line-pre-title bg-color-primary"></span>real world stories</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Sucessful Cases</h2>
                    <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>
                    <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                    <div class="counters custom-counters d-flex">
                        <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <strong data-to="20" data-append="+">0</strong>
                            <label class="text-color-primary font-weight-bold">Voluntarios</label>
                        </div>
                        <div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                            <strong data-to="5000" data-append="+">0</strong>
                            <label class="text-color-primary font-weight-bold">Personas con nuevas sonrisas</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- INICIO RESEÑAS DE PERSONAS --}}

    <section class="are-you-looking-for bg-color-secondary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Haz el bien dando bienes.</p>
                    <h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Si no lo usas. ¡Dónalo!</h2>
                    <p class="font-weight-semibold text-color-light mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Otros lo necesitan</p>
                </div>
                <div class="col-xl-6 d-flex align-items-start align-items-sm-center justify-content-start justify-content-xl-end mt-4 mt-xl-0 flex-column flex-sm-row">
                    <span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
                        <span>
                            <img width="18" height="25" src="{{ asset('porto/img/demos/business-consulting-2/icons/phone.svg') }}" alt="Phone" title="Phone" >
                        </span>
                        <a class="text-color-light text-decoration-none" href="tel:5523316986">(+52) 55 2331 6986</a>
                    </span>
                    <a href="javascript:;" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Contacto para donar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-blog">
        <div class="container">
            <div class="row mt-3 pt-5">
                <div class="col">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Blog</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Actividades</h2>
                </div>
            </div>
            <div class="row mb-3 pb-5">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <article>
                                <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                    <div class="card-body p-4 z-index-1">
                                        <a href="javacript:;">
                                            <img class="card-img-top border-radius-0" src="{{ asset('porto/img/demos/business-consulting-2/blog/actividades1.jpg') }}" alt="Actividades Laurentis" title="Actividades Laurentis" >
                                        </a>
                                        {{-- <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p> --}}
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="javacript:;">Entrega de juguetes a niños del Día del Niño</a></h4>
                                            <p class="card-text mb-3">Hicimos entrega de juguetes a niños y niñas para darles una sonrisa en el Día del Niño...</p>
                                            <a href="javacript:;" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Leer más +</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article>
                                <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                    <div class="card-body p-4 z-index-1">
                                        <a href="javacript:;">
                                            <img class="card-img-top border-radius-0" src="{{ asset('porto/img/demos/business-consulting-2/blog/actividades2.jpg') }}" alt="Actividades Laurentis" title="Actividades Laurentis" >
                                        </a>
                                        {{-- <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2023-01-10">10 Jan 2023</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p> --}}
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="javacript:;">Entrega de juguetes y ropas</a></h4>
                                            <p class="card-text mb-3">Visitamos a las familias con escasos recursos para hacer la entrega de juguetes y ropas</p>
                                            <a href="javacript:;" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Leer más +</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
