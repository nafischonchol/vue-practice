<template>
  <AppHeader />
  <div class="w-full flex">
    <MyCalendar />
  </div>
</template>

<script>
import AppHeader from './components/AppHeader.vue';
import MyCalendar from './components/MyCalendar.vue';

export default 
{
  components: {
    AppHeader,MyCalendar
  }
  
}
</script>
