<template>


    <div>
   
        <button @click="isShow = !isShow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full">
            {{ buttonText }}
          </button>



         
      <div v-show="isShow">
          <div class=" absolute top-0 left-0 w-screen h-screen ">
            <div class="absolute w-full h-full bg-black opacity-80">
          <div class="relative w-5/6 max-w-xl h-1/2 m-auto grid bg-gray-300 border rounded-md shadow"
                style="top: 20vh; grid-template-rows: 4rem 1fr 6rem;">
             <slot name="header">
                チームに参加で記事を投稿できます。参加しますか？
             </slot>
             <button @click="isShow = !isShow">閉じる</button>

             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full">
            参加する
          </button>
          </div>
        </div>
         
      </div>
    


    
           
    </div>
    </div>

    
    
    
    
    
    
    
    
    </template>
    
    
    
    
    
    <script>
    export default{
    
    props:{
        initialIsMemberBy:{
        type: Boolean,
        default: false,
            
        }
    },
    
    data(){
        return {
            isMemberBy:this.initialIsMemberBy,
           
           
           
        }
    },

    computed:{
        buttonText(){
            return this.isMemberBy
                ?'退会する'
                :'参加する'
        }
    }
    
    
       
    }
    
    
   
    
    </script>