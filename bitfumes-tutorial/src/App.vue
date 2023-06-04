<template>
  <ul>
    <li v-for="(hero , index) in dcHeros" :key="index"> 
     {{ index }} : {{  hero.name }}
    </li>
  </ul>
  <input :value = "newHero" />
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
  }
}
</script>
