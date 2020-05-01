@extends('layouts.app')

@section('content')
    
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/parallax/5.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Gallery 2 Columns</h1>
                    <span>Description</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Pages</a>
                        </li>
                        <li class="active"><a href="#">Gallery 2 Columns</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- Gallery -->
                <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/1.jpg" data-lightbox="gallery-image"><img src="images/gallery/1.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/2.jpg" data-lightbox="gallery-image"><img src="images/gallery/2.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/3.jpg" data-lightbox="gallery-image"><img src="images/gallery/3.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/4.jpg" data-lightbox="gallery-image"><img src="images/gallery/4.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/5.jpg" data-lightbox="gallery-image"><img src="images/gallery/5.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/6.jpg" data-lightbox="gallery-image"><img src="images/gallery/6.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/7.jpg" data-lightbox="gallery-image"><img src="images/gallery/7.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/8.jpg" data-lightbox="gallery-image"><img src="images/gallery/8.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="images/gallery/9.jpg" data-lightbox="gallery-image"><img src="images/gallery/9.jpg"></a>
                    </div>
                </div>
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->

@endsection