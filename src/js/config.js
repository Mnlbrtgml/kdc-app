// for sidebar
// get the button, div, and the links then save them into a variable
const siderbar_button = document.getElementById("sidebar-trigger");
const sidebar_div = document.getElementById("sidebar");
const sidebar_home = document.getElementById("sidebar-home");
const sidebar_service = document.getElementById("sidebar-service");
const sidebar_about = document.getElementById("sidebar-about");
const sidebar_contact = document.getElementById("sidebar-contact");

// create a function that will open the sidebar then add it on the onclick attribute of the button
siderbar_button.onclick = function () {
  sidebar_div.className =
    "bg-black/80 w-full h-full fixed z-50 top-0 left-0 flex flex-row justify-between transition-all";
};

// create a function that will close the sidebar
window.onclick = function (event) {
  if (event.target == sidebar_div) {
    sidebar_div.className = "hidden";
  }

  if (
    event.target == sidebar_home ||
    event.target == sidebar_service ||
    event.target == sidebar_about ||
    event.target == sidebar_contact
  ) {
    sidebar_div.className = "hidden";
  }
};

// for modals
const add_modal = document.getElementById("add-modal");
const add_button = document.getElementById("add-modal-trigger");

const appointment_modal = document.getElementById("appointment-modal");
const appointment_button = document.getElementById("appointment-modal-trigger");

const modal_class =
  "bg-black/40 w-screen h-screen p-5 fixed z-50 top-0 left-0 flex items-center justify-center";

add_button.onclick = () => {
  add_modal.className = modal_class;
};

appointment_button.onclick = () => {
  appointment_modal.className = modal_class;
};

window.onclick = (event) => {
  if (event.target == add_modal) {
    add_modal.className = "hidden";
  } else if (event.target == appointment_modal) {
    appointment_modal.className = "hidden";
  }
};
