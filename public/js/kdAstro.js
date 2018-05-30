/* Validate CPF */

const validateCPF = (CPF) => { // Adaptação de https://gist.github.com/suissa/5fc99521933c386bcb905201bdd48c76
  CPF = document.getElementById('cpf').value

  const mod11 = (num) => num % 11
  const NOT = (x) => !x
  const isEqual = (a) => (b) => b === a
  const mergeDigits = (num1, num2) => `${num1}${num2}`
  const getTwoLastDigits = (cpf) => `${cpf[ 9 ]}${cpf[ 10 ]}`
  const getCpfNumeral = (cpf) => cpf.substr(0, 9).split('')

  const isRepeatingChars = (str) =>
    str.split('').every((elem) => elem === str[ 0 ])

  const toSumOfProducts = (multiplier) => (result, num, i) =>
    result + (num * multiplier--)

  const getSumOfProducts = (list, multiplier) =>
    list.reduce(toSumOfProducts(multiplier), 0)

  const getValidationDigit = (multiplier) => (cpf) =>
    getDigit(mod11(getSumOfProducts(cpf, multiplier)))

  const getDigit = (num) =>
    (num > 1)
      ? 11 - num
      : 0

  const isRepeatingNumbersCpf = isRepeatingChars

  const isValidCPF = (cpf) => {
    const CPF = getCpfNumeral(cpf)
    const firstDigit = getValidationDigit(10)(CPF)
    const secondDigit = getValidationDigit(11)(CPF.concat(firstDigit))

    return isEqual(getTwoLastDigits(cpf))(mergeDigits(firstDigit, secondDigit))
  }

  if (!(NOT(isRepeatingNumbersCpf(CPF)) && isValidCPF(CPF))) {
    document.getElementById('cpf').value = ''
    document.getElementById('cpf-warning').innerHTML = 'Este CPF não é valido. Tente novamente'
    return false
  } else {
    document.getElementById('cpf-warning').innerHTML = ''
    return true
  }
}

/* Get CEP and fill addresses */

const fillAddresses = () => {
  const cep = document.getElementById('cep')
  if (cep.value.length === 8) {
    fetch('https://viacep.com.br/ws/' + cep.value + '/json/')
      .then((Response) => {
        return Response.json()
      })
      .then((Response) => {
        console.log(Response)
        document.getElementById('estado').value = Response.uf
        document.getElementById('cidade').value = Response.localidade
        document.getElementById('bairro').value = Response.bairro
        document.getElementById('endereco').value = Response.logradouro
      })
  }
}

console.log(validateCPF, fillAddresses)
