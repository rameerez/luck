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
    $($(e.target).attr("href")).toggleClass("d-none")
  }
})



function copy_sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function copyIt(param) {
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


