let currentAmount = 0
const numberButtons = document.querySelectorAll(".number-btn")
const addButton = document.querySelector(".add-btn")

function accumlator()
numberButtons.forEach((button)=> {
  button.addEventListener("click", (e)=> {
    currentAmount += parseInt(e.target.innerText)
	})
})
}


function insertTextarea (){
let currentAmount = document.getElementById("ledger").value

document.getElementById("ledger").value = currentValue + "\n" + yourNewValue
 
}




//function enterTextArea(e){ 
  //number.addEventListener("click", e => {
 // e.preventDefault()
  //var text = display.innerText = e.target.innerHTML
    //document.forms.form1.area.value = text;
//}
//}



