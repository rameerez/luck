const luck_impact = 0.05
const effort_impact = 0.95
const face_emojis = ["🧑", "👱", "👨", "🧔", "👨‍🦰", "👨‍🦱", "👨‍🦳", "👨‍🦲", "👩", "👩‍🦰", "🧑‍🦰", "👩‍🦱", "🧑‍🦱", "👩‍🦳", "🧑‍🦳", "👩‍🦲", "🧑‍🦲", "👱‍♀️", "👱‍♂️", "🧓", "👴", "👵"]

const n_subjects = 100

var subjects = []
var sortedSubjects = []

var getRandomInt = (max) => {
  return Math.floor(Math.random() * Math.floor(max));
}

var generateRandomSelf = () => {
  subjects[0] = generateNewSubjectData();
  updateSubjectData(subjects, 0);
}

var generateNewSubjectData = () => {
  id = subjects.length

  luck = getRandomInt(100);
  effort = getRandomInt(100);

  randomEmoji = face_emojis[Math.floor(Math.random() * face_emojis.length)];

  luck_component = (luck * luck_impact);
  effort_component = (effort * effort_impact);

  return {
    id: id,
    emoji: randomEmoji,
    raw_luck: luck,
    raw_effort: effort,
    luck_component: luck_component,
    effort_component: effort_component,
    total: luck_component + effort_component
  }
}

var generateAllSubjects = () => {
  for (i = 1; i < n_subjects; i++) {
    subjects[i] = generateNewSubjectData()
  }
  return subjects;
}

var updateAllSubjectsInArray = arr => {
  for (i = 0; i < arr.length-1; i++) {
    updateSubjectData(arr, i)
  }
}

var generateRandomSubjects = () => {
  generateAllSubjects();
  updateAllSubjectsInArray(subjects);
}

var sortSubjectsBySuccess = () => {
  return subjects.sort(function(a, b) {
    return a.total < b.total;
  });
}

var sortAndUpdateSubjects = () => {
  var sortedSubjects = sortSubjectsBySuccess();
  updateAllSubjectsInArray(sortedSubjects);
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

  // updateAllSubjects()
});