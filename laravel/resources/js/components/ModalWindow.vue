<template>


    <div>
   
        <button @click=" isShow= !isShow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full">
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
             <button @click="clickShow()">閉じる</button>

             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full"
             @click="clickJoin(); clickShow();">
            {{ buttonText }}
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
            
        },
        endpoint:{
        type:String,
    },
    },
    
    data(){
        return {
            isMemberBy:this.initialIsMemberBy,
            isShow: false,
           
           
        }
    },

    computed:{
        buttonText(){
            return this.isMemberBy
                ?'退会する'
                :'参加する'
        }
    },

    methods:{
        clickJoin(){
            this.isMemberBy
            ? this.exit()
            : this.join()
        },
        async join(){
            const response = await axios.put(this.endpoint)

            this.isMemberBy = true 
        },
        async exit(){
            const response = await axios.delete(this.endpoint)

            this.isMemberBy = false
        },
        clickShow(){
            this.isShow = !this.isShow
        }
    
    
}
    }
    
    
    
   
    
    </script>