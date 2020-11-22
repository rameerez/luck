var step = 0;

var toggleRandomSelf = () => {
  $("#toggle-random-self-btn").toggleClass("d-none");
  $("#random-self-row").toggleClass("d-none");
}

var showAllSubjects = () => {
  $("#remaining-candidates").toggleClass("d-none");
}

var revealPattern = () => {
  $("#hidden-pattern").toggleClass("d-none");
}


var initSteps = () => {
  $("section").each( (i, e) => { 
    $(e).attr('id', 'step-' + i);
  });
}

var initNextButtons = () => {
  $(".btn-next").each( (i, e) => { 
    $(e).attr('href', '#step-' + (i+1) );
  });
}
