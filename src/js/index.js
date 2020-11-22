const luck_impact = 0.05
const effort_impact = 0.95

const n_subjects = 100

var getRandomInt = (max) => {
  return Math.floor(Math.random() * Math.floor(max));
}

var generateNewSubjectData = () => {
  luck = getRandomInt(100);
  effort = getRandomInt(100);

  luck_component = (luck * luck_impact);
  effort_component = (effort * effort_impact);

  return {
    raw_luck: luck,
    raw_effort: effort,
    luck_component: luck_component,
    effort_component: effort_component,
    total: luck_component + effort_component
  }
}

var generateAllSubjects = () => {
  var subjects = []
  for (i = 0; i < n_subjects; i++) {
    subjects[i] = generateNewSubjectData()
  }
  return subjects;
}

var updateAllSubjects = () => {
  subjectsInOrder = generateAllSubjects().sort(function(a, b) {
    return a.total < b.total;
  });

  for (i = 0; i < n_subjects; i++) {
    updateSubjectData(subjectsInOrder, i)
  }
}

var updateSubjectData = (subjects, subjectIndex) => {
  var subjectData = subjects[subjectIndex]

  $("#subject-" + subjectIndex + "-raw-luck").text(subjectData.raw_luck)
  $("#subject-" + subjectIndex + "-raw-effort").text(subjectData.raw_effort)

  $("#subject-" + subjectIndex + "-raw-luck-bar").width(subjectData.raw_luck + "%").attr("aria-valuenow", subjectData.raw_luck)
  $("#subject-" + subjectIndex + "-raw-effort-bar").width(subjectData.raw_effort + "%").attr("aria-valuenow", subjectData.raw_effort)
  
  $("#subject-" + subjectIndex + "-result-total-score").text(Math.round(subjectData.total))
  
  $("#subject-" + subjectIndex + "-result-effort-component-bar").width(subjectData.effort_component + "%").attr("aria-valuenow", subjectData.effort_component)
  $("#subject-" + subjectIndex + "-result-luck-component-bar").width(subjectData.luck_component + "%").attr("aria-valuenow", subjectData.luck_component)
}

var onNewSubjectButtonClick = () => {
  generateAllSubjects()
}

$( document ).ready(function() {
  initSteps();
  initNextButtons();

  $("#luck-impact").text(luck_impact*100)
  $("#effort-impact").text(effort_impact*100)

  updateAllSubjects()
});