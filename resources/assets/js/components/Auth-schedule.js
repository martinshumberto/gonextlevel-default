  ;(function($){

    function Schedule(){

      var _auth = $("#app_key").val();
      var _url = $("#app_url").val();

      if ($("#schedule").length) {
        var calendar, d, date, m, y;

        date = new Date();

        d = date.getDate();

        m = date.getMonth();

        y = date.getFullYear();

        calendar = $("#schedule").fullCalendar({
          header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay"
          },
          selectable: true,
          selectHelper: true,
          select: function select(start, end, allDay) {
            var title;
            title = prompt("Event Title:");
            if (title) {
              calendar.fullCalendar("renderEvent", {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              }, true);
            }
            return calendar.fullCalendar("unselect");
          },
          editable: true,
          events: {
            url:  _url + '/api/agenda/auth/show/' + _auth,
            type: 'POST', // Send post data
            error: function() {
              alert('There was an error while fetching events.');
            }
          }
        });
      }
    }

    new Schedule();

  }(jQuery));