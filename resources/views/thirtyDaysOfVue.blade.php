@extends('layouts.app')

@section('additional')
<script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.min.js"></script>
@endsection

@section('content')
        <div class="container">

            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.component1')}}">
                        <h4>Component 1</h4>
                            <div class="icon">
                              
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                       
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.variables')}}">
                        <h4>Variables</h4>
                 
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.JSArrays')}}">
                        <h4>Arrays</h4>
                            
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.imageGalery')}}">
                        <h4>Image galery</h4>
                           
                        </a>
                    </div>
            </div>


            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.typeAheadFeature')}}">
                        <h4>Type ahead feature</h4>
                            
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.JSArrays2')}}">
                        <h4>Arrays 2</h4>
                            
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.canvas')}}">
                        <h4>Canvas</h4>
                          
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.tricks')}}">
                        <h4>Tricks</h4>
                           
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.checkBoxes')}}">
                        <h4>Check boxes</h4>
                            
                        </a>
                    </div>

            </div>


            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.videoPlayer')}}">
                        <h4>Video player</h4>
                         
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.konamiCode')}}">
                        <h4>Konami code</h4>
                         
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.slider')}}">
                        <h4>Slider</h4>
                          
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.objectandarrays')}}">
                        <h4>Objects and Arrays</h4>
                        
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.localstorage')}}">
                        <h4>Local storage</h4>
                            
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" class="cardlink" href="{{ route('PagesController.textShadowEffect')}}">
                        <h4>Shade effect</h4>
                            
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.sorting')}}">
                        <h4>Sorting</h4>
                           
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.sumOfAttributes')}}">
                        <h4>Sum of attributes</h4>
                      
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.webcam')}}">
                        <h4>Webcam fun</h4>
                          
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                           
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                           
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                           
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                         
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                        
                        </a>
                    </div>

            </div>

            
            <div class="row">
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                          
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                       
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                         
                        </a>
                    </div>

                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                        
                        </a>
                    </div>

            </div>
        </div>
@endsection
