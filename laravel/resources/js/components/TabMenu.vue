<template>


<div>
<div class="sm:hidden w-full">
              <label for="tabs" class="sr-only">Select your country</label>
              <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>参加チーム</option>
                  
                  <option>投稿一覧</option>
              </select>
          </div>
          <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
              <li v-for="(item,id) in items" :key="item.id" class="w-full">
                  <a href="#" @click="activate(item.id)" 
                  :class="{active: active === item.id}"
                  class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">
                  {{ item.title }}</a>
              </li>  
          </ul>

          <div v-show="active === 1">
            

        <div v-for="team in teams" :key="team_id">
            
        
            <div class="w-100 mb-16  bg-white shadow rounded border border-transparent hover:border-blue-500 cursor-pointer">
                          <div class="h-48 w-full checker-bg flex items-center justify-start p-4 text-blue-500">
                            <div class="w-32 h-32 bg-gray-100 rounded-full bg-cover bg-center" >
                            </div>
                            <div class="p-4">
                              <p>{{team.information}}</p>
                            </div>
                          
                          </div>
                      
                          <div class="p-4 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                              <h1 class="text-gray-600 font-medium">{{team.name}}</h1>
                              <button class="text-gray-500 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                              </button>
                            </div>
                            <p class="text-gray-400 text-sm my-1"></p>
                          </div>
                        </div>


                        </div>
        


            
           

            




























          </div>
          <div v-show="active === 2">
           投稿一覧
          </div>
        </div>








</template>





<script>
export default{

props:{
    propsTabMenu:{
        type: Object,
        default: () => ({count:0})
    }
},

data(){
    return {
        active: 1,
        items:[
            {id:1, title:'参加チーム'},
            {id:2, title:'投稿一覧'},
        ],

        teams: this.propsTabMenu.original

       
       
    }
},

methods:{
    activate(id){
        this.active = id;
    },

   
}


}

</script>