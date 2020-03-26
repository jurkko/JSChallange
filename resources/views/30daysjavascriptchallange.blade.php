@extends('layouts.app')

@section('additional')
<script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.min.js"></script>
@endsection

@section('content')
        <div class="container">

            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Piano"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                            <img src="{{url('images/clock.png')}}" alt="clock"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.variables')}}">
                        <h4>Variables</h4>
                            <div class="icon">
                                <img src="{{url('images/multiple.png')}}" alt="variables"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.JSArrays')}}">
                        <h4>Arrays</h4>
                            <div class="icon">
                                <img src="{{url('images/matrix.png')}}" alt="JSArrays"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.imageGalery')}}">
                        <h4>Image galery</h4>
                            <div class="icon">
                                <img src="{{url('images/art.png')}}" alt="imageGalery"/>
                            </div>
                        </a>
                    </div>
            </div>


            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.typeAheadFeature')}}">
                        <h4>Type ahead feature</h4>
                            <div class="icon">
                                <img src="{{url('images/keyboard.png')}}" alt="typeAheadFeature"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.JSArrays2')}}">
                        <h4>Arrays 2</h4>
                            <div class="icon">
                            <img src="{{url('images/matrix2.png')}}" alt="JSArrays2"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.canvas')}}">
                        <h4>Canvas</h4>
                            <div class="icon">
                                <img src="{{url('images/painting.png')}}" alt="canvas"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.tricks')}}">
                        <h4>Tricks</h4>
                            <div class="icon">
                                <img src="{{url('images/magic.png')}}" alt="tricks"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.checkBoxes')}}">
                        <h4>Check boxes</h4>
                            <div class="icon">
                                <img src="{{url('images/tick.png')}}" alt="checkBoxes"/>
                            </div>
                        </a>
                    </div>

            </div>


            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.videoPlayer')}}">
                        <h4>Video player</h4>
                            <div class="icon">
                                <img src="{{url('images/play.png')}}" alt="videoPlayer"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.konamiCode')}}">
                        <h4>Konami code</h4>
                            <div class="icon">
                            <img src="{{url('images/password.png')}}" alt="konamiCode"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.slider')}}">
                        <h4>Slider</h4>
                            <div class="icon">
                                <img src="{{url('images/slider.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.objectandarrays')}}">
                        <h4>Objects and Arrays</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.localstorage')}}">
                        <h4>Local storage</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" class="cardlink" href="{{ route('PagesController.textShadowEffect')}}">
                        <h4>Shade effect</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="textShadowEffect"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.sorting')}}">
                        <h4>Sorting</h4>
                            <div class="icon">
                            <img src="{{url('images/clock.png')}}" alt="sorting"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.sumOfAttributes')}}">
                        <h4>Sum of attributes</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.webcam')}}">
                        <h4>Webcam fun</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.speechRecognition')}}">
                        <h4>speechRecognition</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" class="cardlink" href="{{ route('PagesController.geolocation')}}">
                        <h4>Geolocation</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Piano"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.followalonglinks')}}">
                        <h4>follow along links</h4>
                            <div class="icon">
                            <img src="{{url('images/clock.png')}}" alt="Clock"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.speechSynthesis')}}">
                        <h4>speech Synthesis</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Piano"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                            <img src="{{url('images/clock.png')}}" alt="Clock"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

            </div>
        </div>
@endsection
@section('javascript')
<script>
var scene = new THREE.Scene();
			var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );

			var renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );

			var geometry = new THREE.BoxGeometry();
			var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			camera.position.z = 5;

			var animate = function () {
				requestAnimationFrame( animate );

				cube.rotation.x += 0.01;
				cube.rotation.y += 0.01;

				renderer.render( scene, camera );
			};

			animate();

</script>
@endsection