<template>
  <div>
    <button type="button">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"  
    :class="{'fill-current text-red-400':this.isLikedBy,'animate-bounce':this.gotToLike }"
    @click="clickLike" >
                                      
      <path  stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"  />
                                      
    </svg>
  </button>
  {{ countLikes }}
</div>
  </template>
  
  <script>
   export default {
    props: {
      initialIsLikedBy: {
        type: Boolean,
        default: false,
      },
      initialCountLikes: {
        type: Number,
        default: 0,
      },

      authorized: {
        type: Boolean,
        default: false,
      },

      endpoint:{
        type:String,
      },
    },
    data() {
      return {
        isLikedBy: this.initialIsLikedBy,

        countLikes: this.initialCountLikes,

        gotToLike: false,
      }
    },

    methods:{

      clickLike() {
        if (!this.authorized) {
          alert('いいね機能はログイン中のみ使用できます')
          return
        }

        this.isLikedBy
          ? this.unlike()
          : this.like()
      },
      async like() {
        const response = await axios.put(this.endpoint)

        this.isLikedBy = true
        this.countLikes = response.data.countLikes

        this.gotToLike = true

        setTimeout(() => {
          this.gotToLike = false},2500)
      },
      async unlike() {
        const response = await axios.delete(this.endpoint)

        this.isLikedBy = false
        this.countLikes = response.data.countLikes
        this.gotToLike = false
      },
    }
  }
  </script>
  
  