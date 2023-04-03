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