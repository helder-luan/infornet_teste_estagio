const plans = [
  {
    id: 1,
    plan_name: "Plano Básico",
    offered_services: ["guincho", "chaveiro", "borracheiro"],
  },
  {
    id: 2,
    plan_name: "Plano Completo",
    offered_services: [
      "guincho",
      "chaveiro",
      "borracheiro",
      "carro reserva",
      "auxílio combustível",
      "carga de bateria",
    ],
  },
];

let choosedPlanId = 1;

function choosePlan(id = 1) {
  choosedPlanId = parseInt(id);
  const planName = document.querySelector(".plan_name");
  const servicesList = document.querySelector(".services_list");

  const choosedPlan = plans.find((plan) => {
    return plan.id === choosedPlanId;
  });

  planName.innerHTML = choosedPlan.plan_name;

  servicesList.innerHTML = "";

  choosedPlan.offered_services.map((service) => {
    servicesList.innerHTML += `<li>${service}</li>`;
  });
}

function handleFormRegister(e) {
  e.preventDefault();
  const formRegister = document.querySelector("#register");
  const planChoosed = document.querySelector("#plan");
  planChoosed.value = choosedPlanId;

  if (formRegister.style.display == "block") {
    formRegister.style.display = "none";
  } else {
    formRegister.style.display = "block";
  }
}

function checkAge() {
  const currentYear = new Date().getFullYear();

  const birthday = document.querySelector("#birth").value;
  const birthYear = parseInt(birthday.split("-")[0]);

  const age = currentYear - birthYear;
  if (age < 18) {
    return alert("Você deve ser maior de 18 anos para se cadastrar");
  }
}

function register(e) {
  e.preventDefault();

  checkAge();

  const showInfos = document.querySelector(".show-infos");

  let sexChecked;
  document.querySelectorAll("input#sex").forEach((sex) => {
    if (sex.checked) {
      sexChecked = sex.value;
    }
  });

  const choosedplan = document.querySelector("#plan").value;
  const name = document.querySelector("#name").value;
  const cpf = document.querySelector("#cpf").value;
  const birthday = document.querySelector("#birth").value;
  const address = document.querySelector("#lag").value;
  const number = document.querySelector("#num").value;
  const complement = document.querySelector("#comp").value;
  const neighborhood = document.querySelector("#neig").value;
  const city = document.querySelector("#city").value;
  const state = document.querySelector("#state").value;
  const email = document.querySelector("#email").value;
  const phone = document.querySelector("#phone").value;

  showInfos.innerHTML = `
    <table>
      <tr>
        <th>Plano Escolhido</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th>Data de nascimento</th>
        <th>Sexo</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Email</th>
        <th>Telefone</th>
      </tr>
      <tr>
        <td>${choosedplan === "1" ? "Pláno Básico" : "Plano Completo"}</td>
        <td>${name}</td>
        <td>${cpf}</td>
        <td>${birthday}</td>
        <td>${sexChecked}</td>
        <td>${address}</td>
        <td>${number}</td>
        <td>${complement}</td>
        <td>${neighborhood}</td>
        <td>${city}</td>
        <td>${state}</td>
        <td>${email}</td>
        <td>${phone}</td>
      </tr>
    </table>
  `;
}

choosePlan();
