
/**
 * Checa se um número é primo de forma eficiente.
 * Um número primo é maior que 1 e só é divisível por 1 e por ele mesmo.
 *
 * @param {number} num - O número a ser verificado.
 * @returns {boolean} - Retorna true se o número for primo, false caso contrário.
 */
function isPrime(num) {
  // Primos precisam ser maiores que 1
  if (num <= 1) {
    return false;
  }
  // 2 é o único primo par
  if (num === 2) {
    return true;
  }
  // Pares maiores que 2 não são primos
  if (num % 2 === 0) {
    return false;
  }
  // Checa divisores ímpares a partir de 3 até a raiz quadrada do número
  // Essa otimização reduz muito o número de iterações
  for (let i = 3; i <= Math.sqrt(num); i += 2) {
    if (num % i === 0) {
      return false;
    }
  }

  return true;
}

/**
 * Encontra todos os números primos até um limite.
 *
 * @param {number} limit - O número máximo para buscar os primos.
 * @returns {Array<number>} - Um array contendo os números primos encontrados.
 */
function findPrimesUpTo(limit) {
  const primes = [];
  // Itera a partir do 2 (o primeiro número primo)
  for (let i = 2; i <= limit; i++) {
    if (isPrime(i)) {
      primes.push(i);
    }
  }
  return primes;
}

/**
 * Função principal para buscar e exibir os números primos.
 * Lida com a entrada do usuário e a saída na interface.
 */
function primos() {
  const inputElement = document.getElementById("inumber");
  const resultElement = document.getElementById("resp");
  const inputValue = inputElement.value;

  // Validação mais clara da entrada
  if (!inputValue || isNaN(inputValue)) {
    alert("ERRO: Por favor, digite um número válido.");
    resultElement.innerHTML = "";
    return;
  }

  const limit = Number(inputValue);

  // Valida o limite mínimo
  if (limit <= 1) {
    resultElement.innerHTML = "O número deve ser maior que 1.";
    return;
  }

  const primesList = findPrimesUpTo(limit);

  // Exibe o resultado, tratando o caso de nenhum primo encontrado
  if (primesList.length > 0) {
    resultElement.innerHTML = `Números Primos até ${limit}: <br><b>${primesList.join("</b>; <b>")}</b>;`;
  } else {
    resultElement.innerHTML = `Não há números primos até ${limit}.`;
  }
}