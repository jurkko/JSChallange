<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/drums/drums.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/drums/drums.js') }}"></script>

    </head>
    <body background="/images/pianoBackground.jpg">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="">Some vanilla JS personal pet projects, to sharpen my JS skills</a>
        </nav>
        <div class="screen">
            
        <div class="container">
            <div class="pianokeys">
       
                        <div data-key="65" class="keywhite">
                            <kbd>a</kbd>
                            <span class="sound"></span>
                        </div>
                 
                        <div data-key="83" class="key">
                        
                                <kbd>S</kbd>
         
                            <span class="sound"></span>
                        </div>
             
                
                        <div data-key="68" class="keywhite">
                            <div class="buttonposition">
                                <kbd>D</kbd>
                            </div>
                            <span class="sound"></span>
                        </div>
            
                        <div data-key="70" class="key">
                            <kbd>F</kbd>
                            <span class="sound"></span>
                        </div>
                 
                 
                        <div data-key="71" class="keywhite">
                            <div class="buttonposition">
                                <kbd>G</kbd>
                            </div>
                            <span class="sound"></span>
                        </div>
              
                  
                        <div data-key="72" class="key">
                            <kbd>H</kbd>
                            <span class="sound"></span>
                        </div>
                 
                  
                        <div data-key="74" class="keywhite">
                            <div class="buttonposition">
                                <kbd>J</kbd>
                            </div>
                            <span class="sound"></span>
                        </div>
                   
                        <div data-key="75" class="keywhite">
                            <kbd>K</kbd>
                            <span class="sound"></span>
                        </div>
                 
                        <div data-key="76" class="key">
                            <kbd>L</kbd>
                            <span class="sound"></span>
                        </div>
              
                 
                        <div data-key="186" class="keywhite">
                            <div class="buttonposition">
                                <kbd>Č</kbd>
                            </div>
                            <span class="sound"></span>
                        </div>
                  
                   
                        <div data-key="222" class="key">
                            <kbd>Ć</kbd>
                            <span class="sound"></span>
                        </div>
                 
                        <div data-key="220" class="keywhite">
                            <div class="buttonposition">
                                <kbd>Ž</kbd>
                            </div>
                            <span class="sound"></span>
                        </div>
                       
                    
            </div>
       
               
        </div>
        </div>
        <audio data-key="65" src="{{ asset('audio/c.wav') }}"></audio>
        <audio data-key="83" src="{{ asset('audio/c2.wav') }}"></audio>
        <audio data-key="68" src="{{ asset('audio/d.wav') }}"></audio>
        <audio data-key="70" src="{{ asset('audio/e.wav') }}"></audio>
        <audio data-key="71" src="{{ asset('audio/f.wav') }}"></audio>
        <audio data-key="72" src="{{ asset('audio/f2.wav') }}"></audio>
        <audio data-key="74" src="{{ asset('audio/g.wav') }}"></audio>
        <audio data-key="75" src="{{ asset('audio/g2.wav') }}"></audio>
        <audio data-key="76" src="{{ asset('audio/a.wav') }}"></audio>
        <audio data-key="186" src="{{ asset('audio/b.wav') }}"></audio>
        <audio data-key="222" src="{{ asset('audio/c2.wav') }}"></audio>
        <audio data-key="220" src="{{ asset('audio/c3.wav') }}"></audio>
    </body>
 
</html>
