<script setup xmlns="http://www.w3.org/1999/html">
import { ref } from 'vue';
import {Head, Link, router, usePage} from '@inertiajs/vue3';



const menu=[
  
    {
        name:"Services",
        url:route(''),
        route:'',

    },

    {
        name:"Our Process",
        url:route(''),
        route:'',
        

    },

    {
        name:"Requst A Consultation",
        url:route(''),
        route:'',
    }
];
</script>

<template>
    <div>
         <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <template v-for="item in menu" :key="item.name">
                <NavLink
                v-if="item.when ? item.when(): true"
                :href="item.url"
                :active="route().current(item.route)">
                {{item.name}}
            </NavLink>
        </template>
    </div>
</div>
        
</template>
