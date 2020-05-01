@extends('layouts.app')

@section('content')

        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url('images/owner/slide1.jpg');">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Who we are</span>
                        <h1>About our team</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->

        </div>
        <!--end: Inspiro Slider -->

        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>OUR TEAM</h2>
                    <span class="lead">Create amaThe most happiest time of the day!.</span>
                </div>
                <div class="row team-members team-members-shadow m-b-40">
                    <div class="col-lg-3">
                        <a href="{{ url('staff/detail') }}">                        
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/6.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Alea Smith</h3>
                                    <span>Software Developer</span>
                                    <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                                    <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>   
                    </div>
                    <div class="col-lg-3">
                        <a href="">                            
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/7.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Ariol Doe</h3>
                                    <span>Software Developer</span>
                                    <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                                    <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="">                            
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/8.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Emma Ross</h3>
                                    <span>Software Developer</span>
                                    <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                                    <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/9.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Victor Loda</h3>
                                    <span>Software Developer</span>
                                    <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                                    <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
@endsection