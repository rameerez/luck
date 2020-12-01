const face_emojis = ["🧑", "👱", "👨", "🧔", "👨‍🦰", "👨‍🦱", "👨‍🦳", "👨‍🦲", "👩", "👩‍🦰", "🧑‍🦰", "👩‍🦱", "🧑‍🦱", "👩‍🦳", "🧑‍🦳", "👩‍🦲", "🧑‍🦲", "👱‍♀️", "👱‍♂️", "🧓", "👴", "👵"]

const n_subjects = 1000

var luck_impact = 0.05
var effort_impact = 1 - luck_impact

var subjects = []
var sortedSubjects = []
var noluckSubjects = []

var getRandomInt = (max) => {
  return Math.floor(Math.random() * Math.floor(max));
}

var generateRandomSelf = () => {
  subjects = []
  subjects[0] = generateNewSubjectData();
  updateSubjectData(subjects, 0, "random");
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
    name: (id == 0 ? "You": faker.name.firstName().substring(0,1) + ". " + faker.name.lastName() ),
    emoji: randomEmoji,
    raw_luck: luck,
    raw_effort: effort,
    luck_component: luck_component,
    effort_component: effort_component,
    total: luck_component + effort_component
  }
}

var generateAllSubjects = () => {
  subjects.splice(1); // Removes all elements but the first one (current player)
  for (i = 1; i < n_subjects; i++) {
    subjects[i] = generateNewSubjectData()
  }
  return subjects;
}

var updateAllSubjectsInArray = (arr, arrType) => {
  for (i = 0; i <= arr.length-1; i++) {
    updateSubjectData(arr, i, arrType)
  }
}

var generateRandomSubjects = () => {
  generateAllSubjects();
  updateAllSubjectsInArray(subjects, "random");
}

var sortSubjectsBySuccess = () => {
  return subjects.slice().sort(function(a, b) {
    return a.total > b.total ? -1 : 1;
  });
}

var sortSubjectsByEffort = () => {
  return subjects.slice().sort(function(a, b) {
    return a.raw_effort > b.raw_effort ? -1 : 1;
  });
}

var sortAndUpdateSubjects = () => {
  sortedSubjects = sortSubjectsBySuccess();
  updateAllSubjectsInArray(sortedSubjects, "sorted");
  calculateAndShowCurrentPlayerPosition();
}

var calculateAndShowCurrentPlayerPosition = () => {
  var playerIndexInSimulation = sortedSubjects.map(e => e.id).indexOf(0);
  $(".position-in-simulation").text(playerIndexInSimulation)
  $(".percentile-below").text(100 - Math.round(playerIndexInSimulation/10))
  var playerSandwich = [
    sortedSubjects[playerIndexInSimulation-1],
    sortedSubjects[playerIndexInSimulation],
    sortedSubjects[playerIndexInSimulation+1]
  ]
  updateAllSubjectsInArray(playerSandwich, "player-position");
}

var computeTop10Metrics = () => {
  var top10Subjects = sortedSubjects.slice(0, 10);
  var averageEffort = top10Subjects.reduce( (sum, e) => { return sum + e.raw_effort; }, 0) / top10Subjects.length;
  var averageLuck = top10Subjects.reduce( (sum, e) => { return sum + e.raw_luck; }, 0) / top10Subjects.length;
  var averageSuccess = top10Subjects.reduce( (sum, e) => { return sum + e.total; }, 0) / top10Subjects.length;

  return {
    averageEffort: Math.round(averageEffort),
    averageLuck: Math.round(averageLuck),
    averageSuccess: Math.round(averageSuccess)
  }
}

var updateTopMetrics = () => {
  var top10Metrics = computeTop10Metrics();
  $("#average-effort").text(top10Metrics.averageEffort);
  $("#average-luck").text(top10Metrics.averageLuck);
  $("#average-success").text(top10Metrics.averageSuccess);
}

var onRemoveLuck = () => {
  noluckSubjects = sortSubjectsByEffort();
  updateAllSubjectsInArray(noluckSubjects, "noluck");
  updateAllSubjectsInArray(sortedSubjects, "sorted-2");
  updateDifferentSubjectsBetweenTop10SortedAndNoluck()
}

var calculateHowManyDifferentSubjectsBetweenTop10SortedAndNoluck = () => {
  var top10SortedSubjects = sortedSubjects.slice(0, 10);
  var top10NoluckSubjects = noluckSubjects.slice(0, 10);

  top10SortedSubjectsIds = top10SortedSubjects.map( e => e.id )
  return top10NoluckSubjects.filter(e => !top10SortedSubjectsIds.includes(e.id) ).length
}

var updateDifferentSubjectsBetweenTop10SortedAndNoluck = () => {
  var numberOfDifferentSubjects = calculateHowManyDifferentSubjectsBetweenTop10SortedAndNoluck();
  $("#number-of-same-subjects").text(numberOfDifferentSubjects)
  $("#number-of-different-subjects").text(10-numberOfDifferentSubjects)
}

var updateSubjectData = (subjects, subjectIndex, subjectType) => {
  var subjectData = subjects[subjectIndex]

  $("#subject-" + subjectType + "-" + subjectIndex + "-id").text(subjectData.id)
  $("#subject-" + subjectType + "-" + subjectIndex + "-name").text(subjectData.name)
  $("#subject-" + subjectType + "-" + subjectIndex + "-emoji").text(subjectData.emoji)

  $("#subject-" + subjectType + "-" + subjectIndex + "-raw-luck").text(subjectData.raw_luck)
  $("#subject-" + subjectType + "-" + subjectIndex + "-raw-effort").text(subjectData.raw_effort)

  $("#subject-" + subjectType + "-" + subjectIndex + "-raw-luck-bar").width(subjectData.raw_luck + "%").attr("aria-valuenow", subjectData.raw_luck)
  $("#subject-" + subjectType + "-" + subjectIndex + "-raw-effort-bar").width(subjectData.raw_effort + "%").attr("aria-valuenow", subjectData.raw_effort)
  
  $("#subject-" + subjectType + "-" + subjectIndex + "-result-total-score").text(Math.round(subjectData.total))
  
  $("#subject-" + subjectType + "-" + subjectIndex + "-result-effort-component-bar").width(subjectData.effort_component + "%").attr("aria-valuenow", subjectData.effort_component)
  $("#subject-" + subjectType + "-" + subjectIndex + "-result-luck-component-bar").width(subjectData.luck_component + "%").attr("aria-valuenow", subjectData.luck_component)
}

var onNewSubjectButtonClick = () => {
  generateAllSubjects()
}

var setLuck = val => {
  luck_impact = val
  effort_impact = 1 - luck_impact
  $(".luck-impact").text(Math.trunc(luck_impact*100))
  $("#effort-impact").text(Math.trunc(effort_impact*100))
  $("#luck-selector").val(Math.trunc(luck_impact*100));
}

$( document ).ready(function() {
  initSteps();
  initNextButtons();

  setLuck(0.05);
  $(".number-of-people-in-simulation").text(n_subjects)

  // updateAllSubjects()
});

$(document).on('input', '#luck-selector', e => {
  var newLuckValue = (Math.round(e.target.value) / 100).toFixed(2);
  setLuck(newLuckValue)
});