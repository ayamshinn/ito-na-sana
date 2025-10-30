    document.addEventListener("DOMContentLoaded", () => {

    fetch("../../PHP/user-interface/footer.php")
      .then(res => res.text())
      .then(data => document.getElementById("footer").innerHTML = data)
      .catch(err => console.error("Footer load error:", err));
    });

