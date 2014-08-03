/* globals hopscotch: false */

var tour = {
  id: 'hello-hopscotch',
  steps: [
    {
      target: 'hopscotch-title',
      title: 'Welcome to MAPNUS!',
      content: 'Hey there! This a tour of MAPNUS. There are many awesome features that could help you get around NUS in no time!',
      placement: 'bottom',
      arrowOffset: 60
    },
    {
      target: 'map',
      title: 'NUS Map',
      content: 'There are four controls on the map.<br /><ul><li><i>Zoom Control</i></li><li><i>Search Control</i></li><li><i>Locate Me! Control</i></li><li><i>Overlay Control</i></li></ul><br />Click <i>next</i> to walkthrough the tutorial.',
      placement: 'left'
    },
    {
      target: 'map',
      title: 'Zoom Control',
      content: 'First, the <i><b>Zoom Control</b></i> gives you the control to zoom in / out of the map.',
      placement: 'left'
    },
    {
      target: 'map',
      title: 'Search Control',
      content: 'Second, the <i><b>Search Control</b></i> allows you to search for places in NUS.',
      placement: 'left',
      yOffset: 55
    },
    {
      target: 'map',
      title: 'Locate Me! Control',
      content: 'Third, the <i><b>Locate Me! Control</b></i> is a GPS feature that pin points your current location!',
      placement: 'left',
      yOffset: 85
    },
    {
      target: 'map',
      title: 'Overlay Control',
      content: 'Last, the <i><b>Overlay Control</b></i> allows you to place various sets of overlays on top of the map for better visualization.<br /><br />Click <i>next</i> to <b>continue</b> with the walkthrough.',
      placement: 'right'
    },
    {
      target: 'dd',
      title: 'Locations Menu',
      content: 'This menu shows an overall list of places around NUS and its\' location on the map.<br /><i>Select</i> an item to display the location on the map.',
      placement: 'top'
    },
    {
      target: 'hopscotch-title',
      placement: 'bottom',
      title: 'You\'re all set!',
      content: 'End of tour! You\'re all set to go!<br /><b>Start</b> your One Stop NUS Guide now!',
    }
  ],
  showPrevButton: true,
  scrollTopMargin: 100
},

/* ========== */
/* TOUR SETUP */
/* ========== */
addClickListener = function(el, fn) {
  if (el.addEventListener) {
    el.addEventListener('click', fn, false);
  }
  else {
    el.attachEvent('onclick', fn);
  }
},

init = function() {
  var startBtnId = 'startTourBtn',
      calloutId = 'startTourCallout',
      mgr = hopscotch.getCalloutManager(),
      state = hopscotch.getState();

  if (state && state.indexOf('hello-hopscotch:') === 0) {
    // Already started the tour at some point!
    hopscotch.startTour(tour);
  }
  else {
    // Looking at the page for the first(?) time.
    setTimeout(function() {
      mgr.createCallout({
        id: calloutId,
        target: startBtnId,
        placement: 'right',
        title: 'Tour MAPNUS',
        content: 'Start by taking a tour to see MAPNUS in action!',
        yOffset: -25,
        arrowOffset: 20,
        width: 240
      });
    }, 100);
  }

  addClickListener(document.getElementById(startBtnId), function() {
    if (!hopscotch.isActive) {
      mgr.removeAllCallouts();
      hopscotch.startTour(tour);
    }
  });
};

init();
