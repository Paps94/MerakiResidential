@extends('layouts.app')

<!--JQuery-->
<script type="text/javascript" src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>

<!--Bootstrap js-->
<script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>

<!--Magnific popup js-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script>

<!--Owl Carousel js-->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>

<!--Mixitup js-->
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>

<!--Owl Carousel js-->
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>

<!--Typed js-->
<script type="text/javascript" src="{{ URL::asset('js/typed.js') }}"></script>

<!--particle js-->
<script type="text/javascript" src="{{ URL::asset('js/particles.js') }}"></script>

<!--rellax js-->
<script type="text/javascript" src="{{ URL::asset('js/rellax.min.js') }}"></script>

<!--Main js-->
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

@section('content')
    <!--preloader starts-->
     <!-- <div class="loader_bg">
       <div class="loader">
       </div>
     </div> -->
    <!--preloader ends-->

    <!--slider area starts-->
    <div id="home"></div>


    <div class="banner-area" id="slider-area">
      <div id="particles-js"></div>
        <div class="banner-table">
          <img class="SpaceShipL rellax" data-rellax-speed="10" data-rellax-percentage="0.1" src="{{url('/images/svg/Hero Image/SpaceShipL.svg')}}" alt="Spaceship"/>
          <img class="SpaceShipCloudL rellax cloud1" data-rellax-speed="-1" src="{{url('/images/svg/Hero Image/SpaceShipCloud1L.svg')}}" alt="Image"/>
          <img class="SpaceShipCloudL rellax cloud2" data-rellax-speed="0" src="{{url('/images/svg/Hero Image/SpaceShipCloud2L.svg')}}" alt="Image"/>
          <img class="SpaceShipCloudL rellax cloud3" data-rellax-speed="2" src="{{url('/images/svg/Hero Image/SpaceShipCloud3L.svg')}}" alt="Image"/>
          <img class="SpaceShipCloudL rellax cloud4" data-rellax-speed="4" src="{{url('/images/svg/Hero Image/SpaceShipCloud4L.svg')}}" alt="Image"/>

            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Looking up at the sky won't help you find you your forever home</h2>
                                <div>
                                  <h4>at least, not yet...</h4>
                                  <!-- <div class="text-affect"></div> -->
                                </div>
                                <span class="typed-cursor"></span>
                                <div class="clearfix"></div>
                                <div class="mouse-icon hidden-sm hidden-xs">
                                    <div class="wheel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area" style="background-color: #fff">

    </div>

    <!--slider area ends-->

<script>
  var rellax = new Rellax('.rellax');

  particlesJS.load('particles-js', 'json/particles.json', function () {});
  document.getElementById("ClickMe").addEventListener("click", surprise);

  function surprise() {
    let timerInterval
    swal({
      position: 'top-end',
      title: 'Don\'t took at me',
      html: 'GIF will close in <strong></strong> seconds.',
      backdrop:  `rgba(85,122,149,0.7)
                  url("/images/gifs/nerd2.gif")
                  bottom center
                  no-repeat
                `,
      timer: 4500,
      onOpen: () => {
        swal.showLoading()
        timerInterval = setInterval(() => {
          swal.getContent().querySelector('strong')
            .textContent = swal.getTimerLeft()
        }, 100)
      },
      onClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      if (
        // Read more about handling dismissals
        result.dismiss === swal.DismissReason.timer
      );
    });
  }
</script>

@include('flash')
@endsection
