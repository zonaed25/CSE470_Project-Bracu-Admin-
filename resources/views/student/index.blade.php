@extends('layouts.app')
@section('content')
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1561877202-53d0e24be55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1561622245-4d9cd72441a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1508724735996-b41f69dfe2a9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1156&q=80"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="faq mb-5">
        <div class="container mt-4">
            <h2>FAQ</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">Why is the sky blue?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">How much does the Earth weigh?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">How do airplanes stay up?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="announcement bg-dark pt-2 pb-1 text-white">
        <marquee direction="left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur voluptatem facilis molestiae labore ipsum explicabo vitae reprehenderit aspernatur sequi maxime!</marquee>
    </div>
</div>
@endsection