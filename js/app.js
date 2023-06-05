const filas = document.getElementsByTagName("tr");
for (let i = 0; i < filas.length; i++) {
  if (i % 2 == 0) {
    filas[i].style.backgroundColor = "#c9ffe5";
  } else {
    filas[i].style.backgroundColor = "#a0d6b4";
  }
}
