<template>
  <div class="m-auto">
    <h1 class="text-2xl my-2 text-center">My Calendar</h1>
    <section class="mx-2 flex justify-between"> 
      <h3 class="font-bold">{{ currentMonthName }}</h3>
      <h3 class="font-bold ">{{ currentYear }}</h3>
      <h3 class="font-bold ">{{ startDay() }}</h3>

    </section>
    <section class="flex my-2">
      <p class="text-center " style="width:14.28%"  v-for="day in days" :key="day">
        {{ day }}
      </p>
    </section>
    <section class="flex flex-wrap">
      <p class="h-10 text-center" style="width:14.28%" v-for="num in startDay()" :key="num"></p>

      <p class="h-10 text-center" style="width:14.28%" v-for="num in daysInMonth(currentYear,currentMonth)" :key="num">{{ num }}</p>
    </section>
  </div>
  
</template>

<script>
export default {
  data(){
    return {
      currentMonth: new Date().getMonth()+1,
      currentMonthName: new Date().toLocaleString('default',{ month: 'long' }),
      currentYear: new Date().getFullYear(),
      days: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']
    }
  },
  methods:{
    daysInMonth(year,month)
    {
      return new Date(year,month,0).getDate();
    },
    startDay()
    {
      return new Date(this.currentYear,this.currentMonth-1,1).getDay();
    }
  }
}
</script>

<style>

</style>