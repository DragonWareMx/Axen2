@extends('layouts.layout')

@section('title')
Legal
@endsection

@section('head')
{{-- CSS --}}
<link rel="stylesheet" href={{asset("/css/nosotros.css")}}>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('header')
    <div class="uk-container uk-container-large uk-width-1-1 uk-margin-auto uk-padding uk-padding-remove-top"
    style="background-color:#2E3E58; margin-top:140px !important">
        <div class="uk-width-4-5@xl uk-margin-auto uk-margin-large-bottom uk-flex uk-flex-wrap uk-flex-middle">
            <div class="uk-width-1-1@m">
                <div class="uk-width-5-6@m uk-margin-auto" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="title-view uk-margin-small-bottom">Legal</div>
                    <div class="text-content">
                        <p>
                       Axen Capital is incorporated in St. Vincent & the Grenadines as an International Business Company with registration number 25670 BC 2019.
                        </p>
                        <p>
                        The website is owned and operated by Axen Capital, wich include:
                        </p>
                        <ul>
                            <li>
                                Axen Capital with registered address Suite 305, Griffith Corporate Centre, Beachmont - Kingstown, St. Vincent and the Grenadines.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <img src={{asset('/img/nosotros/img1.png')}} class="img-nosotros">
            </div> --}}
        </div>
    </div>


@endsection
