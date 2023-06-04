<template>
  <div class="m-auto">
      <h2 class="text-2xl text-center mt-10"> Total Super Hero {{ totalHero }}</h2>
      <ul>
        <li class="flex justify-between" v-for="(hero , index) in dcHeros" :key="index"> 
          <div>{{  hero.name }} </div>
          <button @click="remove(index)">x</button>
        </li>
      </ul>
      <form class="mt-10" @submit.prevent="submitForm">
        <input class="border rounded-lg" v-model="newHero" placeholder="Type new hero"/>
        <button class="border rounded bg-gradient-to-t from-red-700 to-pink-500 text-white"  type="submit">Add Hero</button>
      </form>
    </div>
</template>

<script>
export default {
    computed:{
    totalHero(){
      return this.dcHeros.length 
    }
  },
  data(){
    return {
      newHero: "Aquaman",
      dcHeros:
      [
        { name: "superman"  },
        { name: "Flash"  },
        { name: "Arrow" }
      ],

    }
  },
  methods: { 
    submitForm()
    {
      if(this.newHero !== "")
      {
        this.dcHeros.push({name:this.newHero});
        this.newHero = "";
      }
    },
    remove(index){
      this.dcHeros = this.dcHeros.filter((hero,i) => i != index );
    }
  }
}
</script>

<style>

</style>