var step = 0;

var toggleRandomSelf = () => {
  $("#toggle-random-self-btn").toggleClass("d-none");
  $("#random-self-row").toggleClass("d-none");
}

var showAllSubjects = () => {
  $("#remaining-candidates").toggleClass("d-none");
  ga('send', 'event', 'LuckSuccessExperiment', 'click', "showAllSubjects");
}

var showAllTopSubjects = () => {
  $(".remaining-top-subjects").toggleClass("d-none");
  ga('send', 'event', 'LuckSuccessExperiment', 'click', "showAllTopSubjects");
}

var revealPattern = () => {
  $("#hidden-pattern").toggleClass("d-none");
  ga('send', 'event', 'LuckSuccessExperiment', 'click', "revealPattern");
}


var initSteps = () => {
  $("section").each( (i, e) => { 
    $(e).attr('id', 'step-' + i);
    if(i>0){ $(e).toggleClass('d-none'); }
  });
}

var initNextButtons = () => {
  $(".btn-next").each( (i, e) => { 
    $(e).attr('href', '#step-' + (i+1) );
  });
}

$(".btn-next").on("click", e => {
  e.preventDefault;
  if ($(e.target).parents('section').length > 0) {
    $(e.target).parents('section').toggleClass("d-none")
    var step_id = $(e.target).attr("href")
    $(step_id).toggleClass("d-none")
    ga('send', 'event', 'LuckSuccessExperiment', 'navigate', step_id);
  }
})

var chk = document.getElementById('chk');

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark');
  $(".footer-signature").toggleClass("d-none")
  ga('send', 'event', 'LuckSuccessExperiment', 'click', "toggleDarkMode");
});



function copy_sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function copyIt(param) {
  ga('send', 'event', 'LuckSuccessExperiment', 'click', "copyShareLink");

  var copy_data = param.getAttribute('data-copy');
  var clipboard = new Clipboard('.copy-share-link', {
        text: function() {
            var slug = copy_data;
            return slug;
        }
    });

    clipboard.on('success', async function(e) {
      $('.copy-share-link').find('span').text('Copied');
      await copy_sleep(2000);
      $('.copy-share-link').find('span').text('Copy link');
    });

    clipboard.on('error', async function(e) {
      $('.copy-share-link').find('span').text('Please press Ctrl+C');
      await copy_sleep(2000);
      $('.copy-share-link').find('span').text('Copy link');
    });
}


