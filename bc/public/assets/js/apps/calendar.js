"use strict";
!function(f, y) {
    y(window),
    y("body"),
    f.Break;
    f.Calendar = function() {
        var e = new Date
          , t = String(e.getDate()).padStart(2, "0")
          , a = String(e.getMonth() + 1).padStart(2, "0")
          , n = e.getFullYear()
          , i = new Date(e);
        i.setDate(e.getDate() + 1);
        String(i.getDate()).padStart(2, "0");
        var d = String(i.getMonth() + 1).padStart(2, "0")
          , r = i.getFullYear()
          , s = new Date(e);
        s.setDate(e.getDate() - 1);
        var o = String(s.getDate()).padStart(2, "0")
          , i = String(s.getMonth() + 1).padStart(2, "0")
          , e = n + "-" + a
          , o = s.getFullYear() + "-" + i + "-" + o
          , n = n + "-" + a + "-" + t
          , v = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
          , a = document.getElementById("calendar")
          , t = (document.getElementById("externalEvents"),
        document.getElementById("removeEvent"),
        y("#addEvent"))
          , l = (y("#addEventForm"),
        y("#addEventPopup"))
          , r = y("#updateEvent")
          , p = y("#editEventForm")
          , m = y("#editEventPopup")
          , c = y("#previewEventPopup")
          , d = y("#deleteEvent")
          , h = f.Win.width < f.Break.md
          , u = new FullCalendar.Calendar(a,{
            timeZone: "UTC",
            initialView: h ? "listWeek" : "dayGridMonth",
            themeSystem: "bootstrap",
            headerToolbar: {
                left: "title prev,next",
                center: null,
                right: "today dayGridMonth,timeGridWeek,timeGridDay,listWeek"
            },
            height: 800,
            contentHeight: 780,
            aspectRatio: 3,
            editable: !0,
            droppable: !0,
            views: {
                dayGridMonth: {
                    dayMaxEventRows: 2
                }
            },
            direction: f.State.isRTL ? "rtl" : "ltr",
            nowIndicator: !0,
            now: n + "T09:25:00",
            eventDragStart: function(e) {
                y(".popover").popover("hide")
            },
            eventMouseEnter: function(e) {
                y(e.el).popover({
                    template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
                    title: e.event._def.title,
                    content: e.event._def.extendedProps.description,
                    placement: "top"
                }),
                e.event._def.extendedProps.description ? y(e.el).popover("show") : y(e.el).popover("hide")
            },
            eventMouseLeave: function(e) {
                y(e.el).popover("hide")
            },
            eventClick: function(e) {
                var t = e.event._def.title
                  , a = e.event._def.extendedProps.description
                  , n = e.event._instance.range.start
                  , i = n.getFullYear() + "-" + String(n.getMonth() + 1).padStart(2, "0") + "-" + String(n.getDate()).padStart(2, "0")
                  , d = n.toUTCString().split(" ");
                d = "00:00:00" == (d = d[d.length - 2]) ? "" : d;
                var r = e.event._instance.range.end
                  , s = r.getFullYear() + "-" + String(r.getMonth() + 1).padStart(2, "0") + "-" + String(r.getDate()).padStart(2, "0")
                  , o = r.toUTCString().split(" ");
                o = "00:00:00" == (o = o[o.length - 2]) ? "" : o;
                var l = e.event._def.ui.classNames[0].slice(3)
                  , e = e.event._def.publicId;
                y("#edit-event-title").val(t),
                y("#edit-event-start-date").val(i).datepicker("update"),
                y("#edit-event-end-date").val(s).datepicker("update"),
                y("#edit-event-start-time").val(d),
                y("#edit-event-end-time").val(o),
                y("#edit-event-description").val(a),
                y("#edit-event-theme").val(l),
                y("#edit-event-theme").trigger("change.select2"),
                p.attr("data-id", e);
                d = String(n.getDate()).padStart(2, "0") + " " + v[n.getMonth()] + " " + n.getFullYear() + (d ? " - " + g(d) : ""),
                o = String(r.getDate()).padStart(2, "0") + " " + v[r.getMonth()] + " " + r.getFullYear() + (o ? " - " + g(o) : "");
                y("#preview-event-title").text(t),
                y("#preview-event-header").addClass("fc-" + l),
                y("#preview-event-start").text(d),
                y("#preview-event-end").text(o),
                y("#preview-event-description").text(a),
                a || y("#preview-event-description-check").css("display", "none"),
                c.modal("show"),
                y(".popover").popover("hide")
            },
            events: [{
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Reader will be distracted",
                start: e + "-03T13:30:00",
                className: "fc-event-danger",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Rabfov va hezow.",
                start: e + "-14T13:30:00",
                end: e + "-14",
                className: "fc-event-success",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "The leap into electronic",
                start: e + "-05",
                end: e + "-06",
                className: "fc-event-primary",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Lorem Ipsum passage - Product Release",
                start: e + "-02",
                end: e + "-04",
                className: "fc-event-primary",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                title: "Gibmuza viib hepobe.",
                start: e + "-12",
                end: e + "-10",
                className: "fc-event-pink-dim",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Jidehse gegoj fupelone.",
                start: e + "-07T16:00:00",
                className: "fc-event-danger-dim",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Ke uzipiz zip.",
                start: e + "-16T16:00:00",
                end: e + "-14",
                className: "fc-event-info-dim",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Piece of classical Latin literature",
                start: n,
                end: n + "-01",
                className: "fc-event-primary",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Nogok kewwib ezidbi.",
                start: n + "T10:00:00",
                className: "fc-event-info",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Mifebi ik cumean.",
                start: n + "T14:30:00",
                className: "fc-event-warning-dim",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Play Time",
                start: n + "T17:30:00",
                className: "fc-event-info",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "Rujfogve kabwih haznojuf.",
                start: o + "T05:00:00",
                className: "fc-event-danger",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }, {
                id: "default-event-id-" + Math.floor(9999999 * Math.random()),
                title: "simply dummy text of the printing",
                start: o + "T07:00:00",
                className: "fc-event-primary-dim",
                description: "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden."
            }]
        });
        function g(e) {
            return 1 < (e = e.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [e]).length && ((e = e.slice(1)).pop(),
            e[5] = +e[0] < 12 ? " AM" : " PM",
            e[0] = +e[0] % 12 || 12),
            e = e.join("")
        }
        u.render(),
        t.on("click", function(e) {
            e.preventDefault();
            var t = y("#event-title").val()
              , a = y("#event-start-date").val()
              , n = y("#event-end-date").val()
              , i = y("#event-start-time").val()
              , d = y("#event-end-time").val()
              , r = y("#event-description").val()
              , s = y("#event-theme").val()
              , e = i ? "T" + i + "Z" : ""
              , d = d ? "T" + d + "Z" : "";
            console.log(i),
            u.addEvent({
                id: "added-event-id-" + Math.floor(9999999 * Math.random()),
                title: t,
                start: a + e,
                end: n + d,
                className: "fc-" + s,
                description: r
            }),
            l.modal("hide")
        }),
        r.on("click", function(e) {
            e.preventDefault();
            var t = y("#edit-event-title").val()
              , a = y("#edit-event-start-date").val()
              , n = y("#edit-event-end-date").val()
              , i = y("#edit-event-start-time").val()
              , d = y("#edit-event-end-time").val()
              , r = y("#edit-event-description").val()
              , e = y("#edit-event-theme").val()
              , i = i ? "T" + i + "Z" : ""
              , d = d ? "T" + d + "Z" : "";
            u.getEventById(p[0].dataset.id).remove(),
            u.addEvent({
                id: p[0].dataset.id,
                title: t,
                start: a + i,
                end: n + d,
                className: "fc-" + e,
                description: r
            }),
            m.modal("hide")
        }),
        d.on("click", function(e) {
            e.preventDefault(),
            u.getEventById(p[0].dataset.id).remove()
        }),
        f.Select2(".select-calendar-theme", {
            templateResult: function(e) {
                return e.id ? y('<span class="fc-' + e.element.value + '"> <span class="dot"></span>' + e.text + "</span>") : e.text
            }
        }),
        l.on("hidden.bs.modal", function(e) {
            setTimeout(function() {
                y("#addEventForm input,#addEventForm textarea").val(""),
                y("#event-theme").val("event-primary"),
                y("#event-theme").trigger("change.select2")
            }, 1e3)
        }),
        c.on("hidden.bs.modal", function(e) {
            y("#preview-event-header").removeClass().addClass("modal-header")
        })
    }
    ,
    f.coms.docReady.push(f.Calendar)
}(NioApp, jQuery);
