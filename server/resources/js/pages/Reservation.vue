<template>
  <div style="width: 80%; margin: auto;">
    <FullCalendar defaultView="dayGridMonth" :plugins="calendarPlugins" locale="jp" :businessHours="businessHours"/>
  </div>
</template>

<style lang='scss'>

@import '~@fullcalendar/core/main.css';
@import '~@fullcalendar/daygrid/main.css';

.fc-right {
  display: flex;
}
.fc-left {
  font-size: 0.8rem;
}

</style>

<script>
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    return {
      calendarPlugins: [ dayGridPlugin ],
      prev: 'fa-chevron-left',
      next: 'fa-chevron-right',
      businessHours: {
  // days of week. an array of zero-based day of week integers (0=Sunday)
      daysOfWeek: [ 2, 4, 5, 6,],
      startTime: '10:00', // a start time (10am in this example)
      endTime: '19:00', // an end time (6pm in this example)
      }
    }
  },
};
</script>
