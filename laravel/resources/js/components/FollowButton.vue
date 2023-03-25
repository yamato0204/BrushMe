<template>
    <div class="w-24">

        <button class=" w-full flex items-between  bg-transparent   font-semibold  py-1 px-2 border border-blue-500 rounded "
        :class="buttonColor"
        @click="clickFollow"
        >
        <div class="w-1/2 " v-show="!isFollowedBy">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
            </div>
                <div class="w-2/3 ">
                {{ buttonText }}
              </div>
              </button>
    </div>




</template>



<script>

export default {

    props:{
    initialIsFollowedBy:{
        type: Boolean,
        default:false,
    },
    authorized:{
        type:Boolean,
        default:false,
    },
    endpoint:{
        type:String,
    },

    },
    data(){
        return{
            isFollowedBy: this.initialIsFollowedBy,

        }
    },

    computed: {
        buttonColor(){
            return this.isFollowedBy
                ?'bg-blue-500 text-white'
                :'bg-white text-blue'

        },
       
        buttonText(){
            return this.isFollowedBy
                ?'フォロー中'
                :'フォロー'

        },
    },
    methods: {
        clickFollow(){
            if(!this.authorized){
                alert('フォロー機能はログイン中のみ使用できます')
          return
            }

            this.isFollowedBy
            ? this.unfollow()
            : this.follow()
        },
        async follow(){
            const response = await axios.put(this.endpoint)

            this.isFollowedBy =true
        },
        async unfollow(){
            const response =await axios.delete(this.endpoint)

            this.isFollowedBy = false
        },
    },
}


</script>
