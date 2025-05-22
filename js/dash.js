document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".stock").forEach((button) => {
    button.addEventListener("click", async function () {
      const itemId = this.getAttribute("data-id");

      try {
        await fetch("dashboard.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: `item_id=${itemId}`,
        });

        this.classList.toggle("in");
        this.classList.toggle("out");
        this.textContent = this.classList.contains("in")
          ? "In Stock"
          : "Out of Stock";
      } catch (error) {
        console.error("Error:", error);
      } finally {
        this.disabled = false;
      }
    });
  });
  document.querySelector(".add").addEventListener("click", toggleForm);
});

function toggleForm(e) {
  document.querySelector(".formMain").classList.toggle("closed");
  e.preventdefault();
}
