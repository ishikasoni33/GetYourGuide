document.addEventListener("DOMContentLoaded", function() {

    const destinations = [
      { name: "Paris", image: "paris.jpg", description: "The city of love" },
      { name: "Tokyo", image: "tokyo.jpg", description: "Vibrant metropolis" },
      { name: "Rome", image: "rome.jpg", description: "Eternal city" }
    ];
    const destinationContainer = document.querySelector(".destination-container");
    destinations.forEach(destination => {
      const card = document.createElement("div");
      card.classList.add("destination-card");
      card.innerHTML = `
        <h3>${destination.name}</h3>
        <img src="${destination.image}" alt="${destination.name}">
        <p>${destination.description}</p>
      `;
      destinationContainer.appendChild(card);
    });
  });
  