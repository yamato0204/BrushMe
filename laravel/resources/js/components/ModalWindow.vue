<template>


    <div>
   
        <button @click="isShow = !isShow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-8 py-2 px-4  rounded-full">
            参加する
          </button>



         
      <div v-show="isShow">
          <div class="fixed table h-full w-full z-0 top-0 left-0 bg-gray-800 ">
            <div class="table-cell align-middle">
          <div class="w-1/2 h-1/2 mx-16 my-16 bg-white z-2 ">
             <slot name="header">
                チームに参加で記事を投稿できます。参加しますか？
             </slot>
             <button @click="isShow = !isShow">閉じる</button>
          </div>
        </div>
         
      </div>
    


    
           
    </div>
    </div>

    
    
    
    
    
    
    
    
    </template>
    
    
    
    
    
    <script>
    export default{
    
    props:{
        modalWindow:{
        type: Boolean,
        default: false,
            
        }
    },
    
    data(){
        return {
            isShow:this.modalWindow,
           
           
           
        }
    },
    
    
       
    }
    
    
   
    
    </script>