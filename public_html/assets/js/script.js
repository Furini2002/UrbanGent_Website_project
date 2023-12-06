document.addEventListener('DOMContentLoaded', () => {
    const modeIcon = document.getElementById('mode-icon');
    const form = document.getElementById('login-form');

    modeIcon.addEventListener('click', () => {
        console.log('Mode icon clicked');

        if (form.classList.contains('dark-mode')) {
            modeIcon.src = 'assets/img/moon.png';
            modeIcon.alt = 'Lua - dark mode';
            form.classList.remove('dark-mode');
            form.classList.add('light-mode');
            console.log('dark');
        } else {
            modeIcon.src = 'assets/img/sun.png';
            modeIcon.alt = 'Sol - light mode';
            form.classList.remove('light-mode');
            form.classList.add('dark-mode');
            console.log('Light');
        }
    });
});

function formatarcpfcnpj(campo) {
    var valor = campo.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    var formato;

    if (valor.length <= 11) { // Se a quantidade de dígitos for igual ou menor que 11, formatar como CPF
        formato = valor.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
    } else { // Se maior que 11, formatar como CNPJ
        formato = valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{1,2})/, '$1.$2.$3/$4-$5');
    }

    campo.value = formato;
}

function formatartelefone() {
    const inputElement = document.getElementById("telefone");
    const numero = inputElement.value.replace(/\D/g, ""); // Remove caracteres não numéricos
  
    if (numero.length >= 2) {
      const ddd = numero.substring(0, 2);
      let numeroSemDDD = numero.substring(2);
  
      // Garante que o número não tenha mais de 8 dígitos
      if (numeroSemDDD.length > 8) {
        numeroSemDDD = numeroSemDDD.substring(0, 8);
      }
  
      inputElement.value = `(${ddd}) ${numeroSemDDD}`;
    }
  }
  
  function formatarcep(input) {
    // Remove todos os caracteres não numéricos do valor do input
    const numeroCep = input.value.replace(/\D/g, "");
  
    // Verifica se o número do CEP possui mais de 5 dígitos
    if (numeroCep.length >= 5) {
      // Formata o CEP com hífen
      const cepFormatado = `${numeroCep.substr(0, 5)}-${numeroCep.substr(5, 3)}`;
      input.value = cepFormatado;
    }
  }

 