let cards = document.querySelectorAll(".playing-card .card-flip")

rotateCount = 0
movesCount = 0
firstRotation = false

cards.forEach(function(card) {
    card.addEventListener("click", function(){
        // Chronomètre
        if(firstRotation === false){
            firstRotation = true
            startChronometer()
        }
        // Rotation
        if(rotateCount < 2 && !this.classList.contains("card-rotate")){
            rotateCount++
            this.classList.add('card-rotate')
            let cardName = this.querySelector('.card-front h3')
            cards.forEach(function(otherCard) {
                if(otherCard !== card && otherCard.classList.contains("card-rotate")){
                    let otherCardName = otherCard.querySelector('.card-front h3')
                    if (cardName.textContent.trim() == otherCardName.textContent.trim()){
                        card.classList.remove("card-rotate")
                        card.classList.add("card-finished")
                        otherCard.classList.remove("card-rotate")
                        otherCard.classList.add("card-finished")
                        rotateCount = 0
                    } else {
                        setTimeout(function(){
                            otherCard.classList.remove("card-rotate")
                            card.classList.remove("card-rotate")
                            rotateCount = 0
                        }, 1000)
                    }
                    movesCount++
                    document.querySelector('.moves').innerText = movesCount
                }
            })
        }
        // Fin du jeu
        let allCardsRotated = true
        for (let checkCard = 0; checkCard < cards.length; checkCard++) {
            if (!cards[checkCard].classList.contains("card-finished")) {
                allCardsRotated = false
            }
        }

        if (allCardsRotated) {
            stopChronometer()
            setTimeout(function(){
                let winForm = document.createElement('form')
                winForm.action = 'scripts/add_score.php'
                winForm.method = 'post'

                let movesCountInput = document.createElement('input')
                movesCountInput.type = 'hidden'
                movesCountInput.name = 'moves_count'
                movesCountInput.value = movesCount
                winForm.appendChild(movesCountInput)

                let timerCountInput = document.createElement('input')
                timerCountInput.type = 'hidden'
                timerCountInput.name = 'timer'
                timerCountInput.value = timer
                winForm.appendChild(timerCountInput)

                let difficultyInput = document.createElement('input')
                difficultyInput.type = 'hidden'
                difficultyInput.name = 'difficulty'
                difficultyInput.value = document.querySelector('h1').innerText
                winForm.appendChild(difficultyInput)
                document.body.appendChild(winForm)
                winForm.submit()
            }, 1500)
        }
    })
})
