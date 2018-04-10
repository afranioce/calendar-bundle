//http://www.webslesson.info/2017/12/jquery-fullcalandar-integration-with-php-and-mysql.html
$(document).ready(function () {
    var isFirstRender = true;

    var calendar = $calendar.fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        viewRender: function viewRender(view) {
            $.ajax({
                url: Routing.generate('afranioce_calendar_list', {
                    start: view.activeRange.start._d,
                    end: view.activeRange.end._d
                }),
                type: "GET",
                success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert("Reloaded Successfully");
                }
            })
        },

        select: function (start, end, allDay) {
            var title = prompt("Enter Event Title");
            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: Routing.generate('afranioce_calendar_new'),
                    type: "POST",
                    data: { title: title, start: start, end: end },
                    success: function () {
                        calendar.fullCalendar('refetchEvents');
                        alert("Added Successfully");
                    }
                })
            }
        },

        eventResize: function (event) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
                url: "update.php",
                type: "POST",
                data: { title: title, start: start, end: end, id: id },
                success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert('Event Update');
                }
            })
        },

        eventDrop: function (event) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
                url: "update.php",
                type: "POST",
                data: { title: title, start: start, end: end, id: id },
                success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Updated");
                }
            });
        },

        eventClick: function (event) {
            if (confirm("Are you sure you want to remove it?")) {
                var id = event.id;
                $.ajax({
                    url: "delete.php",
                    type: "POST",
                    data: { id: id },
                    success: function () {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Removed");
                    }
                })
            }
        },

    });
});
