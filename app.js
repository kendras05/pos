const number = get.documentByTagName('button')
const ledger = []


function enterTextArea(e){ 
  number.addEventListener("click", e => {
  e.preventDefault()
  var text = display.innerText = e.target.innerHTML
    document.forms.form1.area.value = text;
}
}

