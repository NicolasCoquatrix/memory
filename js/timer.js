let hours = 0
let minutes = 0
let seconds = 0
let timer = 0
let interval

function startChronometer() {
    interval = setInterval(updateChronometer, 1000)
}

function stopChronometer() {
    clearInterval(interval)
}

function updateChronometer() {
    timer++
    seconds++
    if (seconds === 60) {
      seconds = 0
      minutes++
      if (minutes === 60) {
        minutes = 0
        hours++
      }
    }
    updateDisplay()
}
  
function updateDisplay() {
    let displayHours = document.querySelector('.hours')
    displayHours.innerText = formatTime(hours)
    let displayMinutes = document.querySelector('.minutes')
    displayMinutes.innerText = formatTime(minutes)
    let displaySecondes = document.querySelector('.seconds')
    displaySecondes.innerText = formatTimeSeconds(seconds)

    if(hours != 0 && displayHours.classList.contains("hidden")){
        displayHours.classList.remove("hidden")
    }
    if(minutes != 0 && displayMinutes.classList.contains("hidden")){
        displayMinutes.classList.remove("hidden")
    }
}
  
function formatTimeSeconds(time) {
    return time < 10 ? '0' + time : time
}

function formatTime(time) {
    return time < 10 ? '0' + time + ":" : time + ":"
}