<template>
  <h2>Total Super Hero {{ totalHero }}</h2>
  <ul>
    <li v-for="(hero , index) in dcHeros" :key="index"> 
      <div>{{  hero.name }} <button @click="remove(index)">x</button></div>
    </li>
  </ul>
  <form @submit.prevent="submitForm">
    <input v-model="newHero" placeholder="Type new hero"/>
    <button type="submit">Add Hero</button>
  </form>
</template>

<script>
export default 
{
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
