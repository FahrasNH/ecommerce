document.addEventListener("DOMContentLoaded", function() {
  document.forms[0].addEventListener('submit', (e) => {
    e.preventDefault()
    //Get and Set name
    let getH1 = document.getElementsByClassName('your-name')[0],
        submitName = document.getElementsByClassName('submit-name')[0],
        getName = document.getElementsByClassName('inp-name')[0].value,
        getValid = document.getElementsByClassName('validation-name')[0]

    submitName.disabled = true
    getH1.innerHTML= ""
    if( getName === "" ) {
      getValid.style.display = "block"
      getValid.innerHTML = "Ketikan namamu Bung!"
      getH1.insertAdjacentHTML('afterbegin',
        `Hello World!`
      )
    } else {
      if(getValid.style.display === "block") {
        getValid.style.display = "none"
      }
      getH1.insertAdjacentHTML('afterbegin',
      `Hello ${getName}!`
      )
    }

    //Create Effect
    const typeEffect = (element, speed) => {
      let text = element.innerHTML
      element.innerHTML = ""
    
      let i = 0
      let timer = setInterval(() => {
      if (i < text.length) {
        element.append(text.charAt(i))
        i++
      } else {
        clearInterval(timer)
        submitName.disabled = false
      }}, speed)
    } 

    let speed = 75;

    typeEffect(getH1, speed)
  })

  //SayHi Modal
  let btn = document.getElementById("myBtn"),
      modal = document.getElementById("myModal"),
      span = document.getElementsByClassName("close")[0],
      content = document.getElementsByClassName('isi-content')[0]

  btn.onclick = function() {
    let getName = document.getElementsByClassName('inp-name')[0].value
    modal.style.display = "block"
    content.innerHTML = ""

    getName === "" ?
    content.insertAdjacentHTML('beforeend',
      `Hi World, Thank you for your visit to my website, hopefully this will be an inspiration for us all`
    ) : 
    content.insertAdjacentHTML('beforeend',
      `Hi ${getName}, Thank you for your visit to my website, hopefully this will be an inspiration for us all`
    )
  }

  span.onclick = function() {
    modal.style.display = "none"
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none"
    }
  }
})