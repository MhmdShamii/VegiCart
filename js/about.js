document.addEventListener("DOMContentLoaded", function () {
  // Timeline expand/collapse
  const showMoreBtn = document.getElementById("showMoreTimeline");
  const extraTimeline = document.getElementById("extraTimeline");

  showMoreBtn.addEventListener("click", function () {
    if (
      extraTimeline.style.display === "none" ||
      !extraTimeline.style.display
    ) {
      extraTimeline.style.display = "block";
      showMoreBtn.innerHTML =
        'Show Less Milestones <i class="fas fa-chevron-up"></i>';
    } else {
      extraTimeline.style.display = "none";
      showMoreBtn.innerHTML =
        'Show More Milestones <i class="fas fa-chevron-down"></i>';
    }
  });

  // Values table filtering
  const valueFilter = document.getElementById("valueFilter");
  const valueRows = document.querySelectorAll(".values-table tbody tr");

  valueFilter.addEventListener("change", function () {
    const filterValue = this.value;

    valueRows.forEach((row) => {
      if (
        filterValue === "all" ||
        row.getAttribute("data-value") === filterValue
      ) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  });

  const teamModal = document.getElementById("teamModal");
  const viewFullTeamBtn = document.getElementById("viewFullTeam");
  const closeModal = document.querySelector(".close-modal");
  const teamGrid = document.getElementById("teamGrid");

  const teamMembers = [
    {
      id: 1,
      name: "Mohamamd shami",
      role: "Founder & CEO",
      img: "./rec/mhmd.jpeg",
    },
    {
      id: 2,
      name: "Aya Khalife",
      role: "Head of Operations",
      img: "./rec/yoyy.jpeg",
    },
  ];

  function renderTeamGrid() {
    teamGrid.innerHTML = "";
    teamMembers.forEach((member) => {
      const card = document.createElement("div");
      card.className = "team-card";
      card.innerHTML = `
                <img src="${member.img}" alt="${member.name}" class="team-card-img">
                <h4>${member.name}</h4>
                <p>${member.role}</p>
            `;
      teamGrid.appendChild(card);
    });
  }

  viewFullTeamBtn.addEventListener("click", function () {
    renderTeamGrid();
    teamModal.style.display = "block";
    document.body.style.overflow = "hidden";
  });

  closeModal.addEventListener("click", function () {
    teamModal.style.display = "none";
    document.body.style.overflow = "";
  });

  window.addEventListener("click", function (event) {
    if (event.target === teamModal) {
      teamModal.style.display = "none";
      document.body.style.overflow = "";
    }
  });

  // Chart rendering
  function renderChart() {
    const ctx = document.getElementById("growthChart").getContext("2d");

    if (window.growthChart) {
      window.growthChart.destroy();
    }

    window.growthChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["2023", "2024", "2025"],
        datasets: [
          {
            label: "Customers",
            data: [150, 1200, 5000],
            backgroundColor: "#4CAF50",
            borderColor: "#388E3C",
            borderWidth: 1,
          },
          {
            label: "Produce Varieties",
            data: [25, 45, 80],
            backgroundColor: "#8BC34A",
            borderColor: "#689F38",
            borderWidth: 1,
          },
          {
            label: "Delivery Areas",
            data: [1, 3, 5],
            backgroundColor: "#CDDC39",
            borderColor: "#AFB42B",
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            text: "VeggieCart Growth Over Years",
          },
        },
      },
    });
  }

  // Initialize the page
  renderChart();
});
