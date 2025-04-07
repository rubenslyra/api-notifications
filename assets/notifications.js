function showToast(message, type = "info") {
  const container =
    document.getElementById("toast-container") || createContainer();
  const toast = document.createElement("div");
  toast.className = `toast ${type}`;
  toast.textContent = message;

  container.appendChild(toast);
  setTimeout(() => toast.classList.add("show"), 100);
  setTimeout(() => {
    toast.classList.remove("show");
    setTimeout(() => toast.remove(), 500);
  }, 5000);
}

function createContainer() {
  const container = document.createElement("div");
  container.className = "toast-container";
  container.id = "toast-container";
  document.body.appendChild(container);
  return container;
}
