const luck_impact = 0.5
const effort_impact = 0.5

var gen_luck = 0
var gen_effort = 0
var totalScore = 0

var getRandomInt = (max) => {
  return Math.floor(Math.random() * Math.floor(max));
}

var calculateTotalScore = (luck, effort) => {
  luck_component = (luck * luck_impact);
  effort_component = (effort * effort_impact);

  return {
    luck_component: luck_component,
    effort_component: effort_component,
    total: luck_component + effort_component
  }
}

var generateNewSubject = () => {
  gen_luck = getRandomInt(100);
  gen_effort = getRandomInt(100);
  totalScore = calculateTotalScore(gen_luck, gen_effort);
}

var updateNewSubjectData = () => {
  $("#luck-impact").text(luck_impact*100)
  $("#effort-impact").text(effort_impact*100)
  
  $("#generated-luck").text(gen_luck)
  $("#generated-effort").text(gen_effort)
  
  $("#generated-luck-bar").width(gen_luck + "%").attr("aria-valuenow", gen_luck)
  $("#generated-effort-bar").width(gen_effort + "%").attr("aria-valuenow", gen_effort)
  
  $("#result-total-score-general").text(Math.round(totalScore["total"]))
  
  $("#result-effort-component-bar").width(totalScore["effort_component"] + "%").attr("aria-valuenow", totalScore["effort_component"])
  $("#result-luck-component-bar").width(totalScore["luck_component"] + "%").attr("aria-valuenow", totalScore["luck_component"])
}

var onNewSubjectButtonClick = () => {
  generateNewSubject()
  updateNewSubjectData()
}

$( document ).ready(function() {
  generateNewSubject()
  updateNewSubjectData()
});