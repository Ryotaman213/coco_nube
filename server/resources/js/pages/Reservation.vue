<template>
  <div style="max-width: 900px; margin: auto;">
    <FullCalendar defaultView="timeGridWeek" locale="jp"
      :businessHours="{
        daysOfWeek: [2, 4, 5, 6,],
        startTime: '10:00',
        endTime: '19:00',
      }"
      :minTime="minTime"
      :maxTime="maxTime"
      :header="{
        right: 'today prev,next',
      }"
      :plugins="calendarPlugins"
      :allDaySlot="false"
      :events="events"
      />
  </div>
</template>

<style lang='scss'>

@import '~@fullcalendar/core/main.css';
@import '~@fullcalendar/daygrid/main.css';
@import '~@fullcalendar/timegrid/main.css';

.fc-right {
  display: flex;
  font-size: 1.2vw;
}
.fc-left {
  font-size: 0.65rem;
}
thead.fc-head {
  font-size: 0.7vw;
}
.fc-time-grid .fc-slats td {
  height: 2.5vw;
  font-size: 0.7vw;
}
thead {
  height: 2.5vw;
}

</style>

<script>
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    return {
      events: {},
    //   events: [
    //   {
    //     start: '2019-08-12T10:30:00',
    //     end: '2019-08-12T12:30:00'
    //   },
    //   {
    //     start: '2019-08-12T13:00:00'
    //   },
    //   {
    //     start: '2019-08-12T14:30:00'
    //   },
    //   {
    //     start: '2019-08-13T13:00:00'
    //   },
    // ],
      calendarPlugins: [
      timeGridPlugin,
      dayGridPlugin,
      ],
      minTime: '10:00',
      maxTime: '19:00',
      slotDuration: '00:30:00',
      businessHours: {
      // days of week. an array of zero-based day of week integers (0=Sunday)
      daysOfWeek: [ 2, 4, 5, 6,],
      startTime: '10:00', // a start time (10am in this example)
      endTime: '19:00', // an end time (7pm in this example)
      }
    }
  },
  created() {
            axios.get('/api/reservation').then(response => {
                    this.events = response.data
                });
        },
        computed: {
          reserved: function() {
          }
        },
};
</script>
