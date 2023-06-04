<template>
  <ul>
    <li v-for="(hero , index) in dcHeros" :key="index"> 
      {{  hero.name }}
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
  data(){
    return {
      newHero: "Aquaman",
      dcHeros:
      [
        { name: "superman"  },
        { name: "Flash"  },
        { name: "Arrow" }
      ]
    }
  },
  methods: { 
    submitForm()
    {
      this.dcHeros.push({name:this.newHero});
      this.newHero = "";
    }
  }
}
</script>
