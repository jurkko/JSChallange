<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    {{user}}
                    <div class="panel-body">
                       
                        I'm an example component!
                       <h1>{{message}}</h1>
                    </div>
                  
                      <button @click="counter +=1"> +1 </button>
                            <p>{{counter}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data() {
            return {
                counter:0,
                message:'henlo fren'
                
            }
        },
          mounted(){
              console.log('working');
        }
    }
  
</script>