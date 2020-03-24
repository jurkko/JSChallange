
@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
        <test></test>
            <div class="col-sm">
                <div class="card-welcome">
                    <a href="{{ route('PagesController.thirtydaysJSchallange')}}">
                        <div class="face face1">
                            <img class="welcome-img" src="{{url('/images/js.png')}}">
                        </div>
                    </a>
                    <div class="face face2" id="1">
                        <div class="content">                          
                            <p id="dissapearing">Read more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card-welcome">
                    <a href="{{ route('ThreejsController.threejs')}}">
                        <div class="face face1">
                            <div class="content">
                                <img src="">
                            
                            </div>
                        </div>
                    </a>
                    <div class="face face2">
                        <div class="content">
                            
                            30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
            <div class="card-welcome">
                    <a href="{{ route('PagesController.thirtyDaysOfVue')}}">
                        <div class="face face1">
                            <div class="content">
                                <img src="">
                            
                            </div>
                        </div>
                    </a>
                    <div class="face face2">
                        <div class="content">
                            
                            30 days VUE challange
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <test></test>
        
    </div>

 @endsection

 @section('javascript')

 <script src="{{ asset('js/three.js') }}" type="module">



import THREE from 'three'
var camera, scene, renderer;
var geometry, material, mesh;

init();
animate();

function init() {

	camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.01, 10 );
	camera.position.z = 1;

	scene = new THREE.Scene();

	geometry = new THREE.BoxGeometry( 0.2, 0.2, 0.2 );
	material = new THREE.MeshNormalMaterial();

	mesh = new THREE.Mesh( geometry, material );
	scene.add( mesh );

	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setSize( window.innerWidth, window.innerHeight );
	document.body.appendChild( renderer.domElement );

}

function animate() {

	requestAnimationFrame( animate );

	mesh.rotation.x += 0.01;
	mesh.rotation.y += 0.02;

	renderer.render( scene, camera );

}
 </script>

 @endsection
