const cleanAddresses = () => {
  document.getElementById('estado').value = ''
  document.getElementById('cidade').value = ''
  document.getElementById('bairro').value = ''
  document.getElementById('endereco').value = ''
}

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

console.log(fillAddresses)
