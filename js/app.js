document.querySelectorAll(".item").forEach((item) => {
  let quantity = 1;

  const qyt = item.querySelector(".quantity");
  item.querySelectorAll("button").forEach((btn) => {
    btn.addEventListener("click", async () => {
      if (btn.classList.contains("plus")) {
        quantity++;
      }
      if (btn.classList.contains("minus")) {
        if (quantity <= 1) quantity = 1;
        else quantity--;
      }
      qyt.textContent = quantity;
    });
  });
});

document.querySelector(".filter").addEventListener("change", (e) => {
  const selectedCategory = e.target.value;
  const allItems = document.querySelectorAll(".item");

  allItems.forEach((item) => {
    const itemCategory = item.getAttribute("category");

    if (selectedCategory === "all" || itemCategory === selectedCategory) {
      item.style.display = "block"; // or "flex" depending on your CSS
    } else {
      item.style.display = "none";
    }
  });
});
