let cardGame = document.querySelectorAll(".card-container")
let sortedCards = Array.from(cardGame);

function cardShuffle(cards) {
    for (let cardNumber = cards.length - 1; cardNumber > 0; cardNumber--) {
      let randomNumber = Math.floor(Math.random() * (cardNumber + 1))
      let switchNumber = cards[cardNumber]
      cards[cardNumber] = cards[randomNumber]
      cards[randomNumber] = switchNumber
    }
    return cards;
  }

let shuffledCards = cardShuffle(sortedCards);

let cardsContainer = document.querySelector(".boardgame")

shuffledCards.forEach(function(card) {
    cardsContainer.appendChild(card)
    card.classList.remove("hidden")
});