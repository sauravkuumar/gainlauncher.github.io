ScrollReveal().reveal('.box1', {
    duration: 2000,
    distance: '200px',
    origin: 'left',
    interval: 500
  });

  function toggleModal() {
    var modal = document.getElementById("modal");
    modal.style.display = (modal.style.display === "block") ? "none" : "block";
}


  