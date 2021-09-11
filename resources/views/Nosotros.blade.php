@extends('layouts.layout')

@section('title')
Nosotros
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
            <div class="uk-width-1-2@m">
                <div class="uk-width-5-6@m uk-margin-auto" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <div class="title-view uk-margin-small-bottom">¿Quienes somos?</div>
                    <div class="text-content">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit at ultricies nunc, dui venenatis 
                        parturient ultrices lobortis etiam quam augue iaculis potenti, a odio libero vel metus 
                        dis elementum vehicula rutrum. Hac sociosqu primis faucibus purus nisl senectus gravida 
                        quam mattis, fusce morbi lacinia integer aliquet aptent pharetra imperdiet cras augue, 
                        nostra iaculis ante phasellus ut ac at himenaeos. Aptent luctus egestas non accumsan 
                        justo arcu habitant convallis, pellentesque curae quisque ullamcorper curabitur urna 
                        fermentum conubia eros, bibendum porttitor ad inceptos blandit nibh iaculis.
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-slide-bottom; target: .img-nosotros; delay: 400; repeat: true">
                <img src={{asset('/img/nosotros/img1.png')}} class="img-nosotros">
            </div>
        </div>

        <div class="uk-width-4-5@xl uk-margin-auto uk-margin-large-bottom uk-flex uk-flex-wrap-reverse uk-flex-middle">
            <div class="uk-width-1-2@m uk-flex uk-flex-center" uk-scrollspy="cls: uk-animation-fade; target: .img-nosotros; delay: 400; repeat: true">
                <img src={{asset('/img/nosotros/img2.png')}} class="img-nosotros">
            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-width-5-6@m uk-margin-auto">
                    <div class="title-view uk-margin-small-bottom">¿Qué hacemos?</div>
                    <div class="text-content uk-margin-large-bottom">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit at ultricies nunc, dui venenatis 
                    parturient ultrices lobortis etiam quam augue iaculis potenti, a odio libero vel metus 
                    dis elementum vehicula rutrum. Hac sociosqu primis faucibus purus nisl senectus gravida 
                    quam mattis, fusce morbi lacinia integer aliquet aptent.
                    </div>

                    <div class="title-view uk-margin-small-bottom">¿Qué hacemos?</div>
                    <div class="text-content">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit at ultricies nunc, dui venenatis 
                    parturient ultrices lobortis etiam quam augue iaculis potenti, a odio libero vel metus 
                    dis elementum vehicula rutrum. Hac sociosqu primis faucibus purus nisl senectus gravida 
                    quam mattis, fusce morbi lacinia integer aliquet aptent.
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@endsection