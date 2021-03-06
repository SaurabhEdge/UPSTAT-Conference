function openDay(evt, day) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName('tabcontent');
    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(' active', '');
    }

    let idStyle = document.getElementById(day).style.display;
    if (idStyle == 'block') {
        document.getElementById(day).style.display = 'none';
    } else {
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = 'none';
        }
        document.getElementById(day).style.display = 'block';
        evt.currentTarget.className += ' active';
    }

    console.log(evt.currentTarget);
}

function showEventDetails() {
    var evd = document.getElementById('eventDetails');
    if (evd.style.display === 'none') {
        evd.style.display = 'block';
    } else {
        evd.style.display = 'none';
    }
}

var acc = document.getElementsByClassName('accordion');
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function() {
        /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
        this.classList.toggle('active');

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === 'block') {
            panel.style.display = 'none';
        } else {
            panel.style.display = 'block';
        }
    });
}

var subacc = document.getElementsByClassName('sub-accordion');
var i;

for (i = 0; i < subacc.length; i++) {
    subacc[i].addEventListener('click', function() {
        /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
        this.classList.toggle('active');

        /* Toggle between hiding and showing the active panel */
        var subpanel = this.nextElementSibling;
        if (subpanel.style.display === 'block') {
            subpanel.style.display = 'none';
        } else {
            subpanel.style.display = 'block';
        }
    });
}